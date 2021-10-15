<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use SoapClient;
use Trez\RayganSms\Facades\RayganSms;
use Hash;

class mastercontroller extends Controller
{
    public function save_new_password(Request $request)
    {
        $mobile = $request->input('mobile');
        $code = $request->input('code');
        $active_code_ac = $request->input('ac-code');
        
        $pass =  $request->input('password'); 
        $password_confirm = $request->input('password_confirm');
        $getuser = DB::table('users')->where('email',$mobile)->first();
        if($pass != $password_confirm)
        {
            $errcodep = 2;
            return view('auth.passwords.reset',compact('errcodep'));
        }
        if($active_code_ac == $code && $mobile == $getuser->email)
        {
            $succode = 1;
            $password =  Hash::make($request->input('password'));
            DB::table('users')->where('email', $mobile)->update(['password' => $password]);
            return view('auth.passwords.reset',compact('succode'));
        }
        else
        {
            $errcode = 1;
            return view('auth.passwords.reset',compact('errcode'));
        }
    }
    public function veryfication()
    {
        return view('veryfication');
        
    }
    public function check_mobile(Request $request)
    {
        $errorm = 1;
        $mobile = $request->input('mobile');
        $getuser = DB::table('users')->where('email',$mobile)->get();
        foreach($getuser as $user)
        {
            if($user->email == $mobile)
            {
                $ac = rand(190000,980000);
                DB::table('users')->where('email', $mobile)->update(['active_code' => $ac]);
                RayganSms::sendAuthCode($mobile, 'کد احراز هویت شما : '.$ac.' . امضا سامانه رزومه ساز آنلاین . emza.app', false);
        	    $cookie_name = "mobile";
        	    $cookie_value = $mobile;
        	    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                return view('veryfication');
            }
            else
            {
                $errorm = 1;
                
            }
        }
        return view('auth.mobile',compact('errorm'));
    }
    public function enter_mobile()
    {
        return view('auth.mobile');
    }
    public function NewPassword($mobile)
    {
       $getuser = DB::table('users')->where('email',$mobile)->first();
       if($mobile == @$getuser->email)
       {
       		return view('auth.passwords.reset',compact('mobile'));
       }
    }
    public function SendPassword(Request $request)
    {
       $mobile = $request->input('mobile');
       $getuser = DB::table('users')->where('email',$mobile)->first();
       if($mobile != @$getuser->email)
       {
       		$err = 1;
       		return view('auth.passwords.email',compact('err'));
       }
       else
       {
            $suc = 1;
            $active = rand(190000,980000);
            RayganSms::sendAuthCode($mobile, ''.$getuser->email.'  کد:  '.$active.'  . امضا سامانه رزومه ساز آنلاین  . emza.app',false);
            return view('auth.passwords.reset',compact('active','mobile'));
       }

    }
    public function check_code(Request $request)
    {
        $mobile = $_COOKIE["mobile"];
        $code = $request->input('code');
        $getuser = DB::table('users')->where('email',$mobile)->get();
        foreach($getuser as $user)
        {
           $ac = $user->active_code;     
        }
        if($ac == $code)
        {
            $success = 1;
            DB::table('users')
            ->where('email', $mobile)
            ->update(['enable' => 1]);
            return view('auth.login',compact('success'));
        }
        $error = 1;
        return view('veryfication',compact('error'));
    }
    public function index()
    {
        //insert in visit table
        DB::table('tbl_visit')->insert(
            [
            'VisitIP'=>$_SERVER['REMOTE_ADDR'],
            'VisitOther'=>'index',
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );
        
        return view('master.index');
        
    }
    public function pay_status()
    {
        $status = $_GET['Status'];
        if($status == 'NOK')
        {
        $err = 1;
        $id = session('sessionId');
        $year_a = date('Y');
        $getbases = DB::table('tbl_base')->where('BaseUserid',$id)->orderBy('Baseid', 'desc')->first();
        $year_b = $getbases->BaseBirthdate;
        $year_b = explode("/",$year_b);
        $year_b = $year_b[0] + 621;
        $old = $year_a - $year_b;
        $getedus = DB::table('tbl_educational')->where('EduUserid',$id)->orderBy('Eduid', 'desc')->first();
        $getworks = DB::table('tbl_work_experience')->where('WorkUserid',$id)->orderBy('Workid', 'desc')->first();
        $getlangs = DB::table('tbl_languages')->where('LangUserid',$id)->orderBy('Langid', 'desc')->first();
        $star2 = $getlangs->LangReadingskills;
        $star1 = 5 - $star2;
        $starw2 = $getlangs->LangWritingskills;
        $starw1 = 5 - $starw2;
        $getskills = DB::table('tbl_skills')->where('SkillsUserid',$id)->orderBy('Skillsid', 'desc')->first();
        $getskills = explode('-',$getskills->SkillsName);
        $getcourses = DB::table('tbl_courses')->where('CoursesUserid',$id)->orderBy('Coursesid', 'desc')->first();
        $getprojects = DB::table('tbl_projects')->where('ProjectUserid',$id)->orderBy('Projectid', 'desc')->first();
        return view('download-beautiful-gray-template',compact('getbases','getedus','getworks','getlangs','getskills','getcourses','getprojects','id','skillsName','old','star1','starw1'));
        }
        if($status == 'OK')
        {
                return view('pay',compact('err'));
        }
        
    }
    public function go_to_bank()
    {
        $id = session('sessionId');
        $getbases = DB::table('tbl_base')->where('BaseUserid',$id)->orderBy('Baseid', 'desc')->first();
        
        $MerchantID = '63ece126-559d-11ea-8f35-000c295eb8fc'; //Required
        $Amount = 1000; //Amount will be based on Toman - Required
        $Description = 'خرید قالب خاکستری زیبا'; // Required
        $Email = $getbases->BaseEmail; // Optional
        $Mobile = $getbases->BaseMobile; // Optional
        $CallbackURL = 'https://www.emza.app/download/template/gray'; // Required
        
        
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        
        $result = $client->PaymentRequest(
        [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
        ]
        );
        
        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
        Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
        //Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
        } else {
        echo'ERR: '.$result->Status;
        }
    }
    public function get_site()
    {
        return view('sites');
    }
    public function form_fast_persian($id)
    {
        DB::table('tbl_visit')->insert(
        [
        'VisitIP'=>$_SERVER['REMOTE_ADDR'],
        'VisitOther'=>'PC',
        'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
        'updated_at' => \Carbon\Carbon::now()
        ]
        );

        DB::table('tbl_log')->insert(
        [
        'LogDesc'=>  ' کاربری با آدرس آی پی '  . $_SERVER['REMOTE_ADDR'] .  ' وارد فرم رزومه ساز سریع فارسی شد ' ,
        'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
        'updated_at' => \Carbon\Carbon::now()
        ]
        );

        return view('form-fast-persian',compact('id'));
    }
    public function contact_us()
    {
        return view('contact-us');
    }
    public function form_fast_english($id)
    {
        return view('form-fast-english',compact('id'));
    }
    public function get_guide()
    {
        return view('guide');
    }
    public function get_terms()
    {
        return view('terms');
    }
    public function get_job()
    {
        return view('job');
    }
    public function get_privace()
    {
        return view('privace');
    }
    public function get_about_this_system()
    {
        return view('about-this-system');
    }
    public function get_articles()
    {
        return view('articles');
    }
    public function get_websites_made()
    {
        return view('websites');
    }
    public function get_feedback()
    {
        return view('feedback');
    }
    public function get_resumes()
    {
        return view('resumes');
    }
    public function delete_image(Request $request)
    {
        try {
            $name = $request->input('imageAvatar');
            unlink($name);
        } catch (\Exception $e) {
            return redirect('/edit-form-cv-fast-persian');
        }
        return redirect('/edit-form-cv-fast-persian');

    }
    public function delete_image_en(Request $request)
    {
        try {
            $name = $request->input('imageAvatar');
            unlink($name);
        } catch (\Exception $e) {
            return redirect('/edit-form-cv-fast-english');
        }
        return redirect('/edit-form-cv-fast-english');

    }
    public function form_pro_english()
    {
       return view('form-pro-english');
    }
    public function form_pro_persian()
    {
       return view('form-pro-persian');
    }
    public function save_feedback(Request $request)
    {
        //get value for table of feedback
        $name = $request->input('name');
        $email = $request->input('email');
        $bug = $request->input('bug');
        $desc = $request->input('desk');
                //insert in contact table
        DB::table('tbl_feedback')->insert(
        [
            'FeedbackName'=> $name,
            'FeedbackEmail' => $email,
            'FeedbackBug' => $bug,
            'FeedbackDesc' => $desc,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now()
        ]
        );
        $save = 1;
        return view("feedback",compact('save'));
    }
    public function submit_comment(Request $request)
    {
        //get value for table of contact
        $name = $request->input('name');
        $email = $request->input('email');
        $comment = $request->input('comment');
                //insert in contact table
        DB::table('tbl_contact')->insert(
        [
            'ContactName'=> $name,
            'ContactEmail' => $email,
            'ContactComment' => $comment,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now()
        ]
        );
        $save = 1;
        return view("contact-us",compact('save'));

        //insert in contact table
        DB::table('tbl_contact')->insert(
        [
            'ContactName'=> $name,
            'ContactEmail' => $email,
            'ContactComment' => $comment,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now()
        ]
        );
        $save = 1;
        return view("contact-us",compact('save'));
    }
    public function edit_form_fast_persian()
    {
        $id = session('sessionId');
        $getbases = DB::table('tbl_base')->where('BaseUserid',$id)->orderBy('Baseid', 'desc')->first();
        $getedus = DB::table('tbl_educational')->where('EduUserid',$id)->orderBy('Eduid', 'desc')->first();
        $getworks = DB::table('tbl_work_experience')->where('WorkUserid',$id)->orderBy('Workid', 'desc')->first();
        $getlangs = DB::table('tbl_languages')->where('LangUserid',$id)->orderBy('Langid', 'desc')->first();
        $getskills = DB::table('tbl_skills')->where('SkillsUserid',$id)->orderBy('Skillsid', 'desc')->first();
        $getcourses = DB::table('tbl_courses')->where('CoursesUserid',$id)->orderBy('Coursesid', 'desc')->first();
        $getprojects = DB::table('tbl_projects')->where('ProjectUserid',$id)->orderBy('Projectid', 'desc')->first();
        return view('form-edit-fast-persian',compact('getbases','getedus','getworks','getlangs','getskills','getcourses','getprojects','id'));
    }

    public function edit_form_fast_persian_home($id)
    {
        $getbases = DB::table('tbl_base')->where('Baseid',$id)->first();
        $getedus = DB::table('tbl_educational')->where('Eduid',$id)->first();
        $getworks = DB::table('tbl_work_experience')->where('Workid',$id)->first();
        $getlangs = DB::table('tbl_languages')->where('Langid',$id)->first();
        $getskills = DB::table('tbl_skills')->where('Skillsid',$id)->first();
        $getcourses = DB::table('tbl_courses')->where('Coursesid',$id)->first();
        $getprojects = DB::table('tbl_projects')->where('Projectid',$id)->first();
        return view('form-edit-fast-persian-home',compact('getbases','getedus','getworks','getlangs','getskills','getcourses','getprojects','id'));
    }

    public function update_cv_fast_english(Request $request)
    {
        //upload avatar file if exist
        $picture = $request->input('formImage');
        $file = $request->file('img');
        $destinationPath = 'img/upload/';
        $updo = $request->input('updo');
        $id = session('sessionId');
        $getbases = DB::table('tbl_base')->where('BaseUserid',$id)->orderBy('Baseid', 'desc')->first();
        $base_id = $getbases->Baseid;
        $getedus = DB::table('tbl_educational')->where('EduUserid',$id)->orderBy('Eduid', 'desc')->first();
        $edu_id = $getedus->Eduid;
        $getworks = DB::table('tbl_work_experience')->where('WorkUserid',$id)->orderBy('Workid', 'desc')->first();
        $work_id = $getworks->Workid;
        $getlangs = DB::table('tbl_languages')->where('LangUserid',$id)->orderBy('Langid', 'desc')->first();
        $lang_id = $getlangs->Langid;
        $getskills = DB::table('tbl_skills')->where('SkillsUserid',$id)->orderBy('Skillsid', 'desc')->first();
        $skill_id = $getskills->Skillsid;
        $getcourses = DB::table('tbl_courses')->where('CoursesUserid',$id)->orderBy('Coursesid', 'desc')->first();
        $Course_id = $getcourses->Coursesid;
        $getprojects = DB::table('tbl_projects')->where('ProjectUserid',$id)->orderBy('Projectid', 'desc')->first();
        $Project_id = $getprojects->Projectid;

        if($updo == 0)
        {
            $avatar = $picture;
        }
        else
        {
            $file->move($destinationPath,time().$file->getClientOriginalName());
            $avatar = $destinationPath.time().$file->getClientOriginalName();
        }

        //get value for table of base and table of users
        $formid = $request->input('formId');
        $name = $request->input('formName');
        $family = $request->input('formFamily');
        $marital = $request->input('formMarital');
        $soldier = $request->input('ّformSoldier');
        $birthDate = $request->input('formBirthDate');
        $formWorkTitle = $request->input('formWorkTitle');
        $email = $request->input('formmail');
        $mobile = $request->input('formMobile');
        $telephone = $request->input('formTelephone');
        $website = $request->input('formWebsite');
        $password = bcrypt($mobile);

        //get value for table of Edu
        $section = $request->input('ّedusection');
        $major = $request->input('formEduMajor');
        $orientation = $request->input('formEduOrientation');
        $lnstitute = $request->input('formEduLnstitute');
        $average = $request->input('formEduAverage');

        //get value for table of Work Experience
        $post = $request->input('formWorkpost');
        $center = $request->input('formWorkcenter');
        $titlecenter = $request->input('formworktitlecenter');
        $cooperation = $request->input('formworkcooperation');

        //get value for table of languages
        $langname = $request->input('formlangname');
        $langwritingskill = $request->input('formLangWritingskills');
        $langreadingskill = $request->input('formLangreadingskills');

        //get value for table of skills
        $skillsname = $request->input('formskillsname');

        //get value for table of cources
        $coursetype = $request->input('formcoursestype');
        $coursetitle = $request->input('formcoursestitle');
        $courseinstitute = $request->input('formcoursesinstitute');

        //get value for table of project
        $projectname = $request->input('formprojecttitle');
        $projectdate = $request->input('formprojectdate');

        //update users table
        @$getuser = DB::table('users')->where('email',$email)->first();
        if(@$getuser->email == $email)
        {
            $email_c = 1;
        }
        else
        {
        $updateDetails = [
        'name' => $name,
        'email' => $email,
        'password' => $password
        ];
        DB::table('users')
        ->where('id', $formid)
        ->update($updateDetails);
        }

        //update bases table
        $updateBases = [
            'BaseAvatar'=>$avatar,
            'BaseName'=>$name,
            'BaseFamily'=>$family,
            'BaseMarital'=>$marital,
            'BaseSolider'=>$soldier,
            'BaseBirthdate'=>$birthDate,
            'BaseWorkTitle'=> $formWorkTitle,
            'BaseWebsite'=> $website,
            'BaseEmail'=>$email,
            'BaseMobile'=>$mobile,
            'BaseTel'=>$telephone
        ];
        DB::table('tbl_base')
        ->where('Baseid', $base_id)
        ->update($updateBases);


        //update lang table
        $updateLangs = [
            'LangName'=>$langname,
            'LangWritingskills'=>$langwritingskill,
            'LangReadingskills'=>$langreadingskill
        ];
        DB::table('tbl_languages')
        ->where('Langid', $lang_id)
        ->update($updateLangs);

        //update skill table
        $updateSkills = [
            'SkillsName'=>$skillsname,
        ];
        DB::table('tbl_skills')
        ->where('Skillsid', $skill_id)
        ->update($updateSkills);

        //update edu table
        $updateEdu = [
            'EduSection' => $section,
            'EduMajor' => $major,
            'EduOrientation' => $orientation,
            'EduLnstitute' => $lnstitute,
            'EduAverage' => $average
        ];
        DB::table('tbl_educational')
        ->where('Eduid', $edu_id)
        ->update($updateEdu);

        //update work table
        $updateWork = [
            'WorkPost' => $post,
            'WorkCenter' => $center,
            'WorkTitleCenter' => $titlecenter,
            'WorkCooperation' => $cooperation
        ];
        DB::table('tbl_work_experience')
            ->where('Workid', $work_id)
            ->update($updateWork);

        //update courses table
        $updateCourses = [
            'CoursesType' => $coursetype,
            'CoursesTitle' => $coursetitle,
            'CoursesInstitute' => $courseinstitute
        ];
        DB::table('tbl_courses')
            ->where('Coursesid',$Course_id)
            ->update($updateCourses);

        $updateProject = [
            'ProjectTitle' => $projectname,
            'ProjectDate' => $projectdate
        ];
        DB::table('tbl_projects')
            ->where('Projectid', $Project_id)
            ->update($updateProject);

        //return to template select page
        return redirect('edit-form-cv-fast-english');
    }
    public function update_cv_fast_persian(Request $request)
    {
        //upload avatar file if exist
        $picture = $request->input('formImage');
        $file = $request->file('avatar');
        $destinationPath = 'img/upload/';
        $updo = $request->input('updo');
        $id = session('sessionId');
        $getbases = DB::table('tbl_base')->where('BaseUserid',$id)->orderBy('Baseid', 'desc')->first();
        $base_id = $getbases->Baseid;
        $getedus = DB::table('tbl_educational')->where('EduUserid',$id)->orderBy('Eduid', 'desc')->first();
        $edu_id = $getedus->Eduid;
        $getworks = DB::table('tbl_work_experience')->where('WorkUserid',$id)->orderBy('Workid', 'desc')->first();
        $work_id = $getworks->Workid;
        $getlangs = DB::table('tbl_languages')->where('LangUserid',$id)->orderBy('Langid', 'desc')->first();
        $lang_id = $getlangs->Langid;
        $getskills = DB::table('tbl_skills')->where('SkillsUserid',$id)->orderBy('Skillsid', 'desc')->first();
        $skill_id = $getskills->Skillsid;
        $getcourses = DB::table('tbl_courses')->where('CoursesUserid',$id)->orderBy('Coursesid', 'desc')->first();
        $Course_id = $getcourses->Coursesid;
        $getprojects = DB::table('tbl_projects')->where('ProjectUserid',$id)->orderBy('Projectid', 'desc')->first();
        $Project_id = $getprojects->Projectid;
        if($updo == 0)
        {
            $avatar = $picture;
        }
        else
        {
            $file->move($destinationPath,time().$file->getClientOriginalName());
            $avatar = $destinationPath.time().$file->getClientOriginalName();
        }

        //get value for table of base and table of users
        $formid = $request->input('formId');
        $name = $request->input('formName');
        $family = $request->input('formFamily');
        $marital = $request->input('formMarital');
        $soldier = $request->input('ّformSoldier');
        $birthDate = $request->input('formBirthDate');
        $formWorkTitle = $request->input('formWorkTitle');
        $email = $request->input('formmail');
        $mobile = $request->input('formMobile');
        $telephone = $request->input('formTelephone');
        $website = $request->input('formWebsite');
        $password = bcrypt($mobile);

        //get value for table of Edu
        $section = $request->input('ّedusection');
        $major = $request->input('formEduMajor');
        $orientation = $request->input('formEduOrientation');
        $lnstitute = $request->input('formEduLnstitute');
        $average = $request->input('formEduAverage');

        //get value for table of Work Experience
        $post = $request->input('formWorkpost');
        $center = $request->input('formWorkcenter');
        $titlecenter = $request->input('formworktitlecenter');
        $cooperation = $request->input('formworkcooperation');

        //get value for table of languages
        $langname = $request->input('formlangname');
        $langwritingskill = $request->input('formLangWritingskills');
        $langreadingskill = $request->input('formLangreadingskills');

        //get value for table of skills
        $skillsname = $request->input('formskillsname');

        //get value for table of cources
        $coursetype = $request->input('formcoursestype');
        $coursetitle = $request->input('formcoursestitle');
        $courseinstitute = $request->input('formcoursesinstitute');

        //get value for table of project
        $projectname = $request->input('formprojecttitle');
        $projectdate = $request->input('formprojectDate');


        //update users table
        @$getuser = DB::table('users')->where('email',$email)->first();
        if(@$getuser->email == $email)
        {
            $email_c = 1;
        }
        else
        {
        $updateDetails = [
        'name' => $name,
        'email' => $email,
        'password' => $password
        ];
        DB::table('users')
        ->where('id', $formid)
        ->update($updateDetails);
        }

        //update bases table
        $updateBases = [
            'BaseAvatar'=>$avatar,
            'BaseName'=>$name,
            'BaseFamily'=>$family,
            'BaseMarital'=>$marital,
            'BaseSolider'=>$soldier,
            'BaseBirthdate'=>$birthDate,
            'BaseWorkTitle'=> $formWorkTitle,
            'BaseWebsite'=> $website,
            'BaseEmail'=>$email,
            'BaseMobile'=>$mobile,
            'BaseTel'=>$telephone
        ];
        DB::table('tbl_base')
        ->where('Baseid', $base_id)
        ->update($updateBases);


        //update lang table
        $updateLangs = [
            'LangName'=>$langname,
            'LangWritingskills'=>$langwritingskill,
            'LangReadingskills'=>$langreadingskill
        ];
        DB::table('tbl_languages')
        ->where('Langid', $lang_id)
        ->update($updateLangs);

        //update skill table
        $updateSkills = [
            'SkillsName'=>$skillsname,
        ];
        DB::table('tbl_skills')
        ->where('Skillsid', $skill_id)
        ->update($updateSkills);

        //update edu table
        $updateEdu = [
            'EduSection' => $section,
            'EduMajor' => $major,
            'EduOrientation' => $orientation,
            'EduLnstitute' => $lnstitute,
            'EduAverage' => $average
        ];
        DB::table('tbl_educational')
        ->where('Eduid', $edu_id)
        ->update($updateEdu);

        //update work table
        $updateWork = [
            'WorkPost' => $post,
            'WorkCenter' => $center,
            'WorkTitleCenter' => $titlecenter,
            'WorkCooperation' => $cooperation
        ];
        DB::table('tbl_work_experience')
            ->where('Workid', $work_id)
            ->update($updateWork);

        //update courses table
        $updateCourses = [
            'CoursesType' => $coursetype,
            'CoursesTitle' => $coursetitle,
            'CoursesInstitute' => $courseinstitute
        ];
        DB::table('tbl_courses')
            ->where('Coursesid', $Course_id)
            ->update($updateCourses);

        $updateProject = [
            'ProjectTitle' => $projectname,
            'ProjectDate' => $projectdate
        ];
        DB::table('tbl_projects')
            ->where('Projectid', $Project_id)
            ->update($updateProject);

        //return to template select page
        return redirect('edit-form-cv-fast-persian');
    }
    public function update_cv_fast_persian_home(Request $request)
    {
        //upload avatar file if exist
        $picture = $request->input('formImage');
        $file = $request->file('avatar');
        $destinationPath = 'img/upload/';
        $updo = $request->input('updo');

        if($updo == 0)
        {
            $avatar = $picture;
        }
        else
        {
            $file->move($destinationPath,time().$file->getClientOriginalName());
            $avatar = $destinationPath.time().$file->getClientOriginalName();
        }

        //get value for table of base and table of users
        $formid = $request->input('formId');
        $name = $request->input('formName');
        $family = $request->input('formFamily');
        $marital = $request->input('formMarital');
        $soldier = $request->input('ّformSoldier');
        $birthDate = $request->input('formBirthDate');
        $formWorkTitle = $request->input('formWorkTitle');
        $email = $request->input('formmail');
        $mobile = $request->input('formMobile');
        $telephone = $request->input('formTelephone');
        $website = $request->input('formWebsite');
        $password = bcrypt($mobile);

        //get value for table of Edu
        $section = $request->input('ّedusection');
        $major = $request->input('formEduMajor');
        $orientation = $request->input('formEduOrientation');
        $lnstitute = $request->input('formEduLnstitute');
        $average = $request->input('formEduAverage');

        //get value for table of Work Experience
        $post = $request->input('formWorkpost');
        $center = $request->input('formWorkcenter');
        $titlecenter = $request->input('formworktitlecenter');
        $cooperation = $request->input('formworkcooperation');

        //get value for table of languages
        $langname = $request->input('formlangname');
        $langwritingskill = $request->input('formLangWritingskills');
        $langreadingskill = $request->input('formLangreadingskills');

        //get value for table of skills
        $skillsname = $request->input('formskillsname');

        //get value for table of cources
        $coursetype = $request->input('formcoursestype');
        $coursetitle = $request->input('formcoursestitle');
        $courseinstitute = $request->input('formcoursesinstitute');

        //get value for table of project
        $projectname = $request->input('formprojecttitle');
        $projectdate = $request->input('formprojectDate');

        //update bases table
        $updateBases = [
            'BaseAvatar'=>$avatar,
            'BaseName'=>$name,
            'BaseFamily'=>$family,
            'BaseMarital'=>$marital,
            'BaseSolider'=>$soldier,
            'BaseBirthdate'=>$birthDate,
            'BaseWorkTitle'=> $formWorkTitle,
            'BaseWebsite'=> $website,
            'BaseEmail'=>$email,
            'BaseMobile'=>$mobile,
            'BaseTel'=>$telephone
        ];
        DB::table('tbl_base')
        ->where('Baseid', $formid)
        ->update($updateBases);


        //update lang table
        $updateLangs = [
            'LangName'=>$langname,
            'LangWritingskills'=>$langwritingskill,
            'LangReadingskills'=>$langreadingskill
        ];
        DB::table('tbl_languages')
        ->where('Langid', $formid)
        ->update($updateLangs);

        //update skill table
        $updateSkills = [
            'SkillsName'=>$skillsname,
        ];
        DB::table('tbl_skills')
        ->where('Skillsid', $formid)
        ->update($updateSkills);

        //update edu table
        $updateEdu = [
            'EduSection' => $section,
            'EduMajor' => $major,
            'EduOrientation' => $orientation,
            'EduLnstitute' => $lnstitute,
            'EduAverage' => $average
        ];
        DB::table('tbl_educational')
        ->where('Eduid', $formid)
        ->update($updateEdu);

        //update work table
        $updateWork = [
            'WorkPost' => $post,
            'WorkCenter' => $center,
            'WorkTitleCenter' => $titlecenter,
            'WorkCooperation' => $cooperation
        ];
        DB::table('tbl_work_experience')
            ->where('Workid', $formid)
            ->update($updateWork);

        //update courses table
        $updateCourses = [
            'CoursesType' => $coursetype,
            'CoursesTitle' => $coursetitle,
            'CoursesInstitute' => $courseinstitute
        ];
        DB::table('tbl_courses')
            ->where('Coursesid', $formid)
            ->update($updateCourses);

        $updateProject = [
            'ProjectTitle' => $projectname,
            'ProjectDate' => $projectdate
        ];
        DB::table('tbl_projects')
            ->where('Projectid', $formid)
            ->update($updateProject);

        //return to template select page
        return redirect('edit-form-cv-fast-persian-home/'.$formid.'');
    }
    public function update_cv_fast_english_home(Request $request)
    {
        //upload avatar file if exist
        $picture = $request->input('formImage');
        $file = $request->file('avatar');
        $destinationPath = 'img/upload/';
        $updo = $request->input('updo');

        if($updo == 0)
        {
            $avatar = $picture;
        }
        else
        {
            $file->move($destinationPath,time().$file->getClientOriginalName());
            $avatar = $destinationPath.time().$file->getClientOriginalName();
        }

        //get value for table of base and table of users
        $formid = $request->input('formId');
        $name = $request->input('formName');
        $family = $request->input('formFamily');
        $marital = $request->input('formMarital');
        $soldier = $request->input('ّformSoldier');
        $birthDate = $request->input('formBirthDate');
        $formWorkTitle = $request->input('formWorkTitle');
        $email = $request->input('formmail');
        $mobile = $request->input('formMobile');
        $telephone = $request->input('formTelephone');
        $website = $request->input('formWebsite');
        $password = bcrypt($mobile);

        //get value for table of Edu
        $section = $request->input('ّedusection');
        $major = $request->input('formEduMajor');
        $orientation = $request->input('formEduOrientation');
        $lnstitute = $request->input('formEduLnstitute');
        $average = $request->input('formEduAverage');

        //get value for table of Work Experience
        $post = $request->input('formWorkpost');
        $center = $request->input('formWorkcenter');
        $titlecenter = $request->input('formworktitlecenter');
        $cooperation = $request->input('formworkcooperation');

        //get value for table of languages
        $langname = $request->input('formlangname');
        $langwritingskill = $request->input('formLangWritingskills');
        $langreadingskill = $request->input('formLangreadingskills');

        //get value for table of skills
        $skillsname = $request->input('formskillsname');

        //get value for table of cources
        $coursetype = $request->input('formcoursestype');
        $coursetitle = $request->input('formcoursestitle');
        $courseinstitute = $request->input('formcoursesinstitute');

        //get value for table of project
        $projectname = $request->input('formprojecttitle');
        $projectdate = $request->input('formprojectDate');




        //update bases table
        $updateBases = [
            'BaseAvatar'=>$avatar,
            'BaseName'=>$name,
            'BaseFamily'=>$family,
            'BaseMarital'=>$marital,
            'BaseSolider'=>$soldier,
            'BaseBirthdate'=>$birthDate,
            'BaseWorkTitle'=> $formWorkTitle,
            'BaseWebsite'=> $website,
            'BaseEmail'=>$email,
            'BaseMobile'=>$mobile,
            'BaseTel'=>$telephone
        ];
        DB::table('tbl_base')
        ->where('Baseid', $formid)
        ->update($updateBases);


        //update lang table
        $updateLangs = [
            'LangName'=>$langname,
            'LangWritingskills'=>$langwritingskill,
            'LangReadingskills'=>$langreadingskill
        ];
        DB::table('tbl_languages')
        ->where('Langid', $formid)
        ->update($updateLangs);

        //update skill table
        $updateSkills = [
            'SkillsName'=>$skillsname,
        ];
        DB::table('tbl_skills')
        ->where('Skillsid', $formid)
        ->update($updateSkills);

        //update edu table
        $updateEdu = [
            'EduSection' => $section,
            'EduMajor' => $major,
            'EduOrientation' => $orientation,
            'EduLnstitute' => $lnstitute,
            'EduAverage' => $average
        ];
        DB::table('tbl_educational')
        ->where('Eduid', $formid)
        ->update($updateEdu);

        //update work table
        $updateWork = [
            'WorkPost' => $post,
            'WorkCenter' => $center,
            'WorkTitleCenter' => $titlecenter,
            'WorkCooperation' => $cooperation
        ];
        DB::table('tbl_work_experience')
            ->where('Workid', $formid)
            ->update($updateWork);

        //update courses table
        $updateCourses = [
            'CoursesType' => $coursetype,
            'CoursesTitle' => $coursetitle,
            'CoursesInstitute' => $courseinstitute
        ];
        DB::table('tbl_courses')
            ->where('Coursesid', $formid)
            ->update($updateCourses);

        $updateProject = [
            'ProjectTitle' => $projectname,
            'ProjectDate' => $projectdate
        ];
        DB::table('tbl_projects')
            ->where('Projectid', $formid)
            ->update($updateProject);

        //return to template select page
        return redirect('edit-form-cv-fast-english-home/'.$formid.'');
    }
    public function save_form_cv_fast_persian(Request $request)
    {

        //upload avatar file
        $file = $request->file('pic');
        $destinationPath = 'img/upload/';
        $file->move($destinationPath,time().$file->getClientOriginalName());

        //get value for table of base and table of users
        $avatar = $destinationPath.time().$file->getClientOriginalName();
        $id = $request->input('formid');
        $name = $request->input('formName');
        $family = $request->input('formFamily');
        $marital = $request->input('formMarital');
        $soldier = $request->input('ّformSoldier');
        $birthDate = $request->input('formBirthDate');
        $formWorkTitle = $request->input('formWorkTitle');
        $email = $request->input('formmail');
        $mobile = $request->input('formMobile');
        $telephone = $request->input('formTelephone');
        $website = $request->input('formWebsite');
        $password = bcrypt($mobile);

        //get value for table of Edu
        $section = $request->input('ّedusection');
        $major = $request->input('formEduMajor');
        $orientation = $request->input('formEduOrientation');
        $lnstitute = $request->input('formEduLnstitute');
        $average = $request->input('formEduAverage');

        //get value for table of Work Experience
        $post = $request->input('formWorkpost');
        $center = $request->input('formWorkcenter');
        $titlecenter = $request->input('formworktitlecenter');
        $cooperation = $request->input('formworkcooperation');

        //get value for table of languages
        $langname = $request->input('formlangname');
        $langwritingskill = $request->input('formLangWritingskills');
        $langreadingskill = $request->input('formLangreadingskills');

        //get value for table of skills
        $skillsname = $request->input('formskillsname');

        //get value for table of cources
        $coursetype = $request->input('formcoursestype');
        $coursetitle = $request->input('formcoursestitle');
        $courseinstitute = $request->input('formcoursesinstitute');

        //get value for table of project
        $projectname = $request->input('formprojecttitle');
        $projectdate = $request->input('formprojectdate');

        $getbases = DB::table('tbl_base')->get();

        session()->flashInput($request->input());
        foreach($getbases as $getbase)
        {
            $site = $getbase->BaseWebsite;
            if($site != $website)
            {
                $abc = 1;
            }
            else
            {
                $error_site = 1;
                return view('form-fast-persian',compact('error_site'));
            }

        }

        $request->session()->put('sessionId', $id);
        
        //insert in base table
        DB::table('tbl_base')->insert(
            [
            'BaseUserid'=>$id,
            'BaseAvatar'=>$avatar,
            'BaseName'=>$name,
            'BaseFamily'=>$family,
            'BaseMarital'=>$marital,
            'BaseSolider'=>$soldier,
            'BaseBirthdate'=>$birthDate,
            'BaseWorkTitle'=> $formWorkTitle,
            'BaseWebsite'=> $website,
            'BaseEmail'=>$email,
            'BaseMobile'=>$mobile,
            'BaseTel'=>$telephone,
            'Status'=>'خوب',
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );

        //insert in educational table
        DB::table('tbl_educational')->insert(
            [
            'EduUserid' => $id,
            'EduSection' => $section,
            'EduMajor' => $major,
            'EduOrientation' => $orientation,
            'EduLnstitute' => $lnstitute,
            'EduAverage' => $average,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );

        //insert in work table
        DB::table('tbl_work_experience')->insert(
            [
            'WorkUserid' => $id,
            'WorkPost' => $post,
            'WorkCenter' => $center,
            'WorkTitleCenter' => $titlecenter,
            'WorkCooperation' => $cooperation,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );

         //insert in languages table
        DB::table('tbl_languages')->insert(
            [
            'LangUserid' => $id,
            'LangName' => $langname,
            'LangWritingskills' => $langwritingskill,
            'LangReadingskills' => $langreadingskill,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );

        //insert in skills table
        DB::table('tbl_skills')->insert(
            [
            'SkillsUserid' => $id,
            'SkillsName' => $skillsname,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );

        //insert in courses table
        DB::table('tbl_courses')->insert(
            [
            'CoursesUserid' => $id,
            'CoursesType' => $coursetype,
            'CoursesTitle' => $coursetitle,
            'CoursesInstitute' => $courseinstitute,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );

        //insert in project table
        DB::table('tbl_projects')->insert(
            [
            'ProjectUserid' => $id,
            'ProjectTitle' => $projectname,
            'ProjectDate' => $projectdate,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );
        return redirect()->route('template');


    }
    public function get_template()
    {
        $getbases = DB::table('tbl_base')->where('BaseUserid',$id)->orderBy('Baseid', 'desc')->first();
        $getedus = DB::table('tbl_educational')->where('EduUserid',$id)->orderBy('Eduid', 'desc')->first();
        $getworks = DB::table('tbl_work_experience')->where('WorkUserid',$id)->orderBy('Workid', 'desc')->first();
        $getlangs = DB::table('tbl_languages')->where('LangUserid',$id)->orderBy('Langid', 'desc')->first();
        $star2 = $getlangs->LangReadingskills;
        $star1 = 5 - $star2;
        $starw2 = $getlangs->LangWritingskills;
        $starw1 = 5 - $starw2;
        $getskills = DB::table('tbl_skills')->where('SkillsUserid',$id)->orderBy('Skillsid', 'desc')->first();
        $getskills = explode('-',$getskills->SkillsName);
        $getcourses = DB::table('tbl_courses')->where('CoursesUserid',$id)->orderBy('Coursesid', 'desc')->first();
        $getprojects = DB::table('tbl_projects')->where('ProjectUserid',$id)->orderBy('Projectid', 'desc')->first();
        return view('template',compact('getbases','getedus','getworks','getlangs','getskills','getcourses','getprojects','id','star1','starw1'));
    }
    public function get_personal_site()
    {
        return view('master.site');
    }
    public function get_personal_site_fast()
    {
            $getbases = DB::table('tbl_base')->where('BaseWebsite','reza')->orderBy('Baseid', 'desc')->first();
            $getbase = $getbases->BaseWebsite;

            if($getbase != NULL)
            {
                return view('master.site-fast',compact('getbases'));
            }else
            {
                throw new HttpException(404, "Some description");
            }
 
    }
        public function get_site_o($site)
    {
            $getbases = DB::table('tbl_base')->where('BaseWebsite',$site)->orderBy('Baseid', 'desc')->first();
            $getbase = $getbases->BaseWebsite;
            $getid = $getbases->Baseid;
            $getedu = DB::table('tbl_educational')->where('Eduid',$getid)->orderBy('Eduid', 'desc')->first();

                $year_a = date('Y');
                $year_b = $getbases->BaseBirthdate;
                $year_b = explode("/",$year_b);
                $year_b = $year_b[0] + 621;
                $old = $year_a - $year_b;

            $getproject = DB::table('tbl_projects')->where('Projectid',$getid)->orderBy('Projectid', 'desc')->first();
            $getcources = DB::table('tbl_courses')->where('Coursesid',$getid)->orderBy('Coursesid', 'desc')->first();
            $getwork = DB::table('tbl_work_experience')->where('Workid',$getid)->orderBy('Workid', 'desc')->first();
            $getskill = DB::table('tbl_skills')->where('Skillsid',$getid)->orderBy('Skillsid', 'desc')->first();
            $getlang = DB::table('tbl_languages')->where('Langid',$getid)->orderBy('Langid', 'desc')->first();
            $skills = explode("-",$getskill->SkillsName);
            if($getbase != NULL)
            {
                return view('websites.site-fast-persian',compact('getbases','old','getedu','getproject','getcources','getwork','skills','getlang'));
            }else
            {
                throw new HttpException(404, "Some description");
            }
 
    }
        public function get_site_o_en($site)
    {
            $getbases = DB::table('tbl_base')->where('BaseWebsite',$site)->orderBy('Baseid', 'desc')->first();
            $getbase = $getbases->BaseWebsite;
            $getid = $getbases->Baseid;
            $getedu = DB::table('tbl_educational')->where('Eduid',$getid)->orderBy('Eduid', 'desc')->first();

                $year_a = date('Y');
                $year_b = $getbases->BaseBirthdate;
                $year_b = explode("-",$year_b);
                $year_b = $year_b[0];
                $old = $year_a - $year_b;

            $getproject = DB::table('tbl_projects')->where('Projectid',$getid)->orderBy('Projectid', 'desc')->first();
            $getcources = DB::table('tbl_courses')->where('Coursesid',$getid)->orderBy('Coursesid', 'desc')->first();
            $getwork = DB::table('tbl_work_experience')->where('Workid',$getid)->orderBy('Workid', 'desc')->first();
            $getskill = DB::table('tbl_skills')->where('Skillsid',$getid)->orderBy('Skillsid', 'desc')->first();
            $getlang = DB::table('tbl_languages')->where('Langid',$getid)->orderBy('Langid', 'desc')->first();
            $skills = explode("-",$getskill->SkillsName);
            if($getbase != NULL)
            {
                return view('websites.site-fast-english',compact('getbases','old','getedu','getproject','getcources','getwork','skills','getlang'));
            }else
            {
                throw new HttpException(404, "Some description");
            }
 
    }
    public function get_donate($id)
    {
        DB::table('tbl_visit')->insert(
            [
            'VisitIP'=>$_SERVER['REMOTE_ADDR'],
            'VisitOther'=>'PC',
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
            );
    
            DB::table('tbl_log')->insert(
            [
            'LogDesc'=>  ' کاربری با آدرس آی پی '  . $_SERVER['REMOTE_ADDR'] .  ' وارد صفحه حمایت شد ' ,
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
            ]
        );
        $getbases = DB::table('tbl_base')->where('Baseid',$id)->first();
        return view('donate',compact('id','getbases'));
        
    }
    public function donate()
    {
        return view('donate');
    }
    public function get_result_donate()
    {
        $status = $_GET['Status'];
        if($status == 'NOK')
        {
            $num = 0;
            $stat = "0";
        }
        else
        {
            $num = 1;
            $stat = "1";
        }
        $fid = session('sessionF');
        //update factor table
        $updateFactor = [
            'FactorStatus'=>$stat,
        ];
        DB::table('tbl_factor')
    	->where('Factorid', $fid)
        ->update($updateFactor);
        
        if($num == 0)
        {
            return view('nok-donate');
        }
        if($num == 1)
        {
            return view('ok-donate');
        }
        
    }
    public function save_factor_donate(Request $request)
    {

        $name = $request->input('txt-name');
        $price = $request->input('txt-price');
        $family = $request->input('txt-family');
        $email = $request->input('txt-email');
        $mobile = $request->input('txt-mobile');

        //insert in base table
        DB::table('tbl_factor')->insert(
        [
        'FactorTemplateid' => 1000,
        'FactorName' => $name,
        'FactorFamily' => $family,
        'FactorAmount' => $price / 10,
        'FactorMobile' => $mobile,
        'FactorEmail' => $email,
        'FactorStatus' => '0',
        'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
        'updated_at' => \Carbon\Carbon::now()
         ]
        );
        
        $getfactor = DB::table('tbl_factor')->orderBy('Factorid', 'desc')->first();
        $fid = $getfactor->Factorid;
        $request->session()->put('sessionF', $fid);

        //bank code
        $MerchantID = '63ece126-559d-11ea-8f35-000c295eb8fc'; //Required
        $Amount = $price; //Amount will be based on Toman - Required
        $Description = 'حمایت مالی از وب سایت امضا'; // Required
        $Email = $email; // Optional
        $Mobile = $mobile; // Optional
        $CallbackURL = 'https://www.emza.app/result-donate'; // Required
        
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        
        $result = $client->PaymentRequest(
        [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
        ]
        );
        
        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
        Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
        Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
        } else {
        echo'ERR: '.$result->Status;
        }
        //end bank code


    }
    public function create_cv_persian()
    {
        return view('create-cv-persian');
    }
    public function get_ok()
    {
        return view('ok-register');
    }
}
