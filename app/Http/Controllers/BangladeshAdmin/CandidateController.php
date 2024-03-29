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
        $appliedJobs = AppliedJob::where('status', 'Approved')->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.requests', compact('appliedJobs'));
    }
    public function viewRequested($applied_job_id)
    {
        $appliedJob = AppliedJob::findOrFail($applied_job_id);
        $selectedCandidates = Candidate::where('job_category_id',$appliedJob->jobPost->job_category->id)
                                       ->where('created_id',$appliedJob->applier_id)
                                       ->where('job_id',$appliedJob->job_post_id)
                                       ->where('status',"Selected")->orderBy('id','DESC')->get();

        return view('BangladeshAdmin.Candidate.view-requests', compact('selectedCandidates'));
    }
    public function forwarded()
    {
        $forwardedCandidates = Candidate::where('status',"Forwarded")->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.forwarded', compact('forwardedCandidates'));
    }
    public function reviewed()
    {
        $ReviewedCandidates = Candidate::where('status',"Reviewed")->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.reviewed', compact('ReviewedCandidates'));
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
    public function show($id){
        $candidate = Candidate::findOrFail($id);
        return view('BangladeshAdmin.Candidate.show-profile', compact('candidate'));
    }

    public function forwardNow($id){
        $candidate = Candidate::findOrFail($id);
        $candidate->status = "Forwarded";
        $candidate->result_status = "New";
        try {
            $candidate->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Stored'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
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
