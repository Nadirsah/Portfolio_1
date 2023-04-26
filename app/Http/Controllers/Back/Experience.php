<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExperinceModel;
use App\Http\Requests\ExperienceReq;

class Experience extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=ExperinceModel::all();
        return view('back.tecrube.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.tecrube.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceReq $request)
    {
        $data=new ExperinceModel();
        $data->title=$request->title;
        $data->text=$request->text;
        $data->save();
        return  redirect()->route('admin.experience.index')->with('message', 'Məlumat əlavə olundu!');
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
        $data=ExperinceModel::findOrFail($id);
        return view('back.tecrube.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ExperinceModel::findOrFail($id);
        $data->title=$request->title;
        $data->text=$request->text;
        $data->save();
        return  redirect()->route('admin.experience.index')->with('message', 'Məlumat əlavə olundu!');
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
        $data = ExperinceModel::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.experience.index')->with('message', 'Məlumat ugurla silindi!');
    }
}
