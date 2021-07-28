<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\AppliedJob;
use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
{

    public function requests()
    {
        $appliedJobs = AppliedJob::where('status', 'Approved')->get();
        return view('BangladeshAdmin.Candidate.requests', compact('appliedJobs'));
    }
    public function viewRequested($applied_job_id)
    {
        $appliedJob = AppliedJob::findOrFail($applied_job_id);
        $selectedCandidates = Candidate::where('job_category_id',$appliedJob->jobPost->job_category->id)
                                       ->where('created_id',$appliedJob->applier_id)->get();

        return view('BangladeshAdmin.Candidate.view-requests', compact('selectedCandidates'));
    }
    public function forwarded()
    {
        return view('BangladeshAdmin.Candidate.forwarded');
    }
    public function reviewed()
    {
        return view('BangladeshAdmin.Candidate.reviewed');
    }
    public function finalized()
    {
        return view('BangladeshAdmin.Candidate.finalized');
    }
    public function tickets_booked_List()
    {
        return view('BangladeshAdmin.Candidate.tickets_booked_List');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
