<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_post_id',
        'user_id',
        'phone',
        'cover_letter',
        'status',
    ];

    /**
     * Application belongs to a JobPost
     */
    public function jobPost()
    {
        return $this->belongsTo(JobPost::class);
    }

    /**
     * Application belongs to a User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}