<?php

namespace App\Http\Controllers\CarbonCredit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarbonCreditController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
//
$data['title']='Carbon Credit';

return Inertia::render('CarbonCreditPage',$data);

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


//project development function
public function projectDevelopment(){
$data['title']='Project Development';
return Inertia::render('ProjectDevelopmentPage',$data);
}


//purchase carbon credit function
public function purchaseCarbonCredit(){
$data['title']='Buy Carbon Credit';
return Inertia::render('PurchaseCarbonCreditPage',$data);
}

//emission offsetting function
public function emissionOffsetting(){
$data['title']='Emission Offsetting';
return Inertia::render('EmissionOffsettingPage',$data);
}


//carbon financing
public function carbonFinancing(){
$data['title']='Carbon Financing';
return Inertia::render('CarbonFinancingPage',$data);
}




}
