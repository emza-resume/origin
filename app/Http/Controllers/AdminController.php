<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Verta;
use Hash;
use File;
use Artisan;

class admincontroller extends Controller
{
    public function send_massage_all()
    {
        return view('admin.send-all');
    }
    public function print_resume($batch)
    {
        Artisan::call('cache:clear');
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('admin.print',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function check_login(Request $request)
    {
        $login_status = $request->session()->get('Login');
        if(@$login_status == 1)
        {
            $login_status = session('Login');
            if(@$login_status == 1)
            {
                $ci = 0;
                $cind = 0;
                $cc = 0;
                $ccnd = 0;
                $cl = 0;
                $clnd = 0;
                $count_visit_index = DB::table('tbl_visit')->where('VisitOther','index')->get();
                $count_visit_index_not_duplicate = DB::table('tbl_visit')->where('VisitOther','index')->distinct()->get(['VisitIP']);
                $count_visit_create = DB::table('tbl_visit')->where('VisitOther','resume')->get();
                $count_visit_create_not_duplicate = DB::table('tbl_visit')->where('VisitOther','resume')->distinct()->get(['VisitIP']);
                $count_visit_login = DB::table('tbl_visit')->where('VisitOther','login')->get();
                $count_visit_login_not_duplicate = DB::table('tbl_visit')->where('VisitOther','login')->distinct()->get(['VisitIP']);
                foreach($count_visit_index as $visit_index)
                {
                    $ci++;
                }
                foreach($count_visit_index_not_duplicate as $visit_index_not_duplicate)
                {
                    $cind++;
                }
                foreach($count_visit_create as $visit_create)
                {
                    $cc++;
                }
                foreach($count_visit_create_not_duplicate as $visit_create_not_duplicate)
                {
                    $ccnd++;
                }
                foreach($count_visit_login as $visit_login)
                {
                    $cl++;
                }
                foreach($count_visit_login_not_duplicate as $visit_login_not_duplicate)
                {
                    $clnd++;
                }
                return view('admin.statistics',compact('ci','cind','cc','ccnd','cl','clnd')); 
            } 
            else
            {
                return view('admin.login');
            }
        }
        else
        {
            return view('admin.login');
        }
    }
    public function get_websites(Request $request)
    {
        $login_status = $request->session()->get('Login');
        if(@$login_status == 1)
        {

            return view('admin.websites');
        }
        else
        {
            return view('admin.login');
        }
    }
    public function send_massage(Request $request)
    {
        $login_status = $request->session()->get('Login');
        if(@$login_status == 1)
        {
            $title_msg = $request->input('msg-title');
            $text_msg = $request->input('msg-text');
            $userid = $request->input('userid');
            $impo = $request->input('msg-impo');
            $name_family = $request->input('name_family');
            $c_send = $request->input('c_send') + 1;
            if($impo == 'on')
            {
                $im = 1;
            }
            else
            {
                $im = 0;
            }
            //insert in massage table
            DB::table('tbl_massages')->insert(
            [
                'MassageUserid'=>$userid,
                'MassageTitle'=>$title_msg,
                'MassageText'=>$text_msg,
                'MassageImportant'=>$im,
                'Massagehide'=>0,
                'Massageshow'=>0,
                'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
                'updated_at' => \Carbon\Carbon::now()
            ]
            );
            $send = 1;
            return view('admin.massage',compact('send','userid','name_family','c_send'));
        }
        else
        {
            return view('admin.login');
        }
    }
    public function get_massage($userid)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
             $c_send = DB::table('tbl_massages')->where('MassageUserid',$userid)->count();
             $getbase = DB::table('tbl_base')->where('BaseUserid',$userid)->first();
             $name_family = $getbase->BaseName . " " .  $getbase->BaseFamily;
            return view('admin.massage',compact('userid','name_family','c_send'));
        }
        else
        {
            return view('admin.login');
        }
    }
    public function get_massage_user($userid)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
             $c_send = DB::table('tbl_massages')->where('MassageUserid',$userid)->count();
             $getuser = DB::table('users')->where('id',$userid)->first();
             $name_family = $getuser->email;
            return view('admin.massage',compact('userid','name_family','c_send'));
        }
        else
        {
            return view('admin.login');
        }
    }
    public function get_pictures(Request $request)
    {
        $login_status = $request->session()->get('Login');
        if(@$login_status == 1)
        {
            $getbase = DB::table('tbl_base')->get();
            $files = [];
            $filesInFolder = \File::files('img/upload');
            $avatar_register = '';
            foreach($filesInFolder as $path)
            {
                
                $files[] = pathinfo($path);
                $file['size'] = File::size($path);
                $imgname = $files[0]['dirname'].$files[0]['filename'].$files[0]['extension'];
                foreach($getbase as $base)
                {
                    $base->BaseAvatar;
                    if($base->BaseAvatar == $imgname)
                    {
                        $avatar_register = $imgname;
                    }
                }
            }
            return view('admin.pictures',compact('filesInFolder','avatar_register'));
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout_admin(Request $request)
    {
        // Forget a single key...
        $request->session()->forget('Login');
        $request->session()->flush();
        return view('admin.login');
    }
    public function get_persian_resumes()
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','fa')->paginate(6);
            return view('admin.persian-resumes',compact('getbase'));     
        }
        else
        {
            return view('admin.login');
        }

    }
    public function show_request_site()
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','fa')->where('RequestSite','<>',NULL)->paginate(6);
            return view('admin.RequestSite',compact('getbase'));     
        }
        else
        {
            return view('admin.login');
        }

    }
    public function get_location($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            $getbase = DB::table('tbl_base')->where('BaseBatch',$id)->first();
            $getbase_b = DB::table('tbl_base_b')->where('BaseBatch',$id)->first();

            return view('admin.location',compact('getbase','getbase_b'));     
        }
        else
        {
            return view('admin.login');
        }

    }
    public function update_location(Request $request)
    {
        $login_status = session('Login');
        
        if(@$login_status == 1)
        {
            $batch = $request->input('batch');
            $lat = $request->input('lat');
            $long = $request->input('long');

            DB::table('tbl_base_b')
            ->where('BaseBatch',$batch)
            ->update(['CityLat' => $lat,'CityLong' => $long]);

            return redirect()->back();     
        }
        else
        {
            return view('admin.login');
        }

    }
    public function verify_site($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {

            //here code
            DB::table('tbl_base')->where('Baseid', $id)->update(['RequestSite' => 2]);
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','fa')->where('RequestSite','<>',NULL)->paginate(6);
            return view('admin.RequestSite',compact('getbase')); 
    
        }
        else
        {
            return view('admin.login');
        }

    }
    public function verify_site_4($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {

            //here code
            DB::table('tbl_base')->where('Baseid', $id)->update(['RequestSite' => 4]);
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','fa')->where('RequestSite','<>',NULL)->paginate(6);
            return view('admin.RequestSite',compact('getbase')); 
    
        }
        else
        {
            return view('admin.login');
        }

    }
    public function delete_donate($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {

            //here code
            DB::table('tbl_factor')->where('Factorid', $id)->delete();
            $getfactor = DB::table('tbl_factor')->paginate(6);
            return view('admin.donate',compact('getfactor'));
    
        }
        else
        {
            return view('admin.login');
        }

    }
    public function delete_feedback($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            //here code
            DB::table('tbl_feedback')->where('Feedbackid', $id)->delete();
            $getfeedback = DB::table('tbl_feedback')->paginate(6);
            return view('admin.feedback',compact('getfeedback'));
        }
        else
        {
            return view('admin.login');
        }

    }
    public function delete_msg($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {

            //here code
            DB::table('tbl_contact')->where('Contactid', $id)->delete();
            $getmsgs = DB::table('tbl_contact')->paginate(6);
            return view('admin.messages',compact('getmsgs')); 
    
        }
        else
        {
            return view('admin.login');
        }

    }
    public function enable_site($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            //here code
            DB::table('tbl_base')->where('Baseid', $id)->update(['RequestSite' => 4]);
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','fa')->where('RequestSite','<>',NULL)->paginate(6);
            return view('admin.RequestSite',compact('getbase')); 
        }
        else
        {
            return view('admin.login');
        }

    }
    public function get_messages()
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            //here code
            $getmsgs = DB::table('tbl_contact')->paginate(6);
            return view('admin.messages',compact('getmsgs')); 
        }
        else
        {
            return view('admin.login');
        }
    }
    public function get_statistics()
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $ci = 0;
            $cind = 0;
            $cc = 0;
            $ccnd = 0;
            $cl = 0;
            $clnd = 0;
            $count_visit_index = DB::table('tbl_visit')->where('VisitOther','index')->get();
            $count_visit_index_not_duplicate = DB::table('tbl_visit')->where('VisitOther','index')->distinct()->get(['VisitIP']);
            $count_visit_create = DB::table('tbl_visit')->where('VisitOther','resume')->get();
            $count_visit_create_not_duplicate = DB::table('tbl_visit')->where('VisitOther','resume')->distinct()->get(['VisitIP']);
            $count_visit_login = DB::table('tbl_visit')->where('VisitOther','login')->get();
            $count_visit_login_not_duplicate = DB::table('tbl_visit')->where('VisitOther','login')->distinct()->get(['VisitIP']);
            foreach($count_visit_index as $visit_index)
            {
                $ci++;
            }
            foreach($count_visit_index_not_duplicate as $visit_index_not_duplicate)
            {
                $cind++;
            }
            foreach($count_visit_create as $visit_create)
            {
                $cc++;
            }
            foreach($count_visit_create_not_duplicate as $visit_create_not_duplicate)
            {
                $ccnd++;
            }
            foreach($count_visit_login as $visit_login)
            {
                $cl++;
            }
            foreach($count_visit_login_not_duplicate as $visit_login_not_duplicate)
            {
                $clnd++;
            }
            return view('admin.statistics',compact('ci','cind','cc','ccnd','cl','clnd')); 
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function check_auth(Request $request)
    {
        $login_status = 0;
        //get data
        $type = 'admin';
        $username = $request->input('username');
        $password = $request->input('password');
        
        //check inputs
        $getusers = DB::table('users')->where('email',$username)->where('password',md5($password))->where('type',1)->get();
        foreach($getusers as $user)
        {
            session(['Login' => 1]);
        }
        
        $login_status = $request->session()->get('Login');
        if($login_status == 1)
        {
            $login_status = session('Login');
            if(@$login_status == 1)
            {
                $ci = 0;
                $cind = 0;
                $cc = 0;
                $ccnd = 0;
                $cl = 0;
                $clnd = 0;
                $count_visit_index = DB::table('tbl_visit')->where('VisitOther','index')->get();
                $count_visit_index_not_duplicate = DB::table('tbl_visit')->where('VisitOther','index')->distinct()->get(['VisitIP']);
                $count_visit_create = DB::table('tbl_visit')->where('VisitOther','resume')->get();
                $count_visit_create_not_duplicate = DB::table('tbl_visit')->where('VisitOther','resume')->distinct()->get(['VisitIP']);
                $count_visit_login = DB::table('tbl_visit')->where('VisitOther','login')->get();
                $count_visit_login_not_duplicate = DB::table('tbl_visit')->where('VisitOther','login')->distinct()->get(['VisitIP']);
                foreach($count_visit_index as $visit_index)
                {
                    $ci++;
                }
                foreach($count_visit_index_not_duplicate as $visit_index_not_duplicate)
                {
                    $cind++;
                }
                foreach($count_visit_create as $visit_create)
                {
                    $cc++;
                }
                foreach($count_visit_create_not_duplicate as $visit_create_not_duplicate)
                {
                    $ccnd++;
                }
                foreach($count_visit_login as $visit_login)
                {
                    $cl++;
                }
                foreach($count_visit_login_not_duplicate as $visit_login_not_duplicate)
                {
                    $clnd++;
                }
                return view('admin.statistics',compact('ci','cind','cc','ccnd','cl','clnd')); 
            } 
            else
            {
                return view('admin.login');
            }
        }
        else
        {
            $err = 1;
            return view('admin.login',compact('err'));
        }

    }
    public function get_persian_resumes_details()
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            return view('admin.persian-resume-details');
        }
        else
        {
            return view('admin.login');
        }

    }
    public function get_persian_resumes_edit()
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            return view('admin.persian-resume-edit');      
        }
        else
        {
            return view('admin.login');
        }

    }
    public function delete_avatar(Request $request)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            $avatar_file = $request->input('path-avatar');
            unlink($avatar_file);
            return redirect()->back(); 
        }
        else
        {
            return view('admin.login');
        }
    }
    public function get_persian_resumes_delete_avatar()
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            return view('admin.persian-resume-delete-avatar');
        }
        else
        {
            return view('admin.login');
        }

    }
    public function move_to_trash($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            DB::table('tbl_base')->where('Baseid', $id)->update(['Trash' => 1]);
            $getbase = DB::table('tbl_base')->where('Trash',0)->whereNull('Lang')->paginate(6);
            return view('admin.persian-resumes',compact('getbase'));  
        }
        else
        {
            return view('admin.login');
        }
  
    }
    public function move_to_trash_en($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            DB::table('tbl_base')->where('Baseid', $id)->update(['Trash' => 1]);
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','en')->paginate(6);
            return view('admin.english-resumes',compact('getbase'));
        }
        else
        {
            return view('admin.login');
        }
  
    }
    public function restore($id)
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            DB::table('tbl_base')->where('Baseid', $id)->update(['Trash' => 0]);
            $getbase = DB::table('tbl_base')->where('Trash',1)->where('Lang','fa')->paginate(6);
            return view('admin.trash',compact('getbase'));   
        }
        else
        {
            return view('admin.login');
        }
  
    }
    public function get_trash()
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            $getbase = DB::table('tbl_base')->where('Trash',1)->where('Lang','fa')->paginate(6);
            return view('admin.trash',compact('getbase'));   
        }
        else
        {
            return view('admin.login');
        }
 
    }
    public function get_trash_en()
    {
        $login_status = session('Login');

        if(@$login_status == 1)
        {
            $getbase = DB::table('tbl_base')->where('Trash',1)->where('Lang','like','en')->paginate(6);
            return view('admin.trash-en',compact('getbase'));   
        }
        else
        {
            return view('admin.login');
        }
 
    }
    public function real_delete($id)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
        //delete
        DB::table('tbl_base')->where('Baseid',$id)->delete();
        DB::table('tbl_courses')->where('Coursesid',$id)->delete();
        DB::table('tbl_educational')->where('Eduid',$id)->delete();
        DB::table('tbl_languages')->where('Langid',$id)->delete();
        DB::table('tbl_projects')->where('Projectid',$id)->delete();
        DB::table('tbl_skills')->where('Skillsid',$id)->delete();
        DB::table('tbl_work_experience')->where('Workid',$id)->delete();

        //get information
        $getbase = DB::table('tbl_base')->where('Trash',1)->where('Lang','fa')->paginate(6);
        return view('admin.trash',compact('getbase'));   
        }
        else
        {
            return view('admin.login');
        }

    }
    public function show_cv_one($batch)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        

            $created_at = new Verta();
            $created_at = Verta::instance($getbases->created_at);
            $updated_at = new Verta();
            $updated_at = Verta::instance($getbases->updated_at);
            
            $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
            $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
            $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
            $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
            $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
            $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
            $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
            $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
            $bar_batch = $getbases->BaseBatch;
            $bb1 = substr($bar_batch,0,1) + 1; 
            $bb2 = substr($bar_batch,1,1) + 1;
            $bb3 = substr($bar_batch,2,1) + 1;
            $bb4 = substr($bar_batch,3,1) + 1; 
            $bb5 = substr($bar_batch,4,1) + 1;
            $bb6 = substr($bar_batch,5,1) + 1;
            $bb7 = substr($bar_batch,6,1) + 1; 
            $bb8 = substr($bar_batch,7,1) + 1;
            $bb9 = substr($bar_batch,8,1) + 1;
            return view('admin.cv-detail',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch','created_at','updated_at'));
        } 
        else
        {
            return view('admin.login');
        }

    }
    public function to_woman($id)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $srimg = "img/avatar/woman.png";
            DB::table('tbl_base')->where('Baseid', $id)->update(['BaseAvatar' => $srimg]);
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','fa')->paginate(6);
            return view('admin.persian-resumes',compact('getbase')); 
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function show_donate()
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $getfactor = DB::table('tbl_factor')->paginate(6);
            return view('admin.donate',compact('getfactor')); 
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function show_feedback()
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $getfeedback = DB::table('tbl_feedback')->paginate(6);
            return view('admin.feedback',compact('getfeedback')); 
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function to_man($id)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $srimg = "img/avatar/man.png";
            DB::table('tbl_base')->where('Baseid', $id)->update(['BaseAvatar' => $srimg]);
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','fa')->paginate(6);
            return view('admin.persian-resumes',compact('getbase')); 
        } 
        else
        {
            return view('admin.login');
        }
    }

    public function get_users()
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $users = DB::table('users')->where('email','not like','info@emza.app')->paginate(6);
            return view('admin.users',compact('users'));
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function get_english_resumes()
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $getbase = DB::table('tbl_base')->where('Trash',0)->where('Lang','en')->paginate(6);
            return view('admin.english-resumes',compact('getbase'));    
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function reset_user($id)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            DB::table('users')->where('id',$id)->update([
                'password' => Hash::make(1)
            ]);
            $users = DB::table('users')->where('email','not like','info@emza.app')->paginate(6);
            return view('admin.users',compact('users'));
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function delete_user($id)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            DB::table('users')->where('id',$id)->delete();
            $users = DB::table('users')->where('email','not like','info@emza.app')->paginate(6);
            return view('admin.users',compact('users'));
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function show_cv_one_en($id)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            $getbases = DB::table('tbl_base')->where('Baseid',$id)->first();
        
            $created_at = new Verta();
            $created_at = Verta::instance($getbases->created_at);
            $updated_at = new Verta();
            $updated_at = Verta::instance($getbases->updated_at);
            
            $getedus = DB::table('tbl_educational')->where('Eduid',$id)->first();
            $getworks = DB::table('tbl_work_experience')->where('Workid',$id)->first();
            $getlangs = DB::table('tbl_languages')->where('Langid',$id)->first();
            $getskills = DB::table('tbl_skills')->where('Skillsid',$id)->first();
            $getcourses = DB::table('tbl_courses')->where('Coursesid',$id)->first();
            $getprojects = DB::table('tbl_projects')->where('Projectid',$id)->first();
            return view('admin.en-cv-detail',compact('getbases','getedus','getworks','getlangs','getskills','getcourses','getprojects','id','created_at','updated_at'));
        } 
        else
        {
            return view('admin.login');
        }

    }
    public function restore_trash_en($id)
    {
        $login_status = session('Login');
        if(@$login_status == 1)
        {
            DB::table('tbl_base')->where('Baseid', $id)->update(['Trash' => 0]);
            $getbase = DB::table('tbl_base')->where('Trash',1)->where('Lang','like','en')->paginate(6);
            return view('admin.trash-en',compact('getbase')); 
            
        } 
        else
        {
            return view('admin.login');
        }
    }
    public function get_logs()
    {
    }
   
}
