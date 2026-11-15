<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    // Available Jobs
    
public function index(\Illuminate\Http\Request $request)
{
    $query = JobPost::query();

    if ($request->filled('search')) {
        $search = $request->search;

        $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('description', 'like', "%{$search}%");
        });
    }

    if ($request->filled('location')) {
        $query->where(
            'location',
            'like',
            '%' . $request->location . '%'
        );
    }

  $jobs = $query->latest()->paginate(8)->withQueryString();

    return view('jobs.index', compact('jobs'));
}


    // Create Job Page
    public function create()
    {
        return view('jobs.create');
    }

    // Store New Job
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
        ]);

        $validated['user_id'] = auth()->id();

        JobPost::create($validated);

        return redirect()
            ->route('jobs.my')
            ->with('success', 'Job posted successfully!');
    }

    // Show Job Details
    public function show(JobPost $job)
    {
        return view('jobs.show', compact('job'));
    }

    // My Jobs
    public function myJobs()
    {
        $jobs = JobPost::where('user_id', auth()->id())
            ->latest()
            ->get();

        // Get applications for the logged-in user's jobs
        $applications = JobApplication::whereIn(
            'job_post_id',
            $jobs->pluck('id')
        )
        ->with('user')
        ->latest()
        ->get();

        return view(
            'jobs.my',
            compact('jobs', 'applications')
        );
    }

    // Apply Page
    public function apply(JobPost $job)
    {
        return view('jobs.apply', [
            'jobPost' => $job
        ]);
    }

    // Submit Application
    public function submitApplication(
        Request $request,
        JobPost $job
    ) {
        $validated = $request->validate([
            'phone' => 'required|string|max:20',
            'cover_letter' => 'required|string|max:2000',
        ]);

        // Cannot apply to own job
        if ($job->user_id == auth()->id()) {
            return redirect()
                ->route('jobs.show', $job->id)
                ->with(
                    'error',
                    'You cannot apply to your own job.'
                );
        }

        // Check duplicate application
        $alreadyApplied = JobApplication::where(
            'job_post_id',
            $job->id
        )
        ->where(
            'user_id',
            auth()->id()
        )
        ->exists();

        if ($alreadyApplied) {
            return redirect()
                ->route('jobs.show', $job->id)
                ->with(
                    'error',
                    'You have already applied for this job.'
                );
        }

        // Save Application
        JobApplication::create([
            'job_post_id' => $job->id,
            'user_id' => auth()->id(),
            'phone' => $validated['phone'],
            'cover_letter' => $validated['cover_letter'],
            'status' => 'pending',
        ]);

        return redirect()
            ->route('jobs.show', $job->id)
            ->with(
                'success',
                'Application submitted successfully!'
            );
    }

    // My Applications
    public function myApplications()
    {
        $applications = JobApplication::where(
            'user_id',
            auth()->id()
        )
        ->with('jobPost')
        ->latest()
        ->get();

        return view(
            'applications.my',
            compact('applications')
        );
    }

    // Applicants Page
    public function applicants(JobPost $job)
    {
        // Only job owner can see applicants
        if ($job->user_id != auth()->id()) {
            abort(403);
        }

        $applications = JobApplication::where(
            'job_post_id',
            $job->id
        )
        ->with('user')
        ->latest()
        ->get();

        return view(
            'jobs.applicants',
            compact('job', 'applications')
        );
    }

    // Accept Application
    public function acceptApplication(JobApplication $application)
    {
        // Get the job
        $job = JobPost::findOrFail(
            $application->job_post_id
        );

        // Only job owner can accept
        if ($job->user_id != auth()->id()) {
            abort(403);
        }

        $application->update([
            'status' => 'accepted'
        ]);

        return back()->with(
            'success',
            'Application accepted successfully!'
        );
    }

    // Reject Application
    public function rejectApplication(JobApplication $application)
    {
        // Get the job
        $job = JobPost::findOrFail(
            $application->job_post_id
        );

        // Only job owner can reject
        if ($job->user_id != auth()->id()) {
            abort(403);
        }

        $application->update([
            'status' => 'rejected'
        ]);

        return back()->with(
            'success',
            'Application rejected successfully!'
        );
    }
}