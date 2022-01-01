<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectRequest;
class ProjectRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectRequest=ProjectRequest::all();
        return response()->json($projectRequest);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validateData= $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric|min:11',
            'company_name'=>'required',
            'address'=>'required',
            'project_budget'=>'required',
            'project_id'=>'required',
            'service_id'=>'required',
            'country'=>'required',
            'pages_num'=>'required',
            'domain'=>'required',
            'content'=>'required',
            'logo'=>'required',
            'details'=>'required'
        ]);

       ProjectRequest::create($request->all());
       return response('Inserted');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $projectRequest=  ProjectRequest::findorfail($id);
      return response()->json($projectRequest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projectRequest=ProjectRequest::findorfail($id);
        $validateData= $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric|min:11',
            'company_name'=>'required',
            'address'=>'required',
            'project_budget'=>'required',
            'project_id'=>'required',
            'service_id'=>'required',
            'country'=>'required',
            'pages_num'=>'required',
            'domain'=>'required',
            'content'=>'required',
            'logo'=>'required',
            'details'=>'required'
        ]);
        $projectRequest->update($validateData);
        return response('Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       ProjectRequest::find($id)->delete();
       return response('Deleted');
    }
}
