<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('welcome', ['jobs' => \App\Models\Job::all()]);
    }

    public function show(Job $job)
    {
        return view('show', ['job' => $job]);
    }
}
