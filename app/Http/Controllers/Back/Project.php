<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Http\Requests\ProjectReq;
use Illuminate\Support\Facades\Storage;
class Project extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $data=ProjectModel::all();
        return view('back.layihe.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.layihe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectReq $request)
    {
        $data=new ProjectModel();
        $data->title=$request->title;
        $data->text=$request->text;
        if ($request->hasFile('project') && $request->file('project')->isValid() )  {
            $userId = auth()->id(); // Təsdiqlənmiş istifadəçilər olduğunu götürürək
            $disk = 'public'; // Və ya istədiyiniz diski istifadə edə bilərsiniz
            foreach (['project'] as $file) {
                if ($request->hasFile($file) && $request->file($file)->isValid()) {
                    $extension = $request->file($file)->getClientOriginalExtension();
                    $filename = "{$userId}-{$file}-".time().'.'.$extension;
                    $path = $request->file($file)->storeAs('uploads', $filename, $disk);
                    $data->$file = $path;
                }
            }
        }
        $data->save();
        return  redirect()->route('admin.project.index')->with('message', 'Məlumat əlavə olundu!');
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
        $data=ProjectModel::findOrFail($id);
        return view('back.layihe.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ProjectModel::findOrFail($id);
        $data->title=$request->title;
        $data->text=$request->text;

        // Mevcut dosya yollarını alın
        $project_path = $data->project;
        $userId = auth()->id();
         $disk = 'public';

        // Logo dosyasını silin
    if ($request->hasFile('project') && $request->file('project')->isValid()) {
        Storage::delete($project_path);
        $project_extension = $request->file('project')->getClientOriginalExtension();
        $project_filename = "{$userId}-project-".time().'.'.$project_extension;
        $project_path = $request->file('project')->storeAs('uploads', $project_filename, $disk);
    }
        $data->project = $project_path;
        $data->save();
        return  redirect()->route('admin.project.index')->with('message', 'Məlumat əlavə olundu!');
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
        $data = ProjectModel::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.project.index')->with('message', 'Məlumat ugurla silindi!');
    }
}
