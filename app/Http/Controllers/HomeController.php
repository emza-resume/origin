<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Verta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        DB::table('tbl_visit')->insert(
            [
            'VisitIP'=>$_SERVER['REMOTE_ADDR'],
            'VisitOther'=>'Home',
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );
    
            DB::table('tbl_log')->insert(
            [
            'LogDesc'=>  ' کاربری با آدرس آی پی '  . $_SERVER['REMOTE_ADDR'] .  ' وارد پروفایل خودش شد ' ,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );
        $Email = Auth::user()->email;
        $getuser = DB::table('users')->where('email',$Email)->first();
        $id = $getuser->id;

        //save userid in session
        session(['UID' => $id]);
        if($getuser->enable == 0)
        {
            $disabled = 1;

            return view('auth.login',compact('disabled'));
            
        }
                    //insert in visit table
                    DB::table('tbl_visit')->insert(
                        [
                        'VisitIP'=>$_SERVER['REMOTE_ADDR'],
                        'VisitOther'=>'login',
                        'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
                        'updated_at' => \Carbon\Carbon::now()
                        ]
                    );
        $getbases = DB::table('tbl_base')->where('BaseUserid',$id)->where('Trash',0)->where('BaseBatch','<>',0)->get();
        $getmassages = DB::table('tbl_massages')->where('MassageUserid',$id)->where('Massagehide','<>',1)->get();
        $cim = 0;
        foreach($getmassages as $massage)
        {
            $cim = $cim + 1;
        }
        return view('home',compact('getbases','getuser','cim'));
    }



}
