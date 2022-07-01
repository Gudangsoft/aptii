<?php

namespace App\Http\Controllers\Admin\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobs\Jobs;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
use Image;

class JobsController extends Controller
{
    public function index()
    {
        return view('admin.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $image = $request->file('logo');
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('/storage/jobs/images/');
        $img = Image::make($image->path());
        $img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        try {
            $jobs = new Jobs();
            $jobs->title = $request->jobTitle;
            $jobs->type = $request->jobType;
            $jobs->image = $input['imagename'];
            $jobs->position = $request->jobPosition; // senior or junior
            $jobs->experience = $request->jobExperience;
            $jobs->work_location = $request->jobLocation;
            $jobs->budget_min = $request->jobBudgetMin;
            $jobs->budget_max = $request->jobBudgetMax;
            $jobs->status = 1;
            $jobs->company_name = $request->jobCompany;
            $jobs->created_by = auth()->user()->id;

            $jobs->save();

            Alert::success('Success', 'Jobs created successfully');
            return redirect()->route('jobs.index');
        } catch (Exception $error) {
            Alert::error('Error', $error->getMessage());
            return back();
        }
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
