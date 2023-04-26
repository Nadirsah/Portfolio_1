<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AyarlarModel;
use App\Models\ExperinceModel;
use App\Models\EducationModel;
use App\Models\SkillsModel;
use App\Models\ProjectModel;


class FrontControl extends Controller
{
    
    public function __construct(AyarlarModel $ayarlarModel){
        $record = $ayarlarModel->where('id', 27)->where('activ', 0)->first();
        if ($record) {
            abort(404);
        }
    }
    


    public function index(){
        $experin=ExperinceModel::all();
        $education=EducationModel::all();
        $skills=SkillsModel::all();
        $projects=ProjectModel::all();
        return view('index',compact('experin','education','skills','projects'));
    }

    
}
