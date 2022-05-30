<?php

namespace Modules\TargetGroup\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\TargetGroup;

class TargetGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('targetgroup::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function createTargetGroup(Request $request)
    {
      /**
       * This function validates the target group info
       */
        $validated = $request->validate([
            'heading'      => 'required|max:255',
            'type'       => 'required | max:255',
            'body'         => 'required | max:255',
            'photo'        => 'required | max:255',
        ]);
        $target_group_photo = request()->photo;
        $target_group_photo_original_name = $target_group_photo->getClientOriginalName();
        $target_group_photo->move('target_groups_photo/',$target_group_photo_original_name);

        $target_group_obj  =new TargetGroup;
        $target_group_obj->heading =request()->heading;
        $target_group_obj->type    =request()->type;
        $target_group_obj->body    =request()->body;
        $target_group_obj->photo   =$target_group_photo_original_name;
        $target_group_obj->save();
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
        return view('targetgroup::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('targetgroup::edit');
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
