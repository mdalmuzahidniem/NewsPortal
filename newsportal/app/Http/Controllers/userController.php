<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\news;

class userController extends Controller
{
    //
    public function homepage(){
        date_default_timezone_set('Asia/Dhaka');
        $date = Carbon::now();
        $month = $date->format('F');
        $day=$date->format('l');
        $tarik=$date->format('d');
        $year=$date->year;
        $time=$date->format('h:i:s');
        
        $dateval=$day.', '.$month.' '.$tarik.', '.$year;

        $top=1;
        $topnews=news::select('id','heading','image','created_at')->where('topnews',$top)->First();
        //var_dump($time);
        //latest news
        $latest=news::select('id','heading','created_at','image')->whereNot('topnews',$top)->orderBy('created_at','DESC')->limit(3)->get();
        //var_dump($latest);
        return view('pages.home')->with('date', $dateval)->with('topnews',$topnews)->with('latestNews',$latest);
    }

    public function details(Request $req){
        date_default_timezone_set('Asia/Dhaka');
        $date = Carbon::now();
        $month = $date->format('F');
        $day=$date->format('l');
        $tarik=$date->format('d');
        $year=$date->year;
        $time=$date->format('h:i:s');
        
        $dateval=$day.', '.$month.' '.$tarik.', '.$year;
        $latest=news::select('id','heading','created_at','image')->whereNot('id',$req->id)->orderBy('created_at','DESC')->limit(3)->get();

        //increasing view count
        $details=news::where('id',$req->id)->first();
        $view=$details->view;
        $view++;
        $details->view=$view;
        $details->save();
        $details=news::where('id',$req->id)->first();
        //var_dump($latest);
        return view('pages.details')->with('date',$dateval)
        ->with('latestNews', $latest)->with('details',$details);
    }

    //Admin login
    public function login(){
        date_default_timezone_set('Asia/Dhaka');
        $date = Carbon::now();
        $month = $date->format('F');
        $day=$date->format('l');
        $tarik=$date->format('d');
        $year=$date->year;
        $time=$date->format('h:i:s');
        
        $dateval=$day.', '.$month.' '.$tarik.', '.$year;

        return view('pages.login')->with('date',$dateval);
    }
}
