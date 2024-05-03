<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use File;
use Storage;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $data['company_info'] = Company::find(1);
        return view('company.edit_company', $data);
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
        $company_info = Company::find($id);


        $company_info->name = $request->name;
        $company_info->email = $request->email;
        $company_info->phone_1 = $request->phone_1;
        $company_info->phone_2 = $request->phone_2;
        $company_info->address_1 = $request->address_1;
        $company_info->fb_link = $request->fb_link;
        $company_info->youtube_link = $request->youtube_link;
        $company_info->twiter_link = $request->twiter_link;
        $company_info->about_vedio = $request->about_vedio;
        $company_info->about_us = $request->about_us;

        if ($request->logo) {

            $exists = Storage::get($request->pre_logo);
            if ($exists) {
                Storage::delete($request->pre_logo);
            }

            $path = $request->file('logo')->store('logo');
            $company_info->logo = $path;
        }

        //echo "<pre>";print_r($type);die();
        $company_info->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
