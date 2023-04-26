<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SkillsModel;
use App\Http\Requests\SkillsReq;
use Illuminate\Support\Str;

class Skills extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data=SkillsModel::all();
        return view('back.skills.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillsReq $request)
    {
        $data=new SkillsModel();
        $data->title=$request->title;
        $data->text=$request->text;
        $data->save();
        return  redirect()->route('admin.skills.index')->with('message', 'Məlumat əlavə olundu!');
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
        $data=SkillsModel::findOrFail($id);
        return view('back.skills.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = SkillsModel::findOrFail($id);
        $data->title=$request->title;
        $data->text=$request->text;
        $data->save();
        return  redirect()->route('admin.skills.index')->with('message', 'Məlumat əlavə olundu!');
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
        $data = SkillsModel::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.skills.index')->with('message', 'Məlumat ugurla silindi!');
    }
}
