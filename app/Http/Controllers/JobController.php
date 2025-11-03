<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class   JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allJobs = Job::latest()->with('employer', 'tags')->get();

        $featuredJobs = $allJobs->where('featured', true);
        $regularJobs = $allJobs->where('featured', false);

        return view('jobs.index', [
            'featuredJobs' => $featuredJobs,
            'jobs' => $regularJobs,
            'tags' => Tag::all(),
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');
        $user = Auth::user();


        // Auto-create employer if missing (hotfix: provide default logo)
        if (! $user->employer) {
            $user->employer()->create([
                'name' => $user->name,
                'logo' => env('DEFAULT_EMPLOYER_LOGO', 'https://via.placeholder.com/150?text=Logo'),
            ]);
        }


        $job = $user->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if (!empty($attributes['tags'])) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag(trim($tag));
            }
        }

        return redirect('/')->with('success', 'Job created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
