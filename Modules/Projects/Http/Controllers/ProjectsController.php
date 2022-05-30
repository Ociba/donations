<?php

namespace Modules\Projects\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('projects::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createProjects(Request $request)
    {
        /**
       * This function validates the projects info
       */
      $validated = $request->validate([
        'title'         => 'required|max:255',
        'content'       => 'required | max:255',
        'image'         => 'required | max:255',
       ]);
        $project_image = request()->image;
        $project_image_original_name = $project_image->getClientOriginalName();
        $project_image->move('projects_image/',$project_image_original_name);

        $project_obj  =new Project;
        $project_obj->title =request()->title;
        $project_obj->content    =request()->content;
        $project_obj->image   =$project_image_original_name;
        $project_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('projects::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('projects::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
