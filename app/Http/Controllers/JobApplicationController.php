<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobApplicationController extends Controller
{
    // Show application form
    public function create($job)
    {
        $jobPost = JobPost::findOrFail($job);

        // Prevent the job owner from applying to their own job
        if ($jobPost->user_id === Auth::id()) {
            return redirect()
                ->route('jobs.show', $jobPost->id)
                ->with('error', 'You cannot apply for your own job.');
        }

        return view('jobs.apply', compact('jobPost'));
    }

    // Store application
    public function store(Request $request, $job)
    {
        $request->validate([
            'cover_letter' => 'required|string|min:10',
        ]);

        $jobPost = JobPost::findOrFail($job);

        // Prevent owner from applying to own job
        if ($jobPost->user_id === Auth::id()) {
            return back()->with('error', 'You cannot apply for your own job.');
        }

        // Prevent duplicate application
        $alreadyApplied = JobApplication::where('job_post_id', $jobPost->id)
            ->where('user_id', Auth::id())
            ->exists();

        if ($alreadyApplied) {
            return back()->with('error', 'You have already applied for this job.');
        }

        JobApplication::create([
            'job_post_id' => $jobPost->id,
            'user_id' => Auth::id(),
            'cover_letter' => $request->cover_letter,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Your application has been submitted successfully!');
    }

    // Employer - View applicants
    public function applicants($job)
    {
        $jobPost = JobPost::findOrFail($job);

        // Only the job owner can see applicants
        if ($jobPost->user_id !== Auth::id()) {
            abort(403, 'Unauthorized access.');
        }

        $applications = JobApplication::with('user')
            ->where('job_post_id', $jobPost->id)
            ->latest()
            ->get();

        return view('jobs.applicants', compact('jobPost', 'applications'));
    }

    // Employer - Accept / Reject application
    public function updateStatus(Request $request, $application)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $jobApplication = JobApplication::with('job')
            ->findOrFail($application);

        // Only the owner of the job can update application status
        if ($jobApplication->job->user_id !== Auth::id()) {
            abort(403, 'Unauthorized access.');
        }

        $jobApplication->update([
            'status' => $request->status,
        ]);

        return back()->with(
            'success',
            'Application status updated successfully!'
        );
    }
}