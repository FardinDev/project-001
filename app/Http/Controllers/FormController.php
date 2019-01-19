<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
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
            // $appkey = $request->input('appkey');
            // $mobile = $request->input('mobile');

            // $pid_collector_name = $request->input('pid_collector_name');
            // $pid_type = $request->input('pid_type');
            // $pid_collect_objective = $request->input('pid_collect_objective');
            // $pid_collect_date = $request->input('pid_collect_date');
            // $pid_collect_place_village = $request->input('pid_collect_place_village');
            // $pid_collect_place_post_office = $request->input('pid_collect_place_post_office');
            // $pid_collect_place_union = $request->input('pid_collect_place_union');
            // $pid_collect_place_thana = $request->input('pid_collect_place_thana');
            // $pid_collect_place_district = $request->input('pid_collect_place_district');
            // $pid_sample_send_media = $request->input('pid_sample_send_media');

            // $pid_local_name = $request->input('pid_local_name');
            // $pid_details = $request->input('pid_details');
            // $pid_flower_details = $request->input('pid_flower_details');
            // $pid_fruto_details = $request->input('pid_fruto_details');
            // $pid_folk_use = $request->input('pid_folk_use');
            // $pid_collect_lat_long = $request->input('pid_collect_lat_long');
            // $pid_collect_google_address = $request->input('pid_collect_google_address');
            // $pid_abstention = $request->input('pid_abstention');
            // $pid_scientific_name=$request->input('pid_scientific_name');
            // $pid_tribe=$request->input('pid_tribe');
            // $pid_id= $request->input('pid_id');
            // $language_status=$request->input('language_status');
            // $is_accession=$request->input('is_accession');


            // $pid_scientific_name=$request->input('pid_scientific_name');
            echo "<pre>";
            print_r ($request);

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
