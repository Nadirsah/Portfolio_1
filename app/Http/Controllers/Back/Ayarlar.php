<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\AyarlarModel;
use App\Http\Requests\AyarlarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Ayarlar extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data=AyarlarModel::first();
        return view('back.ayarlar.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('back.ayarlar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AyarlarRequest $request)
    {   
        $data=new AyarlarModel();
        $data->title=$request->title;
        $data->activ=$request->activ;
        $data->facebook=$request->facebook;
        $data->github=$request->github;
        $data->linkedin=$request->in;
        $data->email=$request->email;
        $data->city=$request->city;
        $data->phone=$request->phone;
        $data->text=$request->text;
        if ($request->hasFile('logo') && $request->file('logo')->isValid() && $request->hasFile('image') && $request->file('image')->isValid() 
        && $request->hasFile('favicon') && $request->file('favicon')->isValid())  {
            $userId = auth()->id(); // Təsdiqlənmiş istifadəçilər olduğunu götürürək
            $disk = 'public'; // Və ya istədiyiniz diski istifadə edə bilərsiniz
            foreach (['logo', 'image','favicon'] as $file) {
                if ($request->hasFile($file) && $request->file($file)->isValid()) {
                    $extension = $request->file($file)->getClientOriginalExtension();
                    $filename = "{$userId}-{$file}-".time().'.'.$extension;
                    $path = $request->file($file)->storeAs('uploads', $filename, $disk);
                    $data->$file = $path;
                }
            }
        }
        $data->save();
        return  redirect()->route('admin.ayarlar.index')->with('message', 'Məlumat əlavə olundu!');
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
    public function edit($id)
    {   $data=AyarlarModel::first();
        return view('back.ayarlar.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $data = AyarlarModel::findOrFail($id);
    $data->title = $request->title;
    $data->activ = $request->activ;
    $data->facebook = $request->facebook;
    $data->github = $request->github;
    $data->linkedin = $request->in;
    $data->email = $request->email;
    $data->city = $request->city;
    $data->phone = $request->phone;
    $data->text = $request->text;

    // Mevcut dosya yollarını alın
    $logo_path = $data->logo;
    $image_path = $data->image;
    $favicon_path = $data->favicon;
    $userId = auth()->id();
    $disk = 'public';

    // Logo dosyasını silin
    if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
        Storage::delete($logo_path);
        $logo_extension = $request->file('logo')->getClientOriginalExtension();
        $logo_filename = "{$userId}-logo-".time().'.'.$logo_extension;
        $logo_path = $request->file('logo')->storeAs('uploads', $logo_filename, $disk);
    }

    // Image dosyasını silin
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        Storage::delete($image_path);
        $image_extension = $request->file('image')->getClientOriginalExtension();
        $image_filename = "{$userId}-image-".time().'.'.$image_extension;
        $image_path = $request->file('image')->storeAs('uploads', $image_filename, $disk);
    }

    // Favicon dosyasını silin
    if ($request->hasFile('favicon') && $request->file('favicon')->isValid()) {
        Storage::delete($favicon_path);
        $favicon_extension = $request->file('favicon')->getClientOriginalExtension();
        $favicon_filename = "{$userId}-favicon-".time().'.'.$favicon_extension;
        $favicon_path = $request->file('favicon')->storeAs('uploads', $favicon_filename, $disk);
    }

    // Veritabanındaki kaydı güncelleyin
    $data->logo = $logo_path;
    $data->image = $image_path;
    $data->favicon = $favicon_path;
    $data->update();

    return redirect()->route('admin.ayarlar.index')->with('message', 'Məlumat ugurla yeniləndi!');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}