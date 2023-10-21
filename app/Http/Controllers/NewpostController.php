<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Location;
use App\Models\Job_Type;
use App\Models\Company;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class NewpostController extends Controller
{
    public function newpost(){
        $locations =Location::all();
        $jobTypes =Job_Type::all();
        $companies =Company::all();
      
        return view('new-post',[
            
            'locations'=>$locations,
            'jobTypes'=>$jobTypes,
            'companies'=>$companies
        
        ]);
    }
        public function create(Request $request){
            Job::create($request->all());
            Session::put('success', 'Успешно сохранен!');
            return redirect('/new-post');
            
            // dd($request);
        
    }
}
