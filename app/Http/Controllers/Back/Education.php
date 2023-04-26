<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationModel;
use App\Http\Requests\EducationReq;


class Education extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=EducationModel::all();
        return view('back.tehsil.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.tehsil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationReq $request)
    {
        $data=new EducationModel();
        $data->title=$request->title;
        $data->text=$request->text;
        $data->save();
        return  redirect()->route('admin.education.index')->with('message', 'Məlumat əlavə olundu!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=EducationModel::findOrFail($id);
        return view('back.tehsil.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = EducationModel::findOrFail($id);
        $data->title=$request->title;
        $data->text=$request->text;
        $data->save();
        return  redirect()->route('admin.education.index')->with('message', 'Məlumat əlavə olundu!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete($id)
    {
        $data = EducationModel::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.education.index')->with('message', 'Məlumat ugurla silindi!');
    }
}
