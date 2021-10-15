
<?php

Route::domain('{account}.emza.app')->group(function () {
    Route::get('/', function ($account) {
        $getbases = DB::table('tbl_base')->get();
        foreach($getbases as $base)
        {
            if($account == $base->BaseWebsite)
            {
                $getbase = DB::table('tbl_base')->where('BaseWebsite',$base->BaseWebsite)->where('RequestSite',4)->first();
                $base_birth_date = $getbase->BaseBirthdate; 
                $birth_year_shamsi = substr($base_birth_date,0,4);
                $birth_year_miladi = $birth_year_shamsi + 621;
                $year_now = date("Y");
                $my_age = $year_now - $birth_year_miladi;
                
                $batch = $getbase->BaseBatch;
                $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
                $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
                $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
                $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
                $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
                $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
                $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
                $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
                $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
                return view('website.index',compact('getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch','my_age'));
            }            
        }
    });
    Route::post('/send-mail-to-user', function ($account) {
        $token = Request::input('g-recaptcha-response');
        if(strlen($token) > 0){
            $family = Request::input('family');
        $email = Request::input('mail');
        $eml = Request::input('eml');
        $subject = Request::input('title');
        $direction = Request::input('direction');
        $font_f = Request::input('font-f');
        $font_s = Request::input('font-s');
        $font_c = Request::input('font-c');
        $title = Request::input('title');
        $desc = Request::input('codedesc');
        $from = "no-reply@emza.app";
        $to = $eml;
        $subject = $subject . ' از ' . $family;
        echo 
        "
        
        <p style='background:green;text-align:center;color:white;font-size: 18px;font-family:Vazir, sans-serif;padding: 40px;width: 50%;margin: 20px auto;border-radius:5px;'>
پیام شما با موفقیت ارسال شد 
<br>
<p style='font-size:12px;text-align:center'>
پیام به شکل زیر ارسال شده است
</p>
      </p>";

       echo $mail_body = '<html lang="fa">
        <head>
        <meta charset="UTF-8">
        <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet">
        <link href="https://v1.fontapi.ir/css/Sahel" rel="stylesheet">
        <title>
        ایمیل از طرف '.$family.'
        </title>
        <style>
        * {
            font-family: Vazir, sans-serif;
        }
        #texthtml{
            direction: '.$direction.' !important;
            font-family: '.$font_f.' !important;
            font-size: '.$font_s.' !important;
            color: '.$font_c.' !important;
        }
        </style>
        </head>
        <body>
        
        <div style="width: 60%;background: #ffffff;border: 2px solid #b7b7b7;border-radius: 8px;text-align:justify;direction:rtl;margin:30px;padding:45px;font-size:13px;line-height: 0.6cm;box-shadow: 1px 1px 30px 1px #dcdcdc;margin: 20px auto;">
        <img src="https://emza.app/img/final-logo-small.png" style="width: 60px;height: 60px;float: right;margin: 20px;margin-right: 0px;" />
        <h3 style="letter-spacing: 1px;color: #001292;font-weight: bold;font-size: 20px;position: relative;top: 19px;">
        امضا - سامانه رزومه‌ ساز آنلاین
        </h3>
        <h4 style="clear:both">
        این ایمیل از طرف 
        '.$family.'
        از طریق وبسایت شخصی شما به شما ارسال شده است.
        </h4>
        <h4 style="clear:both;color:darkblue">
        '.$title.'
        </h4>
        '.$desc.'
        
        <h5>
        نام فرستنده: '.$family.'
        </h5>
        <h5>

        آدرس ایمیل فرستنده: '.$email.'
        </h5>
        </div>
        </body>
        </html>';
        
        $headers = "Content-type: text/html";
        
        // Always set content-type when sending HTML email
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers  .= "From: no-reply@emza.app";
        mail($to,$subject,$mail_body, $headers)or die("Error. Email not send!");
        
        }
        else
        {
            return redirect('/');
        }
    });
});

Route::domain('ahmadi.localhost')->group(function () {
    Route::get('/', function() {
        $account = 'ahmadi';
        $getbases = DB::table('tbl_base')->get();
        foreach($getbases as $base)
        {
            if($account == $base->BaseWebsite)
            {
                $getbase = DB::table('tbl_base')->where('BaseWebsite',$base->BaseWebsite)->where('RequestSite',4)->first();
               $base_birth_date = $getbase->BaseBirthdate; 
               $birth_year_shamsi = substr($base_birth_date,0,4);
               $birth_year_miladi = $birth_year_shamsi + 621;
               $year_now = date("Y");
               $my_age = $year_now - $birth_year_miladi;
                
                $batch = $getbase->BaseBatch;
                $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
                $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
                $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->get();
                $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->get();
                $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->get();
                $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->get();
                $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->get();
                $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->get();
                $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->get();
                return view('website.index',compact('getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch','my_age'));
            }            
        }
    });

});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//for only MasterController

Route::get('/','MasterController@index'); //not

Route::get('/contact-us','MasterController@contact_us')->middleware('throttle:80'); //not
Route::post('/submit-comment','MasterController@submit_comment')->middleware('throttle:80'); //not
Route::get('/guide','MasterController@get_guide')->middleware('throttle:80'); //not
Route::get('/about-this-system','MasterController@get_about_this_system')->middleware('throttle:80'); //not
Route::get('/privace','MasterController@get_privace')->middleware('throttle:80'); //not
Route::get('/terms','MasterController@get_terms')->middleware('throttle:80'); //not
Route::get('/job-opportunity','MasterController@get_job')->middleware('throttle:80'); //not
Route::get('/articles','MasterController@get_articles')->middleware('throttle:80'); //not
Route::get('/feedback','MasterController@get_feedback')->middleware('throttle:80'); //not
Route::get('/resumes','MasterController@get_resumes')->middleware('throttle:80'); //not
Route::get('/websites-made','MasterController@get_websites_made')->middleware('throttle:80'); //not
Route::post('/save-feedback','MasterController@save_feedback')->middleware('throttle:80'); //not
Route::post('/delete-image-avatar','MasterController@delete_image')->middleware('throttle:80'); //not
Route::post('/delete-image-avatar-en','MasterController@delete_image_en')->middleware('throttle:80'); //not




//routes home
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/auth', function () {
    return view("auth/template");
});

//bank
Route::get('/donate', 'MasterController@donate')->middleware('throttle:80'); //yes
Route::get('/donate/{id}', 'MasterController@get_donate')->middleware('throttle:80'); //yes
Route::post('/save-factor-donate', 'MasterController@save_factor_donate')->middleware('throttle:80'); //yes
Route::get('/result-donate', 'MasterController@get_result_donate')->middleware('throttle:80');
Route::get('/create-cv', 'MasterController@create_cv_persian')->middleware('throttle:80');

//admin 
Route::group(['prefix'=>'administrator','as'=>'admin.'], function(){
Route::get('/', 'AdminController@check_login')->middleware('throttle:80');
Route::post('/check-auth', 'AdminController@check_auth')->middleware('throttle:80'); //yes
Route::get('/logout-admin', 'AdminController@logout_admin')->middleware('throttle:80');
Route::get('/statistics', 'AdminController@get_statistics')->middleware('throttle:80');
Route::get('/persian-resumes', 'AdminController@get_persian_resumes')->middleware('throttle:80');
Route::get('/persian-resumes-details', 'AdminController@get_persian_resumes_details')->middleware('throttle:80');
Route::get('/persian-resumes-edit', 'AdminController@get_persian_resumes_edit')->middleware('throttle:80');
Route::get('/persian-resumes-delete-avatar', 'AdminController@get_persian_resumes_delete_avatar')->middleware('throttle:80');
Route::get('/move-to-trash/{id}', 'AdminController@move_to_trash')->middleware('throttle:80');
Route::get('/trash', 'AdminController@get_trash')->middleware('throttle:80');
Route::get('/restore/{id}', 'AdminController@restore')->middleware('throttle:80');
Route::get('/real-delete/{id}', 'AdminController@real_delete')->middleware('throttle:80');
Route::get('/cv/{batch}', 'AdminController@show_cv_one')->middleware('throttle:80');
Route::get('/to-woman/1000{id}', 'AdminController@to_woman')->middleware('throttle:80');
Route::get('/to-man/1000{id}', 'AdminController@to_man')->middleware('throttle:80');
Route::get('/users', 'AdminController@get_users')->middleware('throttle:80');
Route::get('/users/reset/{id}', 'AdminController@reset_user')->middleware('throttle:80');
Route::get('/users/delete/{id}', 'AdminController@delete_user')->middleware('throttle:80');
Route::get('/en/cv/1000{id}', 'AdminController@show_cv_one_en')->middleware('throttle:80');
Route::get('/move-to-trash-en/{id}', 'AdminController@move_to_trash_en')->middleware('throttle:80');
Route::get('/get-trash-en', 'AdminController@get_trash_en')->middleware('throttle:80');
Route::get('/restore-en/{id}', 'AdminController@restore_trash_en')->middleware('throttle:80');
Route::get('/real-delete-en/{id}', 'AdminController@real_delete_en')->middleware('throttle:80');
Route::get('/send-massage-all', 'AdminController@send_massage_all')->middleware('throttle:80');
Route::get('/show-request-site', 'AdminController@show_request_site')->middleware('throttle:80');
Route::get('/verify-site/{id}', 'AdminController@verify_site')->middleware('throttle:80');
Route::get('/enable-site/{id}', 'AdminController@enable_site')->middleware('throttle:80');
Route::get('/messages', 'AdminController@get_messages')->middleware('throttle:80');
Route::get('/delete-msg/{id}', 'AdminController@delete_msg')->middleware('throttle:80');
Route::get('/show-donate', 'AdminController@show_donate')->middleware('throttle:80');
Route::get('/delete-donate/{id}', 'AdminController@delete_donate')->middleware('throttle:80');
Route::get('/feedback', 'AdminController@show_feedback')->middleware('throttle:80');
Route::get('/delete-feedback/{id}', 'AdminController@delete_feedback')->middleware('throttle:80');
Route::get('/websites', 'AdminController@get_websites')->middleware('throttle:80');
Route::get('/pictures', 'AdminController@get_pictures')->middleware('throttle:80');
Route::get('/massage/{userid}', 'AdminController@get_massage')->middleware('throttle:80');
Route::post('/send-massage', 'AdminController@send_massage')->middleware('throttle:80');
Route::get('/massage/user/{userid}', 'AdminController@get_massage_user')->middleware('throttle:80');
Route::post('/delete-avatar', 'AdminController@delete_avatar')->middleware('throttle:80');
Route::get('/print-resume/{batch}', 'AdminController@print_resume')->middleware('throttle:80');
Route::get('/verify-site-4/{id}', 'AdminController@verify_site_4')->middleware('throttle:80');
Route::get('/location/{id}', 'AdminController@get_location')->middleware('throttle:80');
Route::post('/update-location', 'AdminController@update_location')->middleware('throttle:80');

});

//auth
Route::get('/ok', 'MasterController@get_ok')->middleware('throttle:80');
Route::get('/veryfication', 'MasterController@veryfication')->middleware('throttle:80');
Route::get('/enter-mobile', 'MasterController@enter_mobile')->middleware('throttle:80');
Route::post('/check-code', 'MasterController@check_code')->middleware('throttle:80');
Route::post('/check-mobile', 'MasterController@check_mobile')->middleware('throttle:80');
Route::post('/send-password', 'MasterController@SendPassword')->middleware('throttle:80');
Route::get('/new-password/{mobile}', 'MasterController@NewPassword')->middleware('throttle:80');
Route::post('/save-new-password', 'MasterController@save_new_password')->middleware('throttle:80');

//new cv route
Route::get('/create-resume-fast', 'CvController@get_form_cv')->middleware('throttle:80')->middleware('auth');
Route::post('/save-chnage-and-add-picture', 'CvController@save_resume')->middleware('throttle:80')->middleware('auth');
Route::post('/send-upload-avatar', 'CvController@upload_Avatar')->middleware('throttle:80')->middleware('auth');
Route::get('/save-chnage-and-add-picture', 'CvController@get_form_avatar')->middleware('throttle:80')->middleware('auth');
Route::get('change-avatar/{batch}', 'CvController@get_form_avatar_by_batch')->middleware('throttle:80')->middleware('auth');
Route::get('/get-resume', 'CvController@get_resume')->middleware('throttle:80')->middleware('auth');
Route::get('/request-create-site/{batch}', 'CvController@get_request_create_site')->middleware('throttle:80')->middleware('auth');
Route::post('/send-request-form-website', 'CvController@send_request_form_website')->middleware('throttle:80')->middleware('auth');
Route::post('/send-upload-avatar-by-batch', 'CvController@upload_Avatar_by_batch')->middleware('throttle:80')->middleware('auth');
Route::get('/get-resume/{batch}', 'CvController@get_resume_form_panel')->middleware('throttle:80')->middleware('auth');
Route::get('/website-status/{id}', 'CvController@get_status_site')->middleware('throttle:80')->middleware('auth');
Route::post('/go-to-bank', 'CvController@go_to_bank')->middleware('throttle:80')->middleware('auth');
Route::get('/download-pdf', 'CvController@download_pdf')->middleware('throttle:80')->middleware('auth');
Route::get('/get-print/{batch}', 'CvController@get_print')->middleware('throttle:80')->middleware('auth');
Route::get('/delete-resume/{batch}', 'CvController@resume_delete')->middleware('throttle:80')->middleware('auth');
Route::get('/edit-resume/{batch}', 'CvController@edit_resume')->middleware('throttle:80')->middleware('auth');
Route::post('/update-resume', 'CvController@update_resume')->middleware('throttle:80')->middleware('auth');
Route::get('/website', 'CvController@get_website')->middleware('throttle:80')->middleware('auth');
Route::get('/change-font/{batch}', 'CvController@get_resume_for_change_font')->middleware('throttle:80')->middleware('auth');
Route::post('/change-font', 'CvController@change_font')->middleware('throttle:80')->middleware('auth');
Route::get('/change-background/{batch}', 'CvController@get_resume_for_change_background')->middleware('throttle:80')->middleware('auth');
Route::post('/change-background', 'CvController@change_background')->middleware('throttle:80')->middleware('auth');
Route::get('/show-massages/{muserid}', 'CvController@get_massages')->middleware('throttle:80')->middleware('auth');
Route::get('/show-msg/{id}', 'CvController@get_msg')->middleware('throttle:80')->middleware('auth');
Route::get('/delete-msg/{id}', 'CvController@delete_msg')->middleware('throttle:80')->middleware('auth');
Route::get('/background/{batch}', 'CvController@get_resume_background')->middleware('throttle:80')->middleware('auth');
Route::post('/upload-background', 'CvController@upload_background')->middleware('throttle:80')->middleware('auth');
Route::get('/resume-show/{batch}', 'CvController@show_resume')->middleware('throttle:80')->middleware('auth');
Route::get('/help-download/{batch}', 'CvController@show_help_download')->middleware('throttle:80')->middleware('auth');
