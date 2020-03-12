<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 验证是否登陆
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*DB::connection('mongodb')->collection('video')->insert([
            'title'=>'aabbcc',
            'type'=>'1',
            'tags'=>'abababbab'
        ]);

        DB::connection('mongodb')->collection('video')->insert([
            'title'=>'12313',
            'type'=>'1',
            'tags'=>'12313'
        ]);

        DB::connection('mongodb')->collection('video')->insert([
            'title'=>'qeqweqe',
            'type'=>'1',
            'tags'=>'adfafdf'
        ]);

        $users = DB::connection('mongodb')->collection('video')->get();
        dd($users->toArray());*/

        $video = Video::get();
        dd($video->toArray());
        // return view('home');
    }
}
