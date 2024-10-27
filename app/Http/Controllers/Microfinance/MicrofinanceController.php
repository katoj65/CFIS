<?php

namespace App\Http\Controllers\Microfinance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MicrofinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
$data['title']='Carbon Fund';

return Inertia::render('Microfinance/OverviewPage',$data);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }







/**
 * Membership account
 */

public function membership(){
$data['title']='Become a Member';
return Inertia::render('',$data);
}




/***
 * Load Application Page
 */

public function loanApplication(){
$data['title']='Apply for a Loan';
return Inertia::render('LoanApplicationPage',$data);
}


public function fundraising(){
$data['title']='Start a Fundraise';
return Inertia::render('StartFundraisingPage',$data);
}











}
