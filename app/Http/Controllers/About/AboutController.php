<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $data['title']='About Us';
    return Inertia::render('AboutPage',$data);
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

public function carbonOffsetGuide(){
$data['title']='Offset Your Carbon Emissions';
return Inertia::render('CarbonOffsettingGuidePage',$data);
}

public function trackingEmissions(){
$data['title']='Tracking and Reporting Emissions';
return Inertia::render('EmissionTrackingPage',$data);
}

public function carbonCreditRegistration(){
$data['title']='Carbon Credit Registration';
return Inertia::render('CarbonCreditRegistrationPage',$data);
}

public function verificationCertification(){
$data['title']='Project Verification and Certification';
return Inertia::render('VerificationCertificationPage',$data);
}

public function carbonCreditTrading(){
$data['title']='Carbon Credit Trading';
return Inertia::render('CarbonCreditTradingPage',$data);
}

public function capacityBuildingTraining(){
$data['title']='Training and Capacity Building';
return Inertia::render('CapacityBuildingTrainingPage',$data);
}



public function carbonFootprint(){
$data['title']='Empowering Sustainable Choices';
$data['response']=[];
return Inertia::render('CarbonFootprintPage',$data);
}

public function climateAction(){
$data['title']='Climate Action';
$data['response']='';
return Inertia::render('ClimateActionPage',$data);
}


public function policySupport(){
$data['title']='Policy Support';
$data['response']='';
return Inertia::render('PolicySupportPage',$data);
}


public function publicOutreach(){
$data['title']='Public Outreach';
$data['response']='';
return Inertia::render('PublicOutreachPage',$data);
}


public function complianceSupport(){
$data['title']='Compliance Support';
$data['response']='';
return Inertia::render('ComplianceSupportPage',$data);
}

public function collaborationTools(){
$data['title']='Collaboration Tools';
$data['response']='';
return Inertia::render('CollaborationToolsPage',$data);
}

}
