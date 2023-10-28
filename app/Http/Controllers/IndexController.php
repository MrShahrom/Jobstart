<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $jobs = Job::with(['companies','locations', 'types'])->paginate(10);
        //dd($jobs);
        return view('index', [
            'jobs'=>$jobs,
        ]);
    }
}
