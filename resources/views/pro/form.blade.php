<form id="builderForm" action="save-pro-persian" method="POST" style="
    position: relative;
    top: -19px;
">
    <input type="hidden" name="Section" id="Section" value="1">
    <div id="builder-container" style="background: #fff" class="uk-container uk-container-large">
        <div class="uk-grid" style="padding-top: 40px;">
            <div class="uk-width-1-6 uk-visible@m">
                <div class="builder-progress">
                    <div id="circle">
                        <canvas width="100" height="100"></canvas><strong><i>%</i>0</strong>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-2-3@m ">
                <ul id="builder-nav" class="uk-subnav uk-margin-medium-top uk-margin-medium-bottom uk-padding-small uk-margin-remove-right uk-margin-remove-left cv-box uk-visible@s  back-section" uk-switcher="swiping:false">
                    <li class="uk-active"><a href="#BasicInfo" aria-expanded="true">اطلاعات پایه</a></li>
                    <li><a href="#EducationInfo" aria-expanded="false">سوابق تحصیلی</a></li>
                    <li><a href="#ExperienceInfo" aria-expanded="false">سوابق شغلی</a></li>
                    <li><a href="#SkillInfo" aria-expanded="false">مهارت&zwnj;ها</a></li>
                    <li><a href="#ProjectInfo" aria-expanded="false">پروژه&zwnj;ها</a></li>
                    <li><a href="#RequestJob" aria-expanded="false">دریافت رزومه</a></li>
                </ul>

                <ul id="builder-switcher" class="uk-switcher uk-margin">
                    <li data-switcher="first" data-step="1" class="uk-active">
                        <div class="builder-card">
                            <input type="hidden" data-section="BasicInfo" data-val="true" data-val-required="The Id field is required." id="BI_Id" name="BI.Id" value="">
                            <input type="hidden" id="BI_Ad" name="BI.Ad" value="">
                            <input type="hidden" data-val="true" data-val-required="The ResumeProgress field is required." id="BI_ResumeProgress" name="BI.ResumeProgress" value="0">

                            <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="BI_IC" name="BI.IC" value="">

                            <h2>اطلاعات پایه</h2>
                            <div class="cv-box builder-box box-sh back-section" id="add-section-social" data-fieldset="1">
                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-1 uk-width-1-5@m uk-first-column">
                                        <div class="photo-upload ">
                                            <label class="uk-border-circle " style="background-image:url( {{ asset('kit/avatar.svg') }} )">
                                                <input type="file" name="file" data-score="2">
                                                <input type="hidden" data-val="true" data-val-required="The PhotoChanged field is required." id="PhotoChanged" name="PhotoChanged" value="False">
                                                <input type="hidden" data-src="" id="Photo" name="Photo" value="">
                                            </label>
                                            <div class="uk-margin-small-top">
                                                <button type="button" data-position="bottom" uk-tooltip="title:انتخاب عکس;pos:bottom" class="uk-button uk-button-small uk-button-primary uk-icon" id="add-photo" title="" aria-expanded="false">
                                                    <img uk-img="data-src:/images/svg/upload-icon.svg" src="{{ asset('kit/upload-icon.svg') }}">
                                                </button>
                                                <button type="button" data-position="bottom" uk-tooltip="title:حذف عکس;pos:bottom" style="display:none" class="uk-button uk-button-small uk-button-danger uk-icon" id="remove-photo" title="" aria-expanded="false">
                                                    <img uk-img="data-src:{{ asset('img/uikit/trash-icon.svg') }}">
                                                </button>
                                            </div>
                                            <div class="file-path-wrapper" style="display:none">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-4-5@m">
                                        <div class="uk-grid-small uk-grid" uk-grid="">
                                            <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-first-column">
                                                <div class="input-field uk-margin">
                                                    <label class="uk-form-label" for="BI_FN">نام</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" data-score="4" type="text" id="BI_FN" name="BI.FN" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m">
                                                <div class="input-field uk-margin">
                                                    <label class="uk-form-label" for="BI_LN">نام خانوادگی</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" data-score="4" type="text" id="BI_LN" name="BI.LN" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1 uk-width-1-3@s uk-width-1-3@m">
                                                <div class="input-field uk-margin">
                                                    <label class="uk-form-label has-help" data-help="resumeTitle" for="BI_RT">عنوان شغلی رزومه</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" placeholder="مثال: برنامه نویس وب یا ..." data-score="2" type="text" id="BI_RT" name="BI.RT" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid-small uk-grid" uk-grid="">
                                            <div class="uk-width-1-3 uk-width-1-6@m uk-first-column">
                                                <div class="input-field uk-margin">
                                                    <label class="uk-form-label active" for="BI_Gdr">جنسیت</label>
                                                    <div class="uk-form-controls">
                                                        <select data-score="2" class="uk-select" id="BI_Gdr" name="BI.Gdr">
                                                            <option value="" selected=""></option>
                                                            <option value="Male">مرد</option>
                                                            <option value="Female">زن</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-3 uk-width-1-6@m">
                                                <div class="input-field uk-margin">
                                                    <label class="uk-form-label active" for="BI_Mas">وضعیت تأهل</label>
                                                    <div class="uk-form-controls">
                                                        <select data-score="2" class="uk-select" id="BI_Mas" name="BI.Mas">
                                                            <option value="" selected=""></option>
                                                            <option value="Single">مجرد</option>
                                                            <option value="Married">متأهل</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-3 uk-width-1-4@m">
                                                <div class="input-field uk-margin">
                                                    <label class="uk-form-label active" for="BI_MiS">وضعیت سربازی</label>
                                                    <select class="uk-select" id="BI_MiS" name="BI.MiS">
                                                        <option value="" selected=""></option>
                                                        <option value="StillToServed">مشمول</option>
                                                        <option value="Serving">در حال خدمت</option>
                                                        <option value="Served">پایان خدمت</option>
                                                        <option value="Exempt">معاف</option>
                                                        <option value="EducationalExempt">معافیت تحصیلی</option>
                                                        <option value="NonMedicalExempt">معافیت غیرپزشکی</option>
                                                        <option value="MedicalExempt">معافیت پزشکی</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1 uk-width-2-5@m">
                                                <div class="input-field">
                                                    <label class="uk-form-label" for="BI_BY">تاریخ تولد</label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-grid-small uk-grid" uk-grid="">
                                                            <div class="uk-width-1-3 uk-width-1-4@m uk-first-column">
                                                                <select class="uk-select" id="BI_BD" name="BI.BD">
                                                                    <option value="" disabled="" selected="">روز</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                    <option>24</option>
                                                                    <option>25</option>
                                                                    <option>26</option>
                                                                    <option>27</option>
                                                                    <option>28</option>
                                                                    <option>29</option>
                                                                    <option>30</option>
                                                                    <option>31</option>
                                                                </select>
                                                            </div>
                                                            <div class="uk-width-1-3 uk-width-2-5@m">
                                                                <select class="uk-select" id="BI_BM" name="BI.BM">
                                                                    <option value="" disabled="" selected="">ماه</option>
                                                                    <option value="1">فروردین</option>
                                                                    <option value="2">اردیبهشت</option>
                                                                    <option value="3">خرداد</option>
                                                                    <option value="4">تیر</option>
                                                                    <option value="5">مرداد</option>
                                                                    <option value="6">شهریور</option>
                                                                    <option value="7">مهر</option>
                                                                    <option value="8">آبان</option>
                                                                    <option value="9">آذر</option>
                                                                    <option value="10">دی</option>
                                                                    <option value="11">بهمن</option>
                                                                    <option value="12">اسفند</option>
                                                                </select>
                                                            </div>
                                                            <div class="uk-width-1-3 uk-width-1-3@m">
                                                                <input data-min="1299" data-max="1389" data-score="2" class="uk-input input-year" placeholder="سال" type="number" id="BI_BY" name="BI.BY" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2>اطلاعات تماس</h2>
                            <div class="cv-box builder-box box-sh back-section" data-fieldset="1">
                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m uk-first-column">
                                        <div class="input-field">
                                            <label class="uk-form-label has-help" data-help="email" for="BI_Em">ایمیل</label>
                                            <div class="uk-form-controls">
                                                <input data-score="4" dir="ltr" class="uk-input" placeholder="example@domain.com" type="text" id="BI_Em" name="BI.Em" value="">
                                                <span class="error-message uk-form-small uk-form-danger">ایمیل صحیح وارد کنید</span>
                                                <ul id="emaildropdown" class="dropdown-content"></ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m">
                                        <div class="input-field">
                                            <label class="uk-form-label active" for="BI_Mob">موبایل</label>
                                            <div class="uk-form-controls">
                                                <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-3">
                                                    <div class="flag-container">
                                                        <div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="Iran (&#8235;ایران&#8236;&lrm;): +98">
                                                            <div class="iti-flag ir"></div>
                                                            <div class="selected-dial-code">+98</div>
                                                            <div class="iti-arrow"></div>
                                                        </div>
                                                        <ul class="country-list hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-ir">
                                                            <li class="country preferred active" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir" aria-selected="true">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ir"></div>
                                                                </div><span class="country-name">Iran (&#8235;ایران&#8236;&lrm;)</span><span class="dial-code">+98</span></li>
                                                            <li class="divider" role="separator" aria-disabled="true"></li>
                                                            <li class="country standard" id="iti-item-af" role="option" data-dial-code="93" data-country-code="af">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag af"></div>
                                                                </div><span class="country-name">Afghanistan (&#8235;افغانستان&#8236;&lrm;)</span><span class="dial-code">+93</span></li>
                                                            <li class="country standard" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag al"></div>
                                                                </div><span class="country-name">Albania (Shqipëri)</span><span class="dial-code">+355</span></li>
                                                            <li class="country standard" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag dz"></div>
                                                                </div><span class="country-name">Algeria (&#8235;الجزائر&#8236;&lrm;)</span><span class="dial-code">+213</span></li>
                                                            <li class="country standard" id="iti-item-as" role="option" data-dial-code="1684" data-country-code="as">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag as"></div>
                                                                </div><span class="country-name">American Samoa</span><span class="dial-code">+1684</span></li>
                                                            <li class="country standard" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ad"></div>
                                                                </div><span class="country-name">Andorra</span><span class="dial-code">+376</span></li>
                                                            <li class="country standard" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ao"></div>
                                                                </div><span class="country-name">Angola</span><span class="dial-code">+244</span></li>
                                                            <li class="country standard" id="iti-item-ai" role="option" data-dial-code="1264" data-country-code="ai">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ai"></div>
                                                                </div><span class="country-name">Anguilla</span><span class="dial-code">+1264</span></li>
                                                            <li class="country standard" id="iti-item-ag" role="option" data-dial-code="1268" data-country-code="ag">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ag"></div>
                                                                </div><span class="country-name">Antigua and Barbuda</span><span class="dial-code">+1268</span></li>
                                                            <li class="country standard" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ar"></div>
                                                                </div><span class="country-name">Argentina</span><span class="dial-code">+54</span></li>
                                                            <li class="country standard" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag am"></div>
                                                                </div><span class="country-name">Armenia (Հայաստան)</span><span class="dial-code">+374</span></li>
                                                            <li class="country standard" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag aw"></div>
                                                                </div><span class="country-name">Aruba</span><span class="dial-code">+297</span></li>
                                                            <li class="country standard" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag au"></div>
                                                                </div><span class="country-name">Australia</span><span class="dial-code">+61</span></li>
                                                            <li class="country standard" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag at"></div>
                                                                </div><span class="country-name">Austria (Österreich)</span><span class="dial-code">+43</span></li>
                                                            <li class="country standard" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag az"></div>
                                                                </div><span class="country-name">Azerbaijan (Azərbaycan)</span><span class="dial-code">+994</span></li>
                                                            <li class="country standard" id="iti-item-bs" role="option" data-dial-code="1242" data-country-code="bs">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bs"></div>
                                                                </div><span class="country-name">Bahamas</span><span class="dial-code">+1242</span></li>
                                                            <li class="country standard" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bh"></div>
                                                                </div><span class="country-name">Bahrain (&#8235;البحرين&#8236;&lrm;)</span><span class="dial-code">+973</span></li>
                                                            <li class="country standard" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bd"></div>
                                                                </div><span class="country-name">Bangladesh (বাংলাদেশ)</span><span class="dial-code">+880</span></li>
                                                            <li class="country standard" id="iti-item-bb" role="option" data-dial-code="1246" data-country-code="bb">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bb"></div>
                                                                </div><span class="country-name">Barbados</span><span class="dial-code">+1246</span></li>
                                                            <li class="country standard" id="iti-item-by" role="option" data-dial-code="375" data-country-code="by">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag by"></div>
                                                                </div><span class="country-name">Belarus (Беларусь)</span><span class="dial-code">+375</span></li>
                                                            <li class="country standard" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag be"></div>
                                                                </div><span class="country-name">Belgium (België)</span><span class="dial-code">+32</span></li>
                                                            <li class="country standard" id="iti-item-bz" role="option" data-dial-code="501" data-country-code="bz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bz"></div>
                                                                </div><span class="country-name">Belize</span><span class="dial-code">+501</span></li>
                                                            <li class="country standard" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bj"></div>
                                                                </div><span class="country-name">Benin (Bénin)</span><span class="dial-code">+229</span></li>
                                                            <li class="country standard" id="iti-item-bm" role="option" data-dial-code="1441" data-country-code="bm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bm"></div>
                                                                </div><span class="country-name">Bermuda</span><span class="dial-code">+1441</span></li>
                                                            <li class="country standard" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bt"></div>
                                                                </div><span class="country-name">Bhutan (འབྲུག)</span><span class="dial-code">+975</span></li>
                                                            <li class="country standard" id="iti-item-bo" role="option" data-dial-code="591" data-country-code="bo">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bo"></div>
                                                                </div><span class="country-name">Bolivia</span><span class="dial-code">+591</span></li>
                                                            <li class="country standard" id="iti-item-ba" role="option" data-dial-code="387" data-country-code="ba">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ba"></div>
                                                                </div><span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="dial-code">+387</span></li>
                                                            <li class="country standard" id="iti-item-bw" role="option" data-dial-code="267" data-country-code="bw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bw"></div>
                                                                </div><span class="country-name">Botswana</span><span class="dial-code">+267</span></li>
                                                            <li class="country standard" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag br"></div>
                                                                </div><span class="country-name">Brazil (Brasil)</span><span class="dial-code">+55</span></li>
                                                            <li class="country standard" id="iti-item-io" role="option" data-dial-code="246" data-country-code="io">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag io"></div>
                                                                </div><span class="country-name">British Indian Ocean Territory</span><span class="dial-code">+246</span></li>
                                                            <li class="country standard" id="iti-item-vg" role="option" data-dial-code="1284" data-country-code="vg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag vg"></div>
                                                                </div><span class="country-name">British Virgin Islands</span><span class="dial-code">+1284</span></li>
                                                            <li class="country standard" id="iti-item-bn" role="option" data-dial-code="673" data-country-code="bn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bn"></div>
                                                                </div><span class="country-name">Brunei</span><span class="dial-code">+673</span></li>
                                                            <li class="country standard" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bg"></div>
                                                                </div><span class="country-name">Bulgaria (България)</span><span class="dial-code">+359</span></li>
                                                            <li class="country standard" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bf"></div>
                                                                </div><span class="country-name">Burkina Faso</span><span class="dial-code">+226</span></li>
                                                            <li class="country standard" id="iti-item-bi" role="option" data-dial-code="257" data-country-code="bi">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bi"></div>
                                                                </div><span class="country-name">Burundi (Uburundi)</span><span class="dial-code">+257</span></li>
                                                            <li class="country standard" id="iti-item-kh" role="option" data-dial-code="855" data-country-code="kh">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag kh"></div>
                                                                </div><span class="country-name">Cambodia (កម្ពុជា)</span><span class="dial-code">+855</span></li>
                                                            <li class="country standard" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cm"></div>
                                                                </div><span class="country-name">Cameroon (Cameroun)</span><span class="dial-code">+237</span></li>
                                                            <li class="country standard" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ca"></div>
                                                                </div><span class="country-name">Canada</span><span class="dial-code">+1</span></li>
                                                            <li class="country standard" id="iti-item-cv" role="option" data-dial-code="238" data-country-code="cv">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cv"></div>
                                                                </div><span class="country-name">Cape Verde (Kabu Verdi)</span><span class="dial-code">+238</span></li>
                                                            <li class="country standard" id="iti-item-bq" role="option" data-dial-code="599" data-country-code="bq">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bq"></div>
                                                                </div><span class="country-name">Caribbean Netherlands</span><span class="dial-code">+599</span></li>
                                                            <li class="country standard" id="iti-item-ky" role="option" data-dial-code="1345" data-country-code="ky">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ky"></div>
                                                                </div><span class="country-name">Cayman Islands</span><span class="dial-code">+1345</span></li>
                                                            <li class="country standard" id="iti-item-cf" role="option" data-dial-code="236" data-country-code="cf">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cf"></div>
                                                                </div><span class="country-name">Central African Republic (République centrafricaine)</span><span class="dial-code">+236</span></li>
                                                            <li class="country standard" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag td"></div>
                                                                </div><span class="country-name">Chad (Tchad)</span><span class="dial-code">+235</span></li>
                                                            <li class="country standard" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cl"></div>
                                                                </div><span class="country-name">Chile</span><span class="dial-code">+56</span></li>
                                                            <li class="country standard" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cn"></div>
                                                                </div><span class="country-name">China (中国)</span><span class="dial-code">+86</span></li>
                                                            <li class="country standard" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cx"></div>
                                                                </div><span class="country-name">Christmas Island</span><span class="dial-code">+61</span></li>
                                                            <li class="country standard" id="iti-item-cc" role="option" data-dial-code="61" data-country-code="cc">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cc"></div>
                                                                </div><span class="country-name">Cocos (Keeling) Islands</span><span class="dial-code">+61</span></li>
                                                            <li class="country standard" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag co"></div>
                                                                </div><span class="country-name">Colombia</span><span class="dial-code">+57</span></li>
                                                            <li class="country standard" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag km"></div>
                                                                </div><span class="country-name">Comoros (&#8235;جزر القمر&#8236;&lrm;)</span><span class="dial-code">+269</span></li>
                                                            <li class="country standard" id="iti-item-cd" role="option" data-dial-code="243" data-country-code="cd">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cd"></div>
                                                                </div><span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="dial-code">+243</span></li>
                                                            <li class="country standard" id="iti-item-cg" role="option" data-dial-code="242" data-country-code="cg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cg"></div>
                                                                </div><span class="country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="dial-code">+242</span></li>
                                                            <li class="country standard" id="iti-item-ck" role="option" data-dial-code="682" data-country-code="ck">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ck"></div>
                                                                </div><span class="country-name">Cook Islands</span><span class="dial-code">+682</span></li>
                                                            <li class="country standard" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cr"></div>
                                                                </div><span class="country-name">Costa Rica</span><span class="dial-code">+506</span></li>
                                                            <li class="country standard" id="iti-item-ci" role="option" data-dial-code="225" data-country-code="ci">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ci"></div>
                                                                </div><span class="country-name">Côte d’Ivoire</span><span class="dial-code">+225</span></li>
                                                            <li class="country standard" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag hr"></div>
                                                                </div><span class="country-name">Croatia (Hrvatska)</span><span class="dial-code">+385</span></li>
                                                            <li class="country standard" id="iti-item-cu" role="option" data-dial-code="53" data-country-code="cu">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cu"></div>
                                                                </div><span class="country-name">Cuba</span><span class="dial-code">+53</span></li>
                                                            <li class="country standard" id="iti-item-cw" role="option" data-dial-code="599" data-country-code="cw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cw"></div>
                                                                </div><span class="country-name">Curaçao</span><span class="dial-code">+599</span></li>
                                                            <li class="country standard" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cy"></div>
                                                                </div><span class="country-name">Cyprus (Κύπρος)</span><span class="dial-code">+357</span></li>
                                                            <li class="country standard" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag cz"></div>
                                                                </div><span class="country-name">Czech Republic (Česká republika)</span><span class="dial-code">+420</span></li>
                                                            <li class="country standard" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag dk"></div>
                                                                </div><span class="country-name">Denmark (Danmark)</span><span class="dial-code">+45</span></li>
                                                            <li class="country standard" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag dj"></div>
                                                                </div><span class="country-name">Djibouti</span><span class="dial-code">+253</span></li>
                                                            <li class="country standard" id="iti-item-dm" role="option" data-dial-code="1767" data-country-code="dm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag dm"></div>
                                                                </div><span class="country-name">Dominica</span><span class="dial-code">+1767</span></li>
                                                            <li class="country standard" id="iti-item-do" role="option" data-dial-code="1" data-country-code="do">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag do"></div>
                                                                </div><span class="country-name">Dominican Republic (República Dominicana)</span><span class="dial-code">+1</span></li>
                                                            <li class="country standard" id="iti-item-ec" role="option" data-dial-code="593" data-country-code="ec">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ec"></div>
                                                                </div><span class="country-name">Ecuador</span><span class="dial-code">+593</span></li>
                                                            <li class="country standard" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag eg"></div>
                                                                </div><span class="country-name">Egypt (&#8235;مصر&#8236;&lrm;)</span><span class="dial-code">+20</span></li>
                                                            <li class="country standard" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sv"></div>
                                                                </div><span class="country-name">El Salvador</span><span class="dial-code">+503</span></li>
                                                            <li class="country standard" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gq"></div>
                                                                </div><span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="dial-code">+240</span></li>
                                                            <li class="country standard" id="iti-item-er" role="option" data-dial-code="291" data-country-code="er">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag er"></div>
                                                                </div><span class="country-name">Eritrea</span><span class="dial-code">+291</span></li>
                                                            <li class="country standard" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ee"></div>
                                                                </div><span class="country-name">Estonia (Eesti)</span><span class="dial-code">+372</span></li>
                                                            <li class="country standard" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag et"></div>
                                                                </div><span class="country-name">Ethiopia</span><span class="dial-code">+251</span></li>
                                                            <li class="country standard" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag fk"></div>
                                                                </div><span class="country-name">Falkland Islands (Islas Malvinas)</span><span class="dial-code">+500</span></li>
                                                            <li class="country standard" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag fo"></div>
                                                                </div><span class="country-name">Faroe Islands (Føroyar)</span><span class="dial-code">+298</span></li>
                                                            <li class="country standard" id="iti-item-fj" role="option" data-dial-code="679" data-country-code="fj">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag fj"></div>
                                                                </div><span class="country-name">Fiji</span><span class="dial-code">+679</span></li>
                                                            <li class="country standard" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag fi"></div>
                                                                </div><span class="country-name">Finland (Suomi)</span><span class="dial-code">+358</span></li>
                                                            <li class="country standard" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag fr"></div>
                                                                </div><span class="country-name">France</span><span class="dial-code">+33</span></li>
                                                            <li class="country standard" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gf"></div>
                                                                </div><span class="country-name">French Guiana (Guyane française)</span><span class="dial-code">+594</span></li>
                                                            <li class="country standard" id="iti-item-pf" role="option" data-dial-code="689" data-country-code="pf">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pf"></div>
                                                                </div><span class="country-name">French Polynesia (Polynésie française)</span><span class="dial-code">+689</span></li>
                                                            <li class="country standard" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ga"></div>
                                                                </div><span class="country-name">Gabon</span><span class="dial-code">+241</span></li>
                                                            <li class="country standard" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gm"></div>
                                                                </div><span class="country-name">Gambia</span><span class="dial-code">+220</span></li>
                                                            <li class="country standard" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ge"></div>
                                                                </div><span class="country-name">Georgia (საქართველო)</span><span class="dial-code">+995</span></li>
                                                            <li class="country standard" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag de"></div>
                                                                </div><span class="country-name">Germany (Deutschland)</span><span class="dial-code">+49</span></li>
                                                            <li class="country standard" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gh"></div>
                                                                </div><span class="country-name">Ghana (Gaana)</span><span class="dial-code">+233</span></li>
                                                            <li class="country standard" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gi"></div>
                                                                </div><span class="country-name">Gibraltar</span><span class="dial-code">+350</span></li>
                                                            <li class="country standard" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gr"></div>
                                                                </div><span class="country-name">Greece (Ελλάδα)</span><span class="dial-code">+30</span></li>
                                                            <li class="country standard" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gl"></div>
                                                                </div><span class="country-name">Greenland (Kalaallit Nunaat)</span><span class="dial-code">+299</span></li>
                                                            <li class="country standard" id="iti-item-gd" role="option" data-dial-code="1473" data-country-code="gd">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gd"></div>
                                                                </div><span class="country-name">Grenada</span><span class="dial-code">+1473</span></li>
                                                            <li class="country standard" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gp"></div>
                                                                </div><span class="country-name">Guadeloupe</span><span class="dial-code">+590</span></li>
                                                            <li class="country standard" id="iti-item-gu" role="option" data-dial-code="1671" data-country-code="gu">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gu"></div>
                                                                </div><span class="country-name">Guam</span><span class="dial-code">+1671</span></li>
                                                            <li class="country standard" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gt"></div>
                                                                </div><span class="country-name">Guatemala</span><span class="dial-code">+502</span></li>
                                                            <li class="country standard" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gg"></div>
                                                                </div><span class="country-name">Guernsey</span><span class="dial-code">+44</span></li>
                                                            <li class="country standard" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gn"></div>
                                                                </div><span class="country-name">Guinea (Guinée)</span><span class="dial-code">+224</span></li>
                                                            <li class="country standard" id="iti-item-gw" role="option" data-dial-code="245" data-country-code="gw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gw"></div>
                                                                </div><span class="country-name">Guinea-Bissau (Guiné Bissau)</span><span class="dial-code">+245</span></li>
                                                            <li class="country standard" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gy"></div>
                                                                </div><span class="country-name">Guyana</span><span class="dial-code">+592</span></li>
                                                            <li class="country standard" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ht"></div>
                                                                </div><span class="country-name">Haiti</span><span class="dial-code">+509</span></li>
                                                            <li class="country standard" id="iti-item-hn" role="option" data-dial-code="504" data-country-code="hn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag hn"></div>
                                                                </div><span class="country-name">Honduras</span><span class="dial-code">+504</span></li>
                                                            <li class="country standard" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag hk"></div>
                                                                </div><span class="country-name">Hong Kong (香港)</span><span class="dial-code">+852</span></li>
                                                            <li class="country standard" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag hu"></div>
                                                                </div><span class="country-name">Hungary (Magyarország)</span><span class="dial-code">+36</span></li>
                                                            <li class="country standard" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag is"></div>
                                                                </div><span class="country-name">Iceland (Ísland)</span><span class="dial-code">+354</span></li>
                                                            <li class="country standard" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag in"></div>
                                                                </div><span class="country-name">India (भारत)</span><span class="dial-code">+91</span></li>
                                                            <li class="country standard" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag id"></div>
                                                                </div><span class="country-name">Indonesia</span><span class="dial-code">+62</span></li>
                                                            <li class="country standard" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ir"></div>
                                                                </div><span class="country-name">Iran (&#8235;ایران&#8236;&lrm;)</span><span class="dial-code">+98</span></li>
                                                            <li class="country standard" id="iti-item-iq" role="option" data-dial-code="964" data-country-code="iq">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag iq"></div>
                                                                </div><span class="country-name">Iraq (&#8235;العراق&#8236;&lrm;)</span><span class="dial-code">+964</span></li>
                                                            <li class="country standard" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ie"></div>
                                                                </div><span class="country-name">Ireland</span><span class="dial-code">+353</span></li>
                                                            <li class="country standard" id="iti-item-im" role="option" data-dial-code="44" data-country-code="im">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag im"></div>
                                                                </div><span class="country-name">Isle of Man</span><span class="dial-code">+44</span></li>
                                                            <li class="country standard" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag il"></div>
                                                                </div><span class="country-name">Israel (&#8235;ישראל&#8236;&lrm;)</span><span class="dial-code">+972</span></li>
                                                            <li class="country standard" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag it"></div>
                                                                </div><span class="country-name">Italy (Italia)</span><span class="dial-code">+39</span></li>
                                                            <li class="country standard" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag jm"></div>
                                                                </div><span class="country-name">Jamaica</span><span class="dial-code">+1</span></li>
                                                            <li class="country standard" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag jp"></div>
                                                                </div><span class="country-name">Japan (日本)</span><span class="dial-code">+81</span></li>
                                                            <li class="country standard" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag je"></div>
                                                                </div><span class="country-name">Jersey</span><span class="dial-code">+44</span></li>
                                                            <li class="country standard" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag jo"></div>
                                                                </div><span class="country-name">Jordan (&#8235;الأردن&#8236;&lrm;)</span><span class="dial-code">+962</span></li>
                                                            <li class="country standard" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag kz"></div>
                                                                </div><span class="country-name">Kazakhstan (Казахстан)</span><span class="dial-code">+7</span></li>
                                                            <li class="country standard" id="iti-item-ke" role="option" data-dial-code="254" data-country-code="ke">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ke"></div>
                                                                </div><span class="country-name">Kenya</span><span class="dial-code">+254</span></li>
                                                            <li class="country standard" id="iti-item-ki" role="option" data-dial-code="686" data-country-code="ki">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ki"></div>
                                                                </div><span class="country-name">Kiribati</span><span class="dial-code">+686</span></li>
                                                            <li class="country standard" id="iti-item-xk" role="option" data-dial-code="383" data-country-code="xk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag xk"></div>
                                                                </div><span class="country-name">Kosovo</span><span class="dial-code">+383</span></li>
                                                            <li class="country standard" id="iti-item-kw" role="option" data-dial-code="965" data-country-code="kw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag kw"></div>
                                                                </div><span class="country-name">Kuwait (&#8235;الكويت&#8236;&lrm;)</span><span class="dial-code">+965</span></li>
                                                            <li class="country standard" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag kg"></div>
                                                                </div><span class="country-name">Kyrgyzstan (Кыргызстан)</span><span class="dial-code">+996</span></li>
                                                            <li class="country standard" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag la"></div>
                                                                </div><span class="country-name">Laos (ລາວ)</span><span class="dial-code">+856</span></li>
                                                            <li class="country standard" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag lv"></div>
                                                                </div><span class="country-name">Latvia (Latvija)</span><span class="dial-code">+371</span></li>
                                                            <li class="country standard" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag lb"></div>
                                                                </div><span class="country-name">Lebanon (&#8235;لبنان&#8236;&lrm;)</span><span class="dial-code">+961</span></li>
                                                            <li class="country standard" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ls"></div>
                                                                </div><span class="country-name">Lesotho</span><span class="dial-code">+266</span></li>
                                                            <li class="country standard" id="iti-item-lr" role="option" data-dial-code="231" data-country-code="lr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag lr"></div>
                                                                </div><span class="country-name">Liberia</span><span class="dial-code">+231</span></li>
                                                            <li class="country standard" id="iti-item-ly" role="option" data-dial-code="218" data-country-code="ly">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ly"></div>
                                                                </div><span class="country-name">Libya (&#8235;ليبيا&#8236;&lrm;)</span><span class="dial-code">+218</span></li>
                                                            <li class="country standard" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag li"></div>
                                                                </div><span class="country-name">Liechtenstein</span><span class="dial-code">+423</span></li>
                                                            <li class="country standard" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag lt"></div>
                                                                </div><span class="country-name">Lithuania (Lietuva)</span><span class="dial-code">+370</span></li>
                                                            <li class="country standard" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag lu"></div>
                                                                </div><span class="country-name">Luxembourg</span><span class="dial-code">+352</span></li>
                                                            <li class="country standard" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mo"></div>
                                                                </div><span class="country-name">Macau (澳門)</span><span class="dial-code">+853</span></li>
                                                            <li class="country standard" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mk"></div>
                                                                </div><span class="country-name">Macedonia (FYROM) (Македонија)</span><span class="dial-code">+389</span></li>
                                                            <li class="country standard" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mg"></div>
                                                                </div><span class="country-name">Madagascar (Madagasikara)</span><span class="dial-code">+261</span></li>
                                                            <li class="country standard" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mw"></div>
                                                                </div><span class="country-name">Malawi</span><span class="dial-code">+265</span></li>
                                                            <li class="country standard" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag my"></div>
                                                                </div><span class="country-name">Malaysia</span><span class="dial-code">+60</span></li>
                                                            <li class="country standard" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mv"></div>
                                                                </div><span class="country-name">Maldives</span><span class="dial-code">+960</span></li>
                                                            <li class="country standard" id="iti-item-ml" role="option" data-dial-code="223" data-country-code="ml">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ml"></div>
                                                                </div><span class="country-name">Mali</span><span class="dial-code">+223</span></li>
                                                            <li class="country standard" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mt"></div>
                                                                </div><span class="country-name">Malta</span><span class="dial-code">+356</span></li>
                                                            <li class="country standard" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mh"></div>
                                                                </div><span class="country-name">Marshall Islands</span><span class="dial-code">+692</span></li>
                                                            <li class="country standard" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mq"></div>
                                                                </div><span class="country-name">Martinique</span><span class="dial-code">+596</span></li>
                                                            <li class="country standard" id="iti-item-mr" role="option" data-dial-code="222" data-country-code="mr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mr"></div>
                                                                </div><span class="country-name">Mauritania (&#8235;موريتانيا&#8236;&lrm;)</span><span class="dial-code">+222</span></li>
                                                            <li class="country standard" id="iti-item-mu" role="option" data-dial-code="230" data-country-code="mu">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mu"></div>
                                                                </div><span class="country-name">Mauritius (Moris)</span><span class="dial-code">+230</span></li>
                                                            <li class="country standard" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag yt"></div>
                                                                </div><span class="country-name">Mayotte</span><span class="dial-code">+262</span></li>
                                                            <li class="country standard" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mx"></div>
                                                                </div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li>
                                                            <li class="country standard" id="iti-item-fm" role="option" data-dial-code="691" data-country-code="fm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag fm"></div>
                                                                </div><span class="country-name">Micronesia</span><span class="dial-code">+691</span></li>
                                                            <li class="country standard" id="iti-item-md" role="option" data-dial-code="373" data-country-code="md">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag md"></div>
                                                                </div><span class="country-name">Moldova (Republica Moldova)</span><span class="dial-code">+373</span></li>
                                                            <li class="country standard" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mc"></div>
                                                                </div><span class="country-name">Monaco</span><span class="dial-code">+377</span></li>
                                                            <li class="country standard" id="iti-item-mn" role="option" data-dial-code="976" data-country-code="mn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mn"></div>
                                                                </div><span class="country-name">Mongolia (Монгол)</span><span class="dial-code">+976</span></li>
                                                            <li class="country standard" id="iti-item-me" role="option" data-dial-code="382" data-country-code="me">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag me"></div>
                                                                </div><span class="country-name">Montenegro (Crna Gora)</span><span class="dial-code">+382</span></li>
                                                            <li class="country standard" id="iti-item-ms" role="option" data-dial-code="1664" data-country-code="ms">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ms"></div>
                                                                </div><span class="country-name">Montserrat</span><span class="dial-code">+1664</span></li>
                                                            <li class="country standard" id="iti-item-ma" role="option" data-dial-code="212" data-country-code="ma">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ma"></div>
                                                                </div><span class="country-name">Morocco (&#8235;المغرب&#8236;&lrm;)</span><span class="dial-code">+212</span></li>
                                                            <li class="country standard" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mz"></div>
                                                                </div><span class="country-name">Mozambique (Moçambique)</span><span class="dial-code">+258</span></li>
                                                            <li class="country standard" id="iti-item-mm" role="option" data-dial-code="95" data-country-code="mm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mm"></div>
                                                                </div><span class="country-name">Myanmar (Burma) (မြန်မာ)</span><span class="dial-code">+95</span></li>
                                                            <li class="country standard" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag na"></div>
                                                                </div><span class="country-name">Namibia (Namibië)</span><span class="dial-code">+264</span></li>
                                                            <li class="country standard" id="iti-item-nr" role="option" data-dial-code="674" data-country-code="nr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag nr"></div>
                                                                </div><span class="country-name">Nauru</span><span class="dial-code">+674</span></li>
                                                            <li class="country standard" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag np"></div>
                                                                </div><span class="country-name">Nepal (नेपाल)</span><span class="dial-code">+977</span></li>
                                                            <li class="country standard" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag nl"></div>
                                                                </div><span class="country-name">Netherlands (Nederland)</span><span class="dial-code">+31</span></li>
                                                            <li class="country standard" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag nc"></div>
                                                                </div><span class="country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="dial-code">+687</span></li>
                                                            <li class="country standard" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag nz"></div>
                                                                </div><span class="country-name">New Zealand</span><span class="dial-code">+64</span></li>
                                                            <li class="country standard" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ni"></div>
                                                                </div><span class="country-name">Nicaragua</span><span class="dial-code">+505</span></li>
                                                            <li class="country standard" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ne"></div>
                                                                </div><span class="country-name">Niger (Nijar)</span><span class="dial-code">+227</span></li>
                                                            <li class="country standard" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ng"></div>
                                                                </div><span class="country-name">Nigeria</span><span class="dial-code">+234</span></li>
                                                            <li class="country standard" id="iti-item-nu" role="option" data-dial-code="683" data-country-code="nu">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag nu"></div>
                                                                </div><span class="country-name">Niue</span><span class="dial-code">+683</span></li>
                                                            <li class="country standard" id="iti-item-nf" role="option" data-dial-code="672" data-country-code="nf">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag nf"></div>
                                                                </div><span class="country-name">Norfolk Island</span><span class="dial-code">+672</span></li>
                                                            <li class="country standard" id="iti-item-kp" role="option" data-dial-code="850" data-country-code="kp">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag kp"></div>
                                                                </div><span class="country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="dial-code">+850</span></li>
                                                            <li class="country standard" id="iti-item-mp" role="option" data-dial-code="1670" data-country-code="mp">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mp"></div>
                                                                </div><span class="country-name">Northern Mariana Islands</span><span class="dial-code">+1670</span></li>
                                                            <li class="country standard" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag no"></div>
                                                                </div><span class="country-name">Norway (Norge)</span><span class="dial-code">+47</span></li>
                                                            <li class="country standard" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag om"></div>
                                                                </div><span class="country-name">Oman (&#8235;عُمان&#8236;&lrm;)</span><span class="dial-code">+968</span></li>
                                                            <li class="country standard" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pk"></div>
                                                                </div><span class="country-name">Pakistan (&#8235;پاکستان&#8236;&lrm;)</span><span class="dial-code">+92</span></li>
                                                            <li class="country standard" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pw"></div>
                                                                </div><span class="country-name">Palau</span><span class="dial-code">+680</span></li>
                                                            <li class="country standard" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ps"></div>
                                                                </div><span class="country-name">Palestine (&#8235;فلسطين&#8236;&lrm;)</span><span class="dial-code">+970</span></li>
                                                            <li class="country standard" id="iti-item-pa" role="option" data-dial-code="507" data-country-code="pa">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pa"></div>
                                                                </div><span class="country-name">Panama (Panamá)</span><span class="dial-code">+507</span></li>
                                                            <li class="country standard" id="iti-item-pg" role="option" data-dial-code="675" data-country-code="pg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pg"></div>
                                                                </div><span class="country-name">Papua New Guinea</span><span class="dial-code">+675</span></li>
                                                            <li class="country standard" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag py"></div>
                                                                </div><span class="country-name">Paraguay</span><span class="dial-code">+595</span></li>
                                                            <li class="country standard" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pe"></div>
                                                                </div><span class="country-name">Peru (Perú)</span><span class="dial-code">+51</span></li>
                                                            <li class="country standard" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ph"></div>
                                                                </div><span class="country-name">Philippines</span><span class="dial-code">+63</span></li>
                                                            <li class="country standard" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pl"></div>
                                                                </div><span class="country-name">Poland (Polska)</span><span class="dial-code">+48</span></li>
                                                            <li class="country standard" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pt"></div>
                                                                </div><span class="country-name">Portugal</span><span class="dial-code">+351</span></li>
                                                            <li class="country standard" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pr"></div>
                                                                </div><span class="country-name">Puerto Rico</span><span class="dial-code">+1</span></li>
                                                            <li class="country standard" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag qa"></div>
                                                                </div><span class="country-name">Qatar (&#8235;قطر&#8236;&lrm;)</span><span class="dial-code">+974</span></li>
                                                            <li class="country standard" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag re"></div>
                                                                </div><span class="country-name">Réunion (La Réunion)</span><span class="dial-code">+262</span></li>
                                                            <li class="country standard" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ro"></div>
                                                                </div><span class="country-name">Romania (România)</span><span class="dial-code">+40</span></li>
                                                            <li class="country standard" id="iti-item-ru" role="option" data-dial-code="7" data-country-code="ru">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ru"></div>
                                                                </div><span class="country-name">Russia (Россия)</span><span class="dial-code">+7</span></li>
                                                            <li class="country standard" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag rw"></div>
                                                                </div><span class="country-name">Rwanda</span><span class="dial-code">+250</span></li>
                                                            <li class="country standard" id="iti-item-bl" role="option" data-dial-code="590" data-country-code="bl">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag bl"></div>
                                                                </div><span class="country-name">Saint Barthélemy</span><span class="dial-code">+590</span></li>
                                                            <li class="country standard" id="iti-item-sh" role="option" data-dial-code="290" data-country-code="sh">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sh"></div>
                                                                </div><span class="country-name">Saint Helena</span><span class="dial-code">+290</span></li>
                                                            <li class="country standard" id="iti-item-kn" role="option" data-dial-code="1869" data-country-code="kn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag kn"></div>
                                                                </div><span class="country-name">Saint Kitts and Nevis</span><span class="dial-code">+1869</span></li>
                                                            <li class="country standard" id="iti-item-lc" role="option" data-dial-code="1758" data-country-code="lc">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag lc"></div>
                                                                </div><span class="country-name">Saint Lucia</span><span class="dial-code">+1758</span></li>
                                                            <li class="country standard" id="iti-item-mf" role="option" data-dial-code="590" data-country-code="mf">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag mf"></div>
                                                                </div><span class="country-name">Saint Martin (Saint-Martin (partie française))</span><span class="dial-code">+590</span></li>
                                                            <li class="country standard" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag pm"></div>
                                                                </div><span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="dial-code">+508</span></li>
                                                            <li class="country standard" id="iti-item-vc" role="option" data-dial-code="1784" data-country-code="vc">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag vc"></div>
                                                                </div><span class="country-name">Saint Vincent and the Grenadines</span><span class="dial-code">+1784</span></li>
                                                            <li class="country standard" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ws"></div>
                                                                </div><span class="country-name">Samoa</span><span class="dial-code">+685</span></li>
                                                            <li class="country standard" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sm"></div>
                                                                </div><span class="country-name">San Marino</span><span class="dial-code">+378</span></li>
                                                            <li class="country standard" id="iti-item-st" role="option" data-dial-code="239" data-country-code="st">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag st"></div>
                                                                </div><span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="dial-code">+239</span></li>
                                                            <li class="country standard" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sa"></div>
                                                                </div><span class="country-name">Saudi Arabia (&#8235;المملكة العربية السعودية&#8236;&lrm;)</span><span class="dial-code">+966</span></li>
                                                            <li class="country standard" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sn"></div>
                                                                </div><span class="country-name">Senegal (Sénégal)</span><span class="dial-code">+221</span></li>
                                                            <li class="country standard" id="iti-item-rs" role="option" data-dial-code="381" data-country-code="rs">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag rs"></div>
                                                                </div><span class="country-name">Serbia (Србија)</span><span class="dial-code">+381</span></li>
                                                            <li class="country standard" id="iti-item-sc" role="option" data-dial-code="248" data-country-code="sc">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sc"></div>
                                                                </div><span class="country-name">Seychelles</span><span class="dial-code">+248</span></li>
                                                            <li class="country standard" id="iti-item-sl" role="option" data-dial-code="232" data-country-code="sl">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sl"></div>
                                                                </div><span class="country-name">Sierra Leone</span><span class="dial-code">+232</span></li>
                                                            <li class="country standard" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sg"></div>
                                                                </div><span class="country-name">Singapore</span><span class="dial-code">+65</span></li>
                                                            <li class="country standard" id="iti-item-sx" role="option" data-dial-code="1721" data-country-code="sx">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sx"></div>
                                                                </div><span class="country-name">Sint Maarten</span><span class="dial-code">+1721</span></li>
                                                            <li class="country standard" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sk"></div>
                                                                </div><span class="country-name">Slovakia (Slovensko)</span><span class="dial-code">+421</span></li>
                                                            <li class="country standard" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag si"></div>
                                                                </div><span class="country-name">Slovenia (Slovenija)</span><span class="dial-code">+386</span></li>
                                                            <li class="country standard" id="iti-item-sb" role="option" data-dial-code="677" data-country-code="sb">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sb"></div>
                                                                </div><span class="country-name">Solomon Islands</span><span class="dial-code">+677</span></li>
                                                            <li class="country standard" id="iti-item-so" role="option" data-dial-code="252" data-country-code="so">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag so"></div>
                                                                </div><span class="country-name">Somalia (Soomaaliya)</span><span class="dial-code">+252</span></li>
                                                            <li class="country standard" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag za"></div>
                                                                </div><span class="country-name">South Africa</span><span class="dial-code">+27</span></li>
                                                            <li class="country standard" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag kr"></div>
                                                                </div><span class="country-name">South Korea (대한민국)</span><span class="dial-code">+82</span></li>
                                                            <li class="country standard" id="iti-item-ss" role="option" data-dial-code="211" data-country-code="ss">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ss"></div>
                                                                </div><span class="country-name">South Sudan (&#8235;جنوب السودان&#8236;&lrm;)</span><span class="dial-code">+211</span></li>
                                                            <li class="country standard" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag es"></div>
                                                                </div><span class="country-name">Spain (España)</span><span class="dial-code">+34</span></li>
                                                            <li class="country standard" id="iti-item-lk" role="option" data-dial-code="94" data-country-code="lk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag lk"></div>
                                                                </div><span class="country-name">Sri Lanka (ශ්&zwj;රී ලංකාව)</span><span class="dial-code">+94</span></li>
                                                            <li class="country standard" id="iti-item-sd" role="option" data-dial-code="249" data-country-code="sd">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sd"></div>
                                                                </div><span class="country-name">Sudan (&#8235;السودان&#8236;&lrm;)</span><span class="dial-code">+249</span></li>
                                                            <li class="country standard" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sr"></div>
                                                                </div><span class="country-name">Suriname</span><span class="dial-code">+597</span></li>
                                                            <li class="country standard" id="iti-item-sj" role="option" data-dial-code="47" data-country-code="sj">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sj"></div>
                                                                </div><span class="country-name">Svalbard and Jan Mayen</span><span class="dial-code">+47</span></li>
                                                            <li class="country standard" id="iti-item-sz" role="option" data-dial-code="268" data-country-code="sz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sz"></div>
                                                                </div><span class="country-name">Swaziland</span><span class="dial-code">+268</span></li>
                                                            <li class="country standard" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag se"></div>
                                                                </div><span class="country-name">Sweden (Sverige)</span><span class="dial-code">+46</span></li>
                                                            <li class="country standard" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ch"></div>
                                                                </div><span class="country-name">Switzerland (Schweiz)</span><span class="dial-code">+41</span></li>
                                                            <li class="country standard" id="iti-item-sy" role="option" data-dial-code="963" data-country-code="sy">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag sy"></div>
                                                                </div><span class="country-name">Syria (&#8235;سوريا&#8236;&lrm;)</span><span class="dial-code">+963</span></li>
                                                            <li class="country standard" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tw"></div>
                                                                </div><span class="country-name">Taiwan (台灣)</span><span class="dial-code">+886</span></li>
                                                            <li class="country standard" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tj"></div>
                                                                </div><span class="country-name">Tajikistan</span><span class="dial-code">+992</span></li>
                                                            <li class="country standard" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tz"></div>
                                                                </div><span class="country-name">Tanzania</span><span class="dial-code">+255</span></li>
                                                            <li class="country standard" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag th"></div>
                                                                </div><span class="country-name">Thailand (ไทย)</span><span class="dial-code">+66</span></li>
                                                            <li class="country standard" id="iti-item-tl" role="option" data-dial-code="670" data-country-code="tl">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tl"></div>
                                                                </div><span class="country-name">Timor-Leste</span><span class="dial-code">+670</span></li>
                                                            <li class="country standard" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tg"></div>
                                                                </div><span class="country-name">Togo</span><span class="dial-code">+228</span></li>
                                                            <li class="country standard" id="iti-item-tk" role="option" data-dial-code="690" data-country-code="tk">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tk"></div>
                                                                </div><span class="country-name">Tokelau</span><span class="dial-code">+690</span></li>
                                                            <li class="country standard" id="iti-item-to" role="option" data-dial-code="676" data-country-code="to">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag to"></div>
                                                                </div><span class="country-name">Tonga</span><span class="dial-code">+676</span></li>
                                                            <li class="country standard" id="iti-item-tt" role="option" data-dial-code="1868" data-country-code="tt">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tt"></div>
                                                                </div><span class="country-name">Trinidad and Tobago</span><span class="dial-code">+1868</span></li>
                                                            <li class="country standard" id="iti-item-tn" role="option" data-dial-code="216" data-country-code="tn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tn"></div>
                                                                </div><span class="country-name">Tunisia (&#8235;تونس&#8236;&lrm;)</span><span class="dial-code">+216</span></li>
                                                            <li class="country standard" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tr"></div>
                                                                </div><span class="country-name">Turkey (Türkiye)</span><span class="dial-code">+90</span></li>
                                                            <li class="country standard" id="iti-item-tm" role="option" data-dial-code="993" data-country-code="tm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tm"></div>
                                                                </div><span class="country-name">Turkmenistan</span><span class="dial-code">+993</span></li>
                                                            <li class="country standard" id="iti-item-tc" role="option" data-dial-code="1649" data-country-code="tc">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tc"></div>
                                                                </div><span class="country-name">Turks and Caicos Islands</span><span class="dial-code">+1649</span></li>
                                                            <li class="country standard" id="iti-item-tv" role="option" data-dial-code="688" data-country-code="tv">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag tv"></div>
                                                                </div><span class="country-name">Tuvalu</span><span class="dial-code">+688</span></li>
                                                            <li class="country standard" id="iti-item-vi" role="option" data-dial-code="1340" data-country-code="vi">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag vi"></div>
                                                                </div><span class="country-name">U.S. Virgin Islands</span><span class="dial-code">+1340</span></li>
                                                            <li class="country standard" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ug"></div>
                                                                </div><span class="country-name">Uganda</span><span class="dial-code">+256</span></li>
                                                            <li class="country standard" id="iti-item-ua" role="option" data-dial-code="380" data-country-code="ua">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ua"></div>
                                                                </div><span class="country-name">Ukraine (Україна)</span><span class="dial-code">+380</span></li>
                                                            <li class="country standard" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ae"></div>
                                                                </div><span class="country-name">United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)</span><span class="dial-code">+971</span></li>
                                                            <li class="country standard" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag gb"></div>
                                                                </div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li>
                                                            <li class="country standard" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag us"></div>
                                                                </div><span class="country-name">United States</span><span class="dial-code">+1</span></li>
                                                            <li class="country standard" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag uy"></div>
                                                                </div><span class="country-name">Uruguay</span><span class="dial-code">+598</span></li>
                                                            <li class="country standard" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag uz"></div>
                                                                </div><span class="country-name">Uzbekistan (Oʻzbekiston)</span><span class="dial-code">+998</span></li>
                                                            <li class="country standard" id="iti-item-vu" role="option" data-dial-code="678" data-country-code="vu">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag vu"></div>
                                                                </div><span class="country-name">Vanuatu</span><span class="dial-code">+678</span></li>
                                                            <li class="country standard" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag va"></div>
                                                                </div><span class="country-name">Vatican City (Città del Vaticano)</span><span class="dial-code">+39</span></li>
                                                            <li class="country standard" id="iti-item-ve" role="option" data-dial-code="58" data-country-code="ve">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ve"></div>
                                                                </div><span class="country-name">Venezuela</span><span class="dial-code">+58</span></li>
                                                            <li class="country standard" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag vn"></div>
                                                                </div><span class="country-name">Vietnam (Việt Nam)</span><span class="dial-code">+84</span></li>
                                                            <li class="country standard" id="iti-item-wf" role="option" data-dial-code="681" data-country-code="wf">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag wf"></div>
                                                                </div><span class="country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span class="dial-code">+681</span></li>
                                                            <li class="country standard" id="iti-item-eh" role="option" data-dial-code="212" data-country-code="eh">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag eh"></div>
                                                                </div><span class="country-name">Western Sahara (&#8235;الصحراء الغربية&#8236;&lrm;)</span><span class="dial-code">+212</span></li>
                                                            <li class="country standard" id="iti-item-ye" role="option" data-dial-code="967" data-country-code="ye">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ye"></div>
                                                                </div><span class="country-name">Yemen (&#8235;اليمن&#8236;&lrm;)</span><span class="dial-code">+967</span></li>
                                                            <li class="country standard" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag zm"></div>
                                                                </div><span class="country-name">Zambia</span><span class="dial-code">+260</span></li>
                                                            <li class="country standard" id="iti-item-zw" role="option" data-dial-code="263" data-country-code="zw">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag zw"></div>
                                                                </div><span class="country-name">Zimbabwe</span><span class="dial-code">+263</span></li>
                                                            <li class="country standard" id="iti-item-ax" role="option" data-dial-code="358" data-country-code="ax">
                                                                <div class="flag-box">
                                                                    <div class="iti-flag ax"></div>
                                                                </div><span class="country-name">Åland Islands</span><span class="dial-code">+358</span></li>
                                                        </ul>
                                                    </div>
                                                    <input type="tel" style="text-align:left !important" class="uk-input" data-score="4" dir="ltr" id="BI_Mob" name="BI.Mob" value="" autocomplete="off">
                                                </div>
                                                <input type="hidden" tabindex="-1" id="BI_CC" name="BI.CC" value="">
                                                <span class="error-message uk-form-small uk-form-danger">شماره موبایل معتبر وارد کنید</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m">
                                        <div class="input-field">
                                            <label class="uk-form-label active" for="BI_Phn">تلفن</label>
                                            <div class="uk-form-controls">
                                                <input type="tel" class="uk-input phoneValidation" data-score="4" style="min-width:60px" dir="ltr" id="BI_Phn" name="BI.Phn" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-1-4@s uk-width-1-4@m">
                                        <div class="input-field">
                                            <label class="uk-form-label active" for="BI_WS">وب سایت</label>
                                            <div class="uk-form-controls">
                                                <input data-score="1" class="uk-input en-font" dir="ltr" placeholder="www." data-linkurl="لینک معتبر وارد کنید" type="text" id="BI_WS" name="BI.WS" value=""><span class="error-message uk-form-danger">لینک معتبر وارد کنید</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-3 uk-width-1-6@s uk-width-1-5@m uk-first-column">
                                        <div class="input-field uk-margin">
                                            <label class="uk-form-label" for="BI_CoT">کشور</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" data-country="true" data-toggle-province-on="BI_PId" data-toggle-province-off="BI_PrT" data-toggle-city-on="BI_CiId" data-toggle-city-off="BI_CiT" id="BI_CoId" name="BI.CoId">
                                                    <option value="" disabled="" selected=""></option>

                                                    <option value="2" selected="">ایران</option>
                                                    <option value="153">آلبانی</option>
                                                    <option value="154">الجزایر</option>
                                                    <option value="155">آندورا</option>
                                                    <option value="156">آنگولا</option>
                                                    <option value="157">آرزانتین</option>
                                                    <option value="158">ارمنستان</option>
                                                    <option value="159">استرالیا</option>
                                                    <option value="160">اتریش</option>
                                                    <option value="161">آذربایجان</option>
                                                    <option value="162">باهاما</option>
                                                    <option value="163">بحرین</option>
                                                    <option value="164">بنگلادش</option>
                                                    <option value="165">باربادوس</option>
                                                    <option value="166">بلاروس</option>
                                                    <option value="167">بلژیک</option>
                                                    <option value="168">بلیز</option>
                                                    <option value="169">بنین</option>
                                                    <option value="170">بوتان</option>
                                                    <option value="171">بولیوی</option>
                                                    <option value="172">بوسنی و هرزگوین</option>
                                                    <option value="173">بوتسوانا</option>
                                                    <option value="174">برزیل</option>
                                                    <option value="175">بونئی</option>
                                                    <option value="176">بلغارستان</option>
                                                    <option value="177">بورکینیا فاسو</option>
                                                    <option value="178">بروندی</option>
                                                    <option value="179">کامبوج</option>
                                                    <option value="180">کامرون</option>
                                                    <option value="181">کانادا</option>
                                                    <option value="182">چاد</option>
                                                    <option value="183">شیلی</option>
                                                    <option value="184">چین</option>
                                                    <option value="185">کلمبیا</option>
                                                    <option value="186">کنگو</option>
                                                    <option value="187">کاستاریکا</option>
                                                    <option value="188">کرواسی</option>
                                                    <option value="189">کوبا</option>
                                                    <option value="190">قبرس</option>
                                                    <option value="191">جمهوری چک</option>
                                                    <option value="192">دانمارک</option>
                                                    <option value="193">جیبوتی</option>
                                                    <option value="194">دومینیکا</option>
                                                    <option value="195">جمهوری دومنیکن</option>
                                                    <option value="196">اکوادور</option>
                                                    <option value="197">مصر</option>
                                                    <option value="198">السالوادور</option>
                                                    <option value="199">انگلیسی</option>
                                                    <option value="200">ایتره</option>
                                                    <option value="201">استونی</option>
                                                    <option value="202">اتیوپی</option>
                                                    <option value="203">فیجی</option>
                                                    <option value="204">فنلاند</option>
                                                    <option value="205">فرانسه</option>
                                                    <option value="206">گابن</option>
                                                    <option value="207">گامبیا</option>
                                                    <option value="208">گرجستان</option>
                                                    <option value="209">آلمان</option>
                                                    <option value="210">غنا</option>
                                                    <option value="211">یونان</option>
                                                    <option value="212">گرانادا</option>
                                                    <option value="213">گواتمالا</option>
                                                    <option value="214">گینه</option>
                                                    <option value="215">گویان</option>
                                                    <option value="216">هایتی</option>
                                                    <option value="217">هندوراس</option>
                                                    <option value="218">مجارستان</option>
                                                    <option value="219">ایسلند</option>
                                                    <option value="220">هند</option>
                                                    <option value="221">اندونزی</option>
                                                    <option value="222">عراق</option>
                                                    <option value="223">جمهوری ایرلند</option>
                                                    <option value="224">ایتالیا</option>
                                                    <option value="225">جامائیکا</option>
                                                    <option value="226">ژاپن</option>
                                                    <option value="227">اردن</option>
                                                    <option value="228">قزاقستان</option>
                                                    <option value="229">کنیا</option>
                                                    <option value="230">کویت</option>
                                                    <option value="231">لائوس</option>
                                                    <option value="232">لیتوانی</option>
                                                    <option value="233">لبنان</option>
                                                    <option value="234">لیبریا</option>
                                                    <option value="235">لیبی</option>
                                                    <option value="236">لیتوانی</option>
                                                    <option value="237">مقدونیه</option>
                                                    <option value="238">ماداگاسکار</option>
                                                    <option value="239">مالاوی</option>
                                                    <option value="240">مالزی</option>
                                                    <option value="241">مالدیو</option>
                                                    <option value="242">مالی</option>
                                                    <option value="243">مالت</option>
                                                    <option value="244">موریتانی</option>
                                                    <option value="245">موریس</option>
                                                    <option value="246">مکزیک</option>
                                                    <option value="247">موناکو</option>
                                                    <option value="248">مغولستان</option>
                                                    <option value="249">مونته نگرو</option>
                                                    <option value="250">مراکش</option>
                                                    <option value="251">موزامبیک</option>
                                                    <option value="252">میانمار (نام دیگر این کشور برمه است)</option>
                                                    <option value="253">نامیبیا</option>
                                                    <option value="254">نپال</option>
                                                    <option value="255">هلند</option>
                                                    <option value="256">نیوزیلند</option>
                                                    <option value="257">نیکاراگوئه</option>
                                                    <option value="258">نیجر</option>
                                                    <option value="259">نیجریه</option>
                                                    <option value="260">کره شمالی</option>
                                                    <option value="261">نروژ</option>
                                                    <option value="262">عمان</option>
                                                    <option value="263">پاکستان</option>
                                                    <option value="264">فلستین</option>
                                                    <option value="265">پاناما</option>
                                                    <option value="266">گینه نو</option>
                                                    <option value="267">پاراگوئه</option>
                                                    <option value="268">پرو</option>
                                                    <option value="269">فیلیپین</option>
                                                    <option value="270">لهستان</option>
                                                    <option value="271">پرتغال</option>
                                                    <option value="272">قطر</option>
                                                    <option value="273">رومانی</option>
                                                    <option value="274">روسیه</option>
                                                    <option value="275">رواندا</option>
                                                    <option value="276">عربستان سعودی</option>
                                                    <option value="277">سنگال</option>
                                                    <option value="278">صربستان</option>
                                                    <option value="279">سیشل</option>
                                                    <option value="280">سیرالئون</option>
                                                    <option value="281">سنگاپور</option>
                                                    <option value="282">اسلواکی</option>
                                                    <option value="283">اسلوونی</option>
                                                    <option value="284">سومالی</option>
                                                    <option value="285">آفریقای جنوبی</option>
                                                    <option value="286">کره جنوبی</option>
                                                    <option value="287">اسپانیا</option>
                                                    <option value="288">سریلانکا</option>
                                                    <option value="289">سودان</option>
                                                    <option value="290">سورینام</option>
                                                    <option value="291">سوازیلند</option>
                                                    <option value="292">سوئد</option>
                                                    <option value="293">سوئیس</option>
                                                    <option value="294">سوریه</option>
                                                    <option value="295">تایوان</option>
                                                    <option value="296">تاجیکستان</option>
                                                    <option value="297">تانزانیا</option>
                                                    <option value="298">تایلند</option>
                                                    <option value="299">توگو</option>
                                                    <option value="300">ترینیداد و توباگو</option>
                                                    <option value="301">تونس</option>
                                                    <option value="302">ترکیه</option>
                                                    <option value="303">ترکمنستان</option>
                                                    <option value="304">توالو</option>
                                                    <option value="305">اوگاندا</option>
                                                    <option value="306">اکراین</option>
                                                    <option value="307">امارات متحده عربی</option>
                                                    <option value="308">ایالات متحده آمریکا</option>
                                                    <option value="309">اروگوئه</option>
                                                    <option value="310">ازبکستان</option>
                                                    <option value="311">وانوواتو</option>
                                                    <option value="312">واتیکان</option>
                                                    <option value="313">ونزوئلا</option>
                                                    <option value="314">ویتنام</option>
                                                    <option value="315">یمن</option>
                                                    <option value="316">زامبیا</option>
                                                    <option value="317">زیمباوه</option>
                                                    <option value="318">افغانستان</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3 uk-width-1-6@s uk-width-1-5@m">
                                        <div class="input-field uk-margin">
                                            <label class="uk-form-label" for="BI_PrT">استان</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" data-child-val="" data-child-dropdown="BI_CiId" data-score="1" id="BI_PId" name="state" onChange="iranwebsv(this.value);">
                                                    <option value="" disabled="" selected=""></option>

                                                    <option value="1">تهران</option>
                                                    <option value="2">گیلان</option>
                                                    <option value="3">آذربایجان شرقی</option>
                                                    <option value="4">خوزستان</option>
                                                    <option value="5">فارس</option>
                                                    <option value="6">اصفهان</option>
                                                    <option value="7">خراسان رضوی</option>
                                                    <option value="8">قزوین</option>
                                                    <option value="9">سمنان</option>
                                                    <option value="10">قم</option>
                                                    <option value="11">مرکزی</option>
                                                    <option value="12">زنجان</option>
                                                    <option value="13">مازندران</option>
                                                    <option value="14">گلستان</option>
                                                    <option value="15">اردبیل</option>
                                                    <option value="16">آذربایجان غربی</option>
                                                    <option value="17">همدان</option>
                                                    <option value="18">کردستان</option>
                                                    <option value="19">کرمانشاه</option>
                                                    <option value="20">لرستان</option>
                                                    <option value="21">بوشهر</option>
                                                    <option value="22">کرمان</option>
                                                    <option value="23">هرمزگان</option>
                                                    <option value="24">چهارمحال و بختیاری</option>
                                                    <option value="25">یزد</option>
                                                    <option value="26">سیستان و بلوچستان</option>
                                                    <option value="27">ایلام</option>
                                                    <option value="28">کهگلویه و بویراحمد</option>
                                                    <option value="29">خراسان شمالی</option>
                                                    <option value="30">خراسان جنوبی</option>
                                                    <option value="31">البرز</option>

                                                </select>
                                                <input class="uk-input" style="display:none" type="text" id="BI_PrT" name="BI.PrT" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3 uk-width-1-6@s uk-width-1-5@m">
                                        <div class="input-field uk-margin">
                                            <label class="uk-form-label" for="BI_CiT">شهر</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" data-score="1" name="city" id="city">
                                                    <option value="" disabled="" selected=""></option>
                                                </select>
                                                <input class="uk-input" style="display:none" type="text" id="BI_CiT" name="BI.CiT" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-1-2@s uk-width-2-5@m">
                                        <div class="input-field uk-margin">
                                            <label class="uk-form-label" for="BI_Adrs">آدرس</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" data-score="2" type="text" id="BI_Adrs" name="BI.Adrs" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2>توصیف خلاصه </h2>
                            <div class="cv-box builder-box box-sh back-section" data-fieldset="1">
                                <div class="uk-grid-small uk-grid uk-grid-stack" uk-grid="" >
                                    <div class="uk-width-1-1 uk-first-column">
                                        <div class="input-field uk-margin">
                                            <label class="uk-form-label abstract-label">توصیف خلاصه </label>
                                            <div class="input-field uk-form-controls">
                                                <textarea data-score="5" rows="3" class="uk-textarea" placeholder="برای مثال : 
گرافیست با استعداد و علاقه مند به پیشرفت با داشتن مهارت های پیشرفته طراحی، ...." data-messagetype="warning" data-minlength="10" data-minmessage="کمتر از 10 حرف مجاز نمی باشد" data-maxlength="300" data-maxmessage="بیشتر از 300 حرف مجاز نمی باشد" id="BI_Ab" name="BI.Ab"></textarea><span class="error-message uk-text-warning maxmessage">بیشتر از 300 حرف مجاز نمی باشد</span><span class="error-message uk-text-warning minmessage">کمتر از 10 حرف مجاز نمی باشد</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2>شبکه اجتماعی</h2>
                            <div data-fieldset="2" id="socialNet">
                                <div class="uk-grid-small uk-grid " id="uk-grid-social" uk-grid="">

                                    <div class="builder-card uk-width-1-1 uk-width-1-2@s uk-first-column">
                                        <div class="cv-box builder-box box-sh back-section">
                                            <div style="z-index:400">
                                                <input type="hidden" name="SNs.Index" value="0">
                                                <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="SNs_0__Order" name="SNs[0].Order">
                                                <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="SNs_0__IC" name="SNs[0].IC" value="">
                                                <input type="hidden" data-section="UserSocialNet" data-val="true" data-val-required="The Id field is required." id="SNs_0__Id" name="SNs[0].Id" value="">

                                                <div class="card-slide">
                                                    <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                    <span class="card-slide_down uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                                </div>

                                                <div class="uk-grid-small uk-grid" uk-grid="">
                                                    <div class="uk-width-1-3 uk-margin-remove-top uk-first-column">
                                                        <div class="input-field uk-margin">
                                                            <label class="uk-form-label">شبکه اجتماعی</label>
                                                            <div class="uk-form-controls">
                                                                <select class="uk-select" id="SNs_0__SN" name="social[1][name]">
                                                                    <option value="" disabled=""></option>
                                                                    <option value="LinkedIn">لینکداین</option>
                                                                    <option value="Twitter">توییتر</option>
                                                                    <option value="Facebook">فیسبوک</option>
                                                                    <option value="Instagram">اینستاگرام</option>
                                                                    <option value="Telegram">تلگرام</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-2-3 uk-margin-remove-top">
                                                        <div class="input-field uk-margin">
                                                            <label class="uk-form-label" for="SNs_0__Url">آی دی مرتبط</label>
                                                            <div class="uk-form-controls">
                                                                <input dir="ltr" class="uk-input" type="text" id="SNs_0__Url" name="social[1][url]" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="remove-new-record uk-text-danger" type="button" data-section="UserSocialNet" data-id="0">
                                                        <img src="{{ asset('kit/close-icon-red.svg') }}">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="builder-card uk-width-1-1 uk-width-1-2@s">
                                        <div class="cv-box builder-box box-sh back-section">
                                            <div style="z-index:399">
                                                <input type="hidden" name="SNs.Index" value="1">
                                                <input type="hidden" value="2" data-val="true" data-val-required="The Order field is required." id="SNs_1__Order" name="SNs[1].Order">
                                                <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="SNs_1__IC" name="SNs[1].IC" value="">
                                                <input type="hidden" data-section="UserSocialNet" data-val="true" data-val-required="The Id field is required." id="SNs_1__Id" name="SNs[1].Id" value="">

                                                <div class="card-slide">
                                                    <span class="card-slide_up uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                    <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                                </div>

                                                <div class="uk-grid-small uk-grid" uk-grid="">
                                                    <div class="uk-width-1-3 uk-margin-remove-top uk-first-column">
                                                        <div class="input-field uk-margin">
                                                            <label class="uk-form-label">شبکه اجتماعی</label>
                                                            <div class="uk-form-controls">
                                                                <select class="uk-select" id="SNs_1__SN" name="social[2][name]">
                                                                    <option value="" disabled=""></option>
                                                                    <option value="LinkedIn">لینکداین</option>
                                                                    <option value="Twitter">توییتر</option>
                                                                    <option value="Facebook">فیسبوک</option>
                                                                    <option value="Instagram">اینستاگرام</option>
                                                                    <option value="Telegram">تلگرام</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-2-3 uk-margin-remove-top">
                                                        <div class="input-field uk-margin">
                                                            <label class="uk-form-label" for="SNs_1__Url">آی دی مرتبط</label>
                                                            <div class="uk-form-controls">
                                                                <input dir="ltr" class="uk-input" type="text" id="SNs_1__Url" name="social[2][url]" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="remove-new-record uk-text-danger" type="button" data-section="UserSocialNet" data-id="0">
                                                        <img src="{{ asset('kit/close-icon-red.svg') }}">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="add-new-title box-sh back-section">شبکه اجتماعی دیگری را اضافه کنید</span>
                                <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-social-box" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                            </div>
                        </div>
                    </li>
                    <li data-step="2">
                        <h2 class="uk-margin-small-bottom">سوابق تحصیلی</h2>
                        <p class="uk-text-muted uk-text-small uk-margin-remove-top">برای نوشتن سوابق تحصیلی در رزومه، همیشه از بالاترین مدرک خود شروع به نوشتن کنید.</p>
                        <div class="uk-grid-small uk-grid" uk-grid="" id="uk-edu">

                            <div class="builder-card uk-width-1-1">
                                <div class="cv-box builder-box box-sh back-section">
                                    <div style="z-index:100">
                                        <input type="hidden" name="EdIs.Index" value="0">
                                        <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="EdIs_0__Order" name="EdIs[0].Order">
                                        <input type="hidden" data-section="EducationInfo" data-val="true" data-val-required="The Id field is required." id="EdIs_0__Id" name="EdIs[0].Id" value="">
                                        <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="EdIs_0__IC" name="EdIs[0].IC" value="">

                                        <div class="card-slide">
                                            <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                            <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                        </div>

                                        <div class="builder-card-content">
                                            <div class="uk-grid uk-grid-small" uk-grid="">
                                                <div class="uk-width-1-3 uk-width-1-6@s">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__EL">مقطع</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="2" class="uk-select EL" data-val="true" data-val-required="The مقطع field is required." id="EdIs_0__EL" name="edu[0][section]">
                                                                <option value="" selected=""></option>
                                                                <option value="UnderGraduate">زیر دیپلم</option>
                                                                <option value="Diploma">دیپلم</option>
                                                                <option value="Associate">کاردانی</option>
                                                                <option value="Bachelor">کارشناسی</option>
                                                                <option value="Master">کارشناسی ارشد</option>
                                                                <option value="Doctorate">دکتری</option>
                                                                <option value="Postdoctoral">فوق دکتری</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-2-3 uk-width-1-6@s">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__FoS">رشته تحصیلی</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-suggestion="true" data-url="/Builder/FieldOfStudy" data-score="2" type="text" id="EdIs_0__FoS" name="edu[0][major]" value="" autocomplete="off">
                                                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-2-3 uk-width-1-6@s">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__Bch">گرایش/تخصص</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="0" type="text" id="EdIs_0__Bch" name="edu[0][Orientation]" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-3 uk-width-1-6@s UpperGraduage hide-select">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__EITy">نوع موسسه</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="0" class="uk-select" id="EdIs_0__UpGIT" name="edu[0][type]">
                                                                <option value="" selected=""></option>
                                                                <option value="Dolati">دولتی</option>
                                                                <option value="Azad">آزاد</option>
                                                                <option value="Payamenoor">پیام نور</option>
                                                                <option value="ElmiKarbordi">علمی کاربردی</option>
                                                                <option value="GheireEntefayi">غیرانتفاعی</option>
                                                                <option value="Other">سایر</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-3 uk-width-1-6@s UnderGraduate ">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__EITy">نوع موسسه</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="0" class="uk-select" id="EdIs_0__UnGIT" name="edu[0][type-university]">
                                                                <option value="" selected=""></option>
                                                                <option value="Dolati">دولتی</option>
                                                                <option value="Tizhooshan">تیزهوشان</option>
                                                                <option value="GheireEntefayi">غیرانتفاعی</option>
                                                                <option value="NemooneDowlati">نمونه دولتی</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-2-3 uk-width-1-6@s">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__EITi">عنوان موسسه آموزشی</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" type="text" id="EdIs_0__EITi" name="edu[0][Institute]" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-3 uk-width-1-6@s">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__G">معدل</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="0" type="text" id="EdIs_0__G" name="edu[0][average]" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-3 uk-width-1-5@s uk-width-1-6@m">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__CoT">کشور</label>
                                                        <div class="uk-form-controls">
                                                            <select class="uk-select" data-country="true" data-toggle-province-on="EdIs_0__PId" data-toggle-province-off="EdIs_0__PrT" data-toggle-city-on="EdIs_0__CiId" data-toggle-city-off="EdIs_0__CiT" id="EdIs_0__CoId" name="edu[0][country]">
                                                                <option value="" selected=""></option>

                                                                <option value="2" selected="">ایران</option>
                                                                <option value="153">آلبانی</option>
                                                                <option value="154">الجزایر</option>
                                                                <option value="155">آندورا</option>
                                                                <option value="156">آنگولا</option>
                                                                <option value="157">آرزانتین</option>
                                                                <option value="158">ارمنستان</option>
                                                                <option value="159">استرالیا</option>
                                                                <option value="160">اتریش</option>
                                                                <option value="161">آذربایجان</option>
                                                                <option value="162">باهاما</option>
                                                                <option value="163">بحرین</option>
                                                                <option value="164">بنگلادش</option>
                                                                <option value="165">باربادوس</option>
                                                                <option value="166">بلاروس</option>
                                                                <option value="167">بلژیک</option>
                                                                <option value="168">بلیز</option>
                                                                <option value="169">بنین</option>
                                                                <option value="170">بوتان</option>
                                                                <option value="171">بولیوی</option>
                                                                <option value="172">بوسنی و هرزگوین</option>
                                                                <option value="173">بوتسوانا</option>
                                                                <option value="174">برزیل</option>
                                                                <option value="175">بونئی</option>
                                                                <option value="176">بلغارستان</option>
                                                                <option value="177">بورکینیا فاسو</option>
                                                                <option value="178">بروندی</option>
                                                                <option value="179">کامبوج</option>
                                                                <option value="180">کامرون</option>
                                                                <option value="181">کانادا</option>
                                                                <option value="182">چاد</option>
                                                                <option value="183">شیلی</option>
                                                                <option value="184">چین</option>
                                                                <option value="185">کلمبیا</option>
                                                                <option value="186">کنگو</option>
                                                                <option value="187">کاستاریکا</option>
                                                                <option value="188">کرواسی</option>
                                                                <option value="189">کوبا</option>
                                                                <option value="190">قبرس</option>
                                                                <option value="191">جمهوری چک</option>
                                                                <option value="192">دانمارک</option>
                                                                <option value="193">جیبوتی</option>
                                                                <option value="194">دومینیکا</option>
                                                                <option value="195">جمهوری دومنیکن</option>
                                                                <option value="196">اکوادور</option>
                                                                <option value="197">مصر</option>
                                                                <option value="198">السالوادور</option>
                                                                <option value="199">انگلیسی</option>
                                                                <option value="200">ایتره</option>
                                                                <option value="201">استونی</option>
                                                                <option value="202">اتیوپی</option>
                                                                <option value="203">فیجی</option>
                                                                <option value="204">فنلاند</option>
                                                                <option value="205">فرانسه</option>
                                                                <option value="206">گابن</option>
                                                                <option value="207">گامبیا</option>
                                                                <option value="208">گرجستان</option>
                                                                <option value="209">آلمان</option>
                                                                <option value="210">غنا</option>
                                                                <option value="211">یونان</option>
                                                                <option value="212">گرانادا</option>
                                                                <option value="213">گواتمالا</option>
                                                                <option value="214">گینه</option>
                                                                <option value="215">گویان</option>
                                                                <option value="216">هایتی</option>
                                                                <option value="217">هندوراس</option>
                                                                <option value="218">مجارستان</option>
                                                                <option value="219">ایسلند</option>
                                                                <option value="220">هند</option>
                                                                <option value="221">اندونزی</option>
                                                                <option value="222">عراق</option>
                                                                <option value="223">جمهوری ایرلند</option>
                                                                <option value="224">ایتالیا</option>
                                                                <option value="225">جامائیکا</option>
                                                                <option value="226">ژاپن</option>
                                                                <option value="227">اردن</option>
                                                                <option value="228">قزاقستان</option>
                                                                <option value="229">کنیا</option>
                                                                <option value="230">کویت</option>
                                                                <option value="231">لائوس</option>
                                                                <option value="232">لیتوانی</option>
                                                                <option value="233">لبنان</option>
                                                                <option value="234">لیبریا</option>
                                                                <option value="235">لیبی</option>
                                                                <option value="236">لیتوانی</option>
                                                                <option value="237">مقدونیه</option>
                                                                <option value="238">ماداگاسکار</option>
                                                                <option value="239">مالاوی</option>
                                                                <option value="240">مالزی</option>
                                                                <option value="241">مالدیو</option>
                                                                <option value="242">مالی</option>
                                                                <option value="243">مالت</option>
                                                                <option value="244">موریتانی</option>
                                                                <option value="245">موریس</option>
                                                                <option value="246">مکزیک</option>
                                                                <option value="247">موناکو</option>
                                                                <option value="248">مغولستان</option>
                                                                <option value="249">مونته نگرو</option>
                                                                <option value="250">مراکش</option>
                                                                <option value="251">موزامبیک</option>
                                                                <option value="252">میانمار (نام دیگر این کشور برمه است)</option>
                                                                <option value="253">نامیبیا</option>
                                                                <option value="254">نپال</option>
                                                                <option value="255">هلند</option>
                                                                <option value="256">نیوزیلند</option>
                                                                <option value="257">نیکاراگوئه</option>
                                                                <option value="258">نیجر</option>
                                                                <option value="259">نیجریه</option>
                                                                <option value="260">کره شمالی</option>
                                                                <option value="261">نروژ</option>
                                                                <option value="262">عمان</option>
                                                                <option value="263">پاکستان</option>
                                                                <option value="264">فلستین</option>
                                                                <option value="265">پاناما</option>
                                                                <option value="266">گینه نو</option>
                                                                <option value="267">پاراگوئه</option>
                                                                <option value="268">پرو</option>
                                                                <option value="269">فیلیپین</option>
                                                                <option value="270">لهستان</option>
                                                                <option value="271">پرتغال</option>
                                                                <option value="272">قطر</option>
                                                                <option value="273">رومانی</option>
                                                                <option value="274">روسیه</option>
                                                                <option value="275">رواندا</option>
                                                                <option value="276">عربستان سعودی</option>
                                                                <option value="277">سنگال</option>
                                                                <option value="278">صربستان</option>
                                                                <option value="279">سیشل</option>
                                                                <option value="280">سیرالئون</option>
                                                                <option value="281">سنگاپور</option>
                                                                <option value="282">اسلواکی</option>
                                                                <option value="283">اسلوونی</option>
                                                                <option value="284">سومالی</option>
                                                                <option value="285">آفریقای جنوبی</option>
                                                                <option value="286">کره جنوبی</option>
                                                                <option value="287">اسپانیا</option>
                                                                <option value="288">سریلانکا</option>
                                                                <option value="289">سودان</option>
                                                                <option value="290">سورینام</option>
                                                                <option value="291">سوازیلند</option>
                                                                <option value="292">سوئد</option>
                                                                <option value="293">سوئیس</option>
                                                                <option value="294">سوریه</option>
                                                                <option value="295">تایوان</option>
                                                                <option value="296">تاجیکستان</option>
                                                                <option value="297">تانزانیا</option>
                                                                <option value="298">تایلند</option>
                                                                <option value="299">توگو</option>
                                                                <option value="300">ترینیداد و توباگو</option>
                                                                <option value="301">تونس</option>
                                                                <option value="302">ترکیه</option>
                                                                <option value="303">ترکمنستان</option>
                                                                <option value="304">توالو</option>
                                                                <option value="305">اوگاندا</option>
                                                                <option value="306">اکراین</option>
                                                                <option value="307">امارات متحده عربی</option>
                                                                <option value="308">ایالات متحده آمریکا</option>
                                                                <option value="309">اروگوئه</option>
                                                                <option value="310">ازبکستان</option>
                                                                <option value="311">وانوواتو</option>
                                                                <option value="312">واتیکان</option>
                                                                <option value="313">ونزوئلا</option>
                                                                <option value="314">ویتنام</option>
                                                                <option value="315">یمن</option>
                                                                <option value="316">زامبیا</option>
                                                                <option value="317">زیمباوه</option>
                                                                <option value="318">افغانستان</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-3 uk-width-1-5@s uk-width-1-6@m">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__PrT">استان</label>
                                                        <div class="uk-form-controls">
                                                <select class="uk-select" data-child-val="" data-child-dropdown="BI_CiId" data-score="1" id="BI_PId" name="edu[0][State]" onChange="iranwebsv2(this.value);">
                                                    <option value="" disabled="" selected=""></option>

                                                    <option value="1">تهران</option>
                                                    <option value="2">گیلان</option>
                                                    <option value="3">آذربایجان شرقی</option>
                                                    <option value="4">خوزستان</option>
                                                    <option value="5">فارس</option>
                                                    <option value="6">اصفهان</option>
                                                    <option value="7">خراسان رضوی</option>
                                                    <option value="8">قزوین</option>
                                                    <option value="9">سمنان</option>
                                                    <option value="10">قم</option>
                                                    <option value="11">مرکزی</option>
                                                    <option value="12">زنجان</option>
                                                    <option value="13">مازندران</option>
                                                    <option value="14">گلستان</option>
                                                    <option value="15">اردبیل</option>
                                                    <option value="16">آذربایجان غربی</option>
                                                    <option value="17">همدان</option>
                                                    <option value="18">کردستان</option>
                                                    <option value="19">کرمانشاه</option>
                                                    <option value="20">لرستان</option>
                                                    <option value="21">بوشهر</option>
                                                    <option value="22">کرمان</option>
                                                    <option value="23">هرمزگان</option>
                                                    <option value="24">چهارمحال و بختیاری</option>
                                                    <option value="25">یزد</option>
                                                    <option value="26">سیستان و بلوچستان</option>
                                                    <option value="27">ایلام</option>
                                                    <option value="28">کهگلویه و بویراحمد</option>
                                                    <option value="29">خراسان شمالی</option>
                                                    <option value="30">خراسان جنوبی</option>
                                                    <option value="31">البرز</option>

                                                </select>
                                                <input class="uk-input" style="display:none" type="text" id="BI_PrT" name="BI.PrT" value="">
                                            </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-3 uk-width-1-5@s uk-width-1-6@m">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__CiT">شهر</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" data-score="1" name="edu[0][city]" id="city2">
                                                    <option value="" disabled="" selected=""></option>
                                                </select>
                                                <input class="uk-input" style="display:none" type="text" id="BI_CiT" name="BI.CiT" value="">
                                            </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-2 uk-width-1-5@s uk-width-1-6@m">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__EY"> ورود</label>
                                                        <div class="uk-form-controls">
                                                            <input data-min="1299" data-max="1399" data-score="2" class="uk-input input-year" placeholder="سال" type="number" data-val="true" data-val-required="The  ورود field is required." id="EdIs_0__EY" name="edu[0][entry]" value="">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-2 uk-width-1-5@s uk-width-1-6@m">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label" for="EdIs_0__GY">فراغت از تحصیل</label>
                                                        <div class="uk-form-controls">
                                                            <input data-min="1299" data-max="1399" data-score="0" class="uk-input input-year present-select" placeholder="سال" type="number" id="EdIs_0__GY" name="edu[0][leisure]" value="">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-1 uk-width-1-6@m precheck-container">
                                                    <label class="uk-form-label">
                                                        <input class="uk-checkbox present-checkbox" type="checkbox" name="edu[0][now]"> در حال تحصیل
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <button class="remove-new-record uk-text-danger" type="button" data-section="EducationInfo" data-id="0">
                                            <img src="{{ asset('kit/close-icon-red.svg') }}">
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <span class="add-new-title">سابقه تحصیلی دیگری را اضافه کنید</span>
                        <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-edu-box" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                    </li>
                    <li data-step="3">
                        <h2 class="uk-margin-small-bottom">سوابق شغلی</h2>
                        <p class="uk-text-muted uk-text-small uk-margin-remove-top">برای نوشتن سوابق شغلی ترتیب زمانی معکوس را رعایت کنید و از آخرین شغلی که داشتید یا دارید، شروع به نوشتن کنید.</p>
                        <div class="uk-grid-small uk-grid" id="uk-grid-exp" uk-grid="">

                            <div class="builder-card uk-width-1-1">
                                <div class="cv-box builder-box box-sh back-section">
                                    <div style="z-index:100">
                                        <input type="hidden" name="ExIs.Index" value="0">
                                        <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="ExIs_0__Order" name="ExIs[0].Order">
                                        <input type="hidden" data-section="ExperienceInfo" data-val="true" data-val-required="The Id field is required." id="ExIs_0__Id" name="ExIs[0].Id" value="">
                                        <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="ExIs_0__IC" name="ExIs[0].IC" value="">

                                        <div class="card-slide">
                                            <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                            <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                        </div>

                                        <div class="builder-card-content">
                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                <div class="uk-width-1-1 uk-width-1-4@s">
                                                    <div class="input-field uk-margin">
                                                        <label class="uk-form-label mandatory-star" for="ExIs_0__JT">سِمت شغلی مربوطه</label>
                                                        <div class="uk-form-controls">
                                                            <input data-mandatory="فیلد الزامی می&zwnj;باشد." class="uk-input" data-score="2" type="text" id="ExIs_0__JT" name="exp[0][post]" value=""><span class="error-message uk-form-danger">فیلد الزامی می&zwnj;باشد.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-1 uk-width-1-4@s">
                                                    <label class="uk-form-label">گروه شغلی</label>
                                                    <div class="uk-form-controls">
                                                        <select data-score="2" class="uk-select" id="ExIs_0__JCId" name="exp[0][job-group]">
                                                            <option value="" selected=""></option>

                                                            <option value="1">سخت افزار و شبکه</option>
                                                            <option value="2">طراحی / گرافیست</option>
                                                            <option value="3">وب،&zwnj; برنامه&zwnj;نویسی و نرم&zwnj;افزار</option>
                                                            <option value="4">فروش و بازاریابی</option>
                                                            <option value="5">تولید و مدیریت محتوا</option>
                                                            <option value="6">مسئول دفتر، اجرائی و اداری</option>
                                                            <option value="7">پزشکی/داروسازی</option>
                                                            <option value="8">پشتیبانی و امور مشتریان</option>
                                                            <option value="9">IT / DevOps / Server</option>
                                                            <option value="10">مالی و حسابداری</option>
                                                            <option value="11">مهندسی برق و الکترونیک</option>
                                                            <option value="12">آموزش</option>
                                                            <option value="13">منابع انسانی و کارگزینی</option>
                                                            <option value="14">مهندسی صنایع و مدیریت صنعتی</option>
                                                            <option value="15">خرید و بازرگانی</option>
                                                            <option value="16">مدیر محصول</option>
                                                            <option value="17">ترجمه</option>
                                                            <option value="18">مهندسی عمران و معماری</option>
                                                            <option value="19">تحقیق و توسعه</option>
                                                            <option value="20">تحقیق بازار و تحلیل اقتصادی</option>
                                                            <option value="21">گردشگری</option>
                                                            <option value="22">کارشناس حقوقی،&zwnj; وکالت</option>
                                                            <option value="23">پزشکی،&zwnj; پرستاری و دارویی</option>
                                                            <option value="24">مهندسی مکانیک و هوافضا</option>
                                                            <option value="25">روابط عمومی</option>
                                                            <option value="26">خبر&zwnj;نگاری</option>
                                                            <option value="27">انبارداری</option>
                                                            <option value="28">هتلداری</option>
                                                            <option value="29">حمل و نقل</option>
                                                            <option value="30">صنایع غذایی</option>
                                                            <option value="31">مهندسی شیمی و نفت</option>
                                                            <option value="32">CEO</option>
                                                            <option value="33">HSE</option>
                                                            <option value="34">مدیریت بیمه</option>
                                                            <option value="35">مهندسی کشاورزی</option>
                                                            <option value="36">مهندسی معدن و متالورژی</option>
                                                            <option value="37">مهندسی صنایع</option>
                                                            <option value="38">بازاریابی و فروش</option>
                                                            <option value="39">سایر</option>
                                                            <option value="40">بازاریابی دیجیتال/تولید محتوا</option>
                                                            <option value="41">مسئول دفتر/ امور اداری</option>
                                                            <option value="42">عملیات و تولید/تعمیر و نگهداری</option>
                                                            <option value="43">هنر</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-2 uk-width-1-4@s">
                                                    <label class="uk-form-label" for="ExIs_0__ErT">مرکز اشتغال</label>
                                                    <div class="uk-form-controls">
                                                        <select data-score="2" class="uk-select" data-val="true" data-val-required="The مرکز اشتغال field is required." id="ExIs_0__ErT" name="exp[0][center]">
                                                            <option value="" selected=""></option>
                                                            <option value="Company">شرکت</option>
                                                            <option value="Institude">موسسه</option>
                                                            <option value="Organization">سازمان/نهاد</option>
                                                            <option value="SelfEmployment">خود اشتغال</option>
                                                            <option value="Freelancer">فریلنسر</option>
                                                            <option value="Hospital">بیمارستان</option>
                                                            <option value="MedicalCenter">مرکز درمانی</option>
                                                            <option value="Clinic">کلینیک</option>
                                                            <option value="Factory">کارخانه</option>
                                                            <option value="Store">فروشگاه</option>
                                                            <option value="Foundation">بنیاد</option>
                                                            <option value="University">دانشگاه</option>
                                                            <option value="School">مدرسه</option>
                                                            <option value="EducationalInstitutions">آموزشگاه</option>
                                                            <option value="Center">مرکز</option>
                                                            <option value="WorkshopTitle">کارگاه</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="uk-width-1-2 uk-width-1-4@s">
                                                    <label class="uk-form-label" for="ExIs_0__CN">عنوان مرکز</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" data-score="2" type="text" id="ExIs_0__CN" name="exp[0][title-center]" value="">
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@s">
                                                    <label class="uk-form-label" for="ExIs_0__EtT">نحوه همکاری</label>
                                                    <div class="uk-form-controls">
                                                        <select data-score="2" class="uk-select" data-val="true" data-val-required="The نحوه همکاری field is required." id="ExIs_0__EtT" name="exp[0][how-cooperate]">
                                                            <option value="" selected=""></option>
                                                            <option value="FullTime">تمام وقت</option>
                                                            <option value="PartTime">پاره وقت</option>
                                                            <option value="ProjectBased">پروژه ای</option>
                                                            <option value="HourlyEmployee">ساعتی</option>
                                                            <option value="Remote">دورکاری</option>
                                                            <option value="Internship">کارآموزی</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2 uk-width-1-5@s">
                                                    <label class="uk-form-label" for="ExIs_0__JL">سطح ارشدیت</label>
                                                    <div class="uk-form-controls">
                                                        <select data-score="2" class="uk-select" data-val="true" data-val-required="The سطح ارشدیت field is required." id="ExIs_0__JL" name="exp[0][senior-level]">
                                                            <option value="" selected=""></option>
                                                            <option value="EntryLevel">تازه کار</option>
                                                            <option value="Intermediate">متوسط</option>
                                                            <option value="FirstLevelManagement">مدیر عمومی</option>
                                                            <option value="Senior">ارشد</option>
                                                            <option value="CEO">مدیر ارشد</option>
                                                            <option value="NoLevel">مهم نیست</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-3 uk-width-1-5@s">
                                                    <label class="uk-form-label" for="ExIs_0__CoT">کشور</label>
                                                    <div class="uk-form-controls">
                                                        <select class="uk-select" data-country="true" data-toggle-province-on="ExIs_0__PId" data-toggle-province-off="ExIs_0__PrT" data-toggle-city-on="ExIs_0__CiId" data-toggle-city-off="ExIs_0__CiT" id="ExIs_0__CoId" name="exp[0][country]">
                                                            <option value="" selected=""> </option>

                                                            <option value="2" selected="">ایران</option>
                                                            <option value="153">آلبانی</option>
                                                            <option value="154">الجزایر</option>
                                                            <option value="155">آندورا</option>
                                                            <option value="156">آنگولا</option>
                                                            <option value="157">آرزانتین</option>
                                                            <option value="158">ارمنستان</option>
                                                            <option value="159">استرالیا</option>
                                                            <option value="160">اتریش</option>
                                                            <option value="161">آذربایجان</option>
                                                            <option value="162">باهاما</option>
                                                            <option value="163">بحرین</option>
                                                            <option value="164">بنگلادش</option>
                                                            <option value="165">باربادوس</option>
                                                            <option value="166">بلاروس</option>
                                                            <option value="167">بلژیک</option>
                                                            <option value="168">بلیز</option>
                                                            <option value="169">بنین</option>
                                                            <option value="170">بوتان</option>
                                                            <option value="171">بولیوی</option>
                                                            <option value="172">بوسنی و هرزگوین</option>
                                                            <option value="173">بوتسوانا</option>
                                                            <option value="174">برزیل</option>
                                                            <option value="175">بونئی</option>
                                                            <option value="176">بلغارستان</option>
                                                            <option value="177">بورکینیا فاسو</option>
                                                            <option value="178">بروندی</option>
                                                            <option value="179">کامبوج</option>
                                                            <option value="180">کامرون</option>
                                                            <option value="181">کانادا</option>
                                                            <option value="182">چاد</option>
                                                            <option value="183">شیلی</option>
                                                            <option value="184">چین</option>
                                                            <option value="185">کلمبیا</option>
                                                            <option value="186">کنگو</option>
                                                            <option value="187">کاستاریکا</option>
                                                            <option value="188">کرواسی</option>
                                                            <option value="189">کوبا</option>
                                                            <option value="190">قبرس</option>
                                                            <option value="191">جمهوری چک</option>
                                                            <option value="192">دانمارک</option>
                                                            <option value="193">جیبوتی</option>
                                                            <option value="194">دومینیکا</option>
                                                            <option value="195">جمهوری دومنیکن</option>
                                                            <option value="196">اکوادور</option>
                                                            <option value="197">مصر</option>
                                                            <option value="198">السالوادور</option>
                                                            <option value="199">انگلیسی</option>
                                                            <option value="200">ایتره</option>
                                                            <option value="201">استونی</option>
                                                            <option value="202">اتیوپی</option>
                                                            <option value="203">فیجی</option>
                                                            <option value="204">فنلاند</option>
                                                            <option value="205">فرانسه</option>
                                                            <option value="206">گابن</option>
                                                            <option value="207">گامبیا</option>
                                                            <option value="208">گرجستان</option>
                                                            <option value="209">آلمان</option>
                                                            <option value="210">غنا</option>
                                                            <option value="211">یونان</option>
                                                            <option value="212">گرانادا</option>
                                                            <option value="213">گواتمالا</option>
                                                            <option value="214">گینه</option>
                                                            <option value="215">گویان</option>
                                                            <option value="216">هایتی</option>
                                                            <option value="217">هندوراس</option>
                                                            <option value="218">مجارستان</option>
                                                            <option value="219">ایسلند</option>
                                                            <option value="220">هند</option>
                                                            <option value="221">اندونزی</option>
                                                            <option value="222">عراق</option>
                                                            <option value="223">جمهوری ایرلند</option>
                                                            <option value="224">ایتالیا</option>
                                                            <option value="225">جامائیکا</option>
                                                            <option value="226">ژاپن</option>
                                                            <option value="227">اردن</option>
                                                            <option value="228">قزاقستان</option>
                                                            <option value="229">کنیا</option>
                                                            <option value="230">کویت</option>
                                                            <option value="231">لائوس</option>
                                                            <option value="232">لیتوانی</option>
                                                            <option value="233">لبنان</option>
                                                            <option value="234">لیبریا</option>
                                                            <option value="235">لیبی</option>
                                                            <option value="236">لیتوانی</option>
                                                            <option value="237">مقدونیه</option>
                                                            <option value="238">ماداگاسکار</option>
                                                            <option value="239">مالاوی</option>
                                                            <option value="240">مالزی</option>
                                                            <option value="241">مالدیو</option>
                                                            <option value="242">مالی</option>
                                                            <option value="243">مالت</option>
                                                            <option value="244">موریتانی</option>
                                                            <option value="245">موریس</option>
                                                            <option value="246">مکزیک</option>
                                                            <option value="247">موناکو</option>
                                                            <option value="248">مغولستان</option>
                                                            <option value="249">مونته نگرو</option>
                                                            <option value="250">مراکش</option>
                                                            <option value="251">موزامبیک</option>
                                                            <option value="252">میانمار (نام دیگر این کشور برمه است)</option>
                                                            <option value="253">نامیبیا</option>
                                                            <option value="254">نپال</option>
                                                            <option value="255">هلند</option>
                                                            <option value="256">نیوزیلند</option>
                                                            <option value="257">نیکاراگوئه</option>
                                                            <option value="258">نیجر</option>
                                                            <option value="259">نیجریه</option>
                                                            <option value="260">کره شمالی</option>
                                                            <option value="261">نروژ</option>
                                                            <option value="262">عمان</option>
                                                            <option value="263">پاکستان</option>
                                                            <option value="264">فلستین</option>
                                                            <option value="265">پاناما</option>
                                                            <option value="266">گینه نو</option>
                                                            <option value="267">پاراگوئه</option>
                                                            <option value="268">پرو</option>
                                                            <option value="269">فیلیپین</option>
                                                            <option value="270">لهستان</option>
                                                            <option value="271">پرتغال</option>
                                                            <option value="272">قطر</option>
                                                            <option value="273">رومانی</option>
                                                            <option value="274">روسیه</option>
                                                            <option value="275">رواندا</option>
                                                            <option value="276">عربستان سعودی</option>
                                                            <option value="277">سنگال</option>
                                                            <option value="278">صربستان</option>
                                                            <option value="279">سیشل</option>
                                                            <option value="280">سیرالئون</option>
                                                            <option value="281">سنگاپور</option>
                                                            <option value="282">اسلواکی</option>
                                                            <option value="283">اسلوونی</option>
                                                            <option value="284">سومالی</option>
                                                            <option value="285">آفریقای جنوبی</option>
                                                            <option value="286">کره جنوبی</option>
                                                            <option value="287">اسپانیا</option>
                                                            <option value="288">سریلانکا</option>
                                                            <option value="289">سودان</option>
                                                            <option value="290">سورینام</option>
                                                            <option value="291">سوازیلند</option>
                                                            <option value="292">سوئد</option>
                                                            <option value="293">سوئیس</option>
                                                            <option value="294">سوریه</option>
                                                            <option value="295">تایوان</option>
                                                            <option value="296">تاجیکستان</option>
                                                            <option value="297">تانزانیا</option>
                                                            <option value="298">تایلند</option>
                                                            <option value="299">توگو</option>
                                                            <option value="300">ترینیداد و توباگو</option>
                                                            <option value="301">تونس</option>
                                                            <option value="302">ترکیه</option>
                                                            <option value="303">ترکمنستان</option>
                                                            <option value="304">توالو</option>
                                                            <option value="305">اوگاندا</option>
                                                            <option value="306">اکراین</option>
                                                            <option value="307">امارات متحده عربی</option>
                                                            <option value="308">ایالات متحده آمریکا</option>
                                                            <option value="309">اروگوئه</option>
                                                            <option value="310">ازبکستان</option>
                                                            <option value="311">وانوواتو</option>
                                                            <option value="312">واتیکان</option>
                                                            <option value="313">ونزوئلا</option>
                                                            <option value="314">ویتنام</option>
                                                            <option value="315">یمن</option>
                                                            <option value="316">زامبیا</option>
                                                            <option value="317">زیمباوه</option>
                                                            <option value="318">افغانستان</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-3 uk-width-1-5@s">
                                                    <label class="uk-form-label" for="ExIs_0__PrT">استان</label>
                                                    <div class="uk-form-controls">
                                                <select class="uk-select"  data-score="1" name="exp[0][state]" onChange="iranwebsv3(this.value);">
                                                    <option value="" disabled="" selected=""></option>

                                                    <option value="1">تهران</option>
                                                    <option value="2">گیلان</option>
                                                    <option value="3">آذربایجان شرقی</option>
                                                    <option value="4">خوزستان</option>
                                                    <option value="5">فارس</option>
                                                    <option value="6">اصفهان</option>
                                                    <option value="7">خراسان رضوی</option>
                                                    <option value="8">قزوین</option>
                                                    <option value="9">سمنان</option>
                                                    <option value="10">قم</option>
                                                    <option value="11">مرکزی</option>
                                                    <option value="12">زنجان</option>
                                                    <option value="13">مازندران</option>
                                                    <option value="14">گلستان</option>
                                                    <option value="15">اردبیل</option>
                                                    <option value="16">آذربایجان غربی</option>
                                                    <option value="17">همدان</option>
                                                    <option value="18">کردستان</option>
                                                    <option value="19">کرمانشاه</option>
                                                    <option value="20">لرستان</option>
                                                    <option value="21">بوشهر</option>
                                                    <option value="22">کرمان</option>
                                                    <option value="23">هرمزگان</option>
                                                    <option value="24">چهارمحال و بختیاری</option>
                                                    <option value="25">یزد</option>
                                                    <option value="26">سیستان و بلوچستان</option>
                                                    <option value="27">ایلام</option>
                                                    <option value="28">کهگلویه و بویراحمد</option>
                                                    <option value="29">خراسان شمالی</option>
                                                    <option value="30">خراسان جنوبی</option>
                                                    <option value="31">البرز</option>

                                                </select>
                                                <input class="uk-input" style="display:none" type="text" id="BI_PrT" name="BI.PrT" value="">
                                            </div>
                                                </div>
                                                <div class="uk-width-1-3 uk-width-1-5@s">
                                                    <label class="uk-form-label" for="ExIs_0__CiT">شهر</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" data-score="1" name="exp[0][city]" id="city3">
                                                    <option value="" disabled="" selected=""></option>
                                                </select>
                                                <input class="uk-input" style="display:none" type="text" id="BI_CiT" name="BI.CiT" value="">
                                            </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-1-4@s">
                                                    <label class="uk-form-label" for="ExIs_0__SY">شروع</label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-grid-small uk-grid" uk-grid="">
                                                            <div class="uk-width-1-2">
                                                                <select class="uk-select" data-val="true" data-val-required="The ماه شروع field is required." id="ExIs_0__SM" name="exp[0][month-start]">
                                                                    <option value="" selected="">ماه</option>
                                                                    <option value="1">فروردین</option>
                                                                    <option value="2">اردیبهشت</option>
                                                                    <option value="3">خرداد</option>
                                                                    <option value="4">تیر</option>
                                                                    <option value="5">مرداد</option>
                                                                    <option value="6">شهریور</option>
                                                                    <option value="7">مهر</option>
                                                                    <option value="8">آبان</option>
                                                                    <option value="9">آذر</option>
                                                                    <option value="10">دی</option>
                                                                    <option value="11">بهمن</option>
                                                                    <option value="12">اسفند</option>
                                                                </select>
                                                            </div>
                                                            <div class="uk-width-1-2">
                                                                <input data-min="1299" data-max="1399" data-score="2" class="uk-input input-year" placeholder="سال" type="number" data-val="true" data-val-required="The شروع field is required." id="ExIs_0__SY" name="exp[0][year-start]" value="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-1-4@s">
                                                    <label class="uk-form-label" for="ExIs_0__FY">اتمام</label>
                                                    <div class="uk-form-controls">
                                                        <div class="uk-grid-small uk-grid" uk-grid="">
                                                            <div class="uk-width-1-2">
                                                                <select class="uk-select present-select" id="ExIs_0__FM" name="exp[0][month-end]">
                                                                    <option value="" selected="">ماه</option>
                                                                    <option value="1">فروردین</option>
                                                                    <option value="2">اردیبهشت</option>
                                                                    <option value="3">خرداد</option>
                                                                    <option value="4">تیر</option>
                                                                    <option value="5">مرداد</option>
                                                                    <option value="6">شهریور</option>
                                                                    <option value="7">مهر</option>
                                                                    <option value="8">آبان</option>
                                                                    <option value="9">آذر</option>
                                                                    <option value="10">دی</option>
                                                                    <option value="11">بهمن</option>
                                                                    <option value="12">اسفند</option>
                                                                </select>
                                                            </div>
                                                            <div class="uk-width-1-2">
                                                                <input data-min="1299" data-max="1399" data-score="2" class="uk-input input-year present-select" placeholder="سال" type="number" id="ExIs_0__FY" name="exp[0][year-end]" value="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-1-2@s precheck-container">
                                                    <label class="uk-form-label">
                                                        <input class="uk-checkbox present-checkbox" name="exp[0][busy]" type="checkbox"> مشغول فعالیت در این مجموعه هستم</label>
                                                </div>
                                                <div class="uk-width-1-1">
                                                    <label class="uk-form-label" for="ExIs_0__Dsc">وظایف / دستاوردها (اختیاری)</label>
                                                    <ul class="label-help">
                                                        <li>در این بخش می توانید خیلی خلاصه و کوتاه، وظایف و دستاوردهای خود را به تفکیک و جداگانه لیست کنید.</li>
                                                        <li>برای تفکیک از دکمه Enter استفاده کنید</li>
                                                    </ul>
                                                    <div class="experience-desc">
                                                        <textarea hidden="" id="ExIs_0__Dsc" name="ExIs[0].Dsc"></textarea>
                                                        <div class="textarea-list">
                                                            <span><i uk-icon="close" onclick="RemoveExpDesc(this)" class="uk-icon"></i><textarea class="uk-textarea"></textarea></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="remove-new-record uk-text-danger" type="button" data-section="ExperienceInfo" data-id="0">
                                            <img src="{{ asset('kit/close-icon-red.svg') }}">
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <span class="add-new-title">سابقه شغلی دیگری را اضافه کنید</span>
                        <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-exp-section" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                        </a>
                    </li>
                    <li data-step="4">
                        <h2>زبان</h2>
                        <div id="langsTab" data-fieldset="1">
                            <div class="uk-grid-small uk-grid" uk-grid="" id="add-lang-box">

                                <div class="builder-card uk-width-1-1">
                                    <div class="cv-box builder-box box-sh back-section">
                                        <div style="z-index:500">
                                            <input type="hidden" name="LIs.Index" value="0">
                                            <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="LIs_0__Order" name="LIs[0].Order">
                                            <input type="hidden" data-section="LanguageInfo" data-val="true" data-val-required="The Id field is required." id="LIs_0__Id" name="LIs[0].Id" value="">
                                            <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="LIs_0__IC" name="LIs[0].IC" value="">

                                            <div class="card-slide">
                                                <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                            </div>

                                            <div class="builder-card-content">
                                                <div class="uk-grid-small uk-grid" uk-grid="">
                                                    <div class="uk-width-1-1 uk-width-1-5@s">
                                                        <label class="uk-form-label" for="LIs_0__LnN">نام زبان</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="2" class="uk-select" data-val="true" data-val-required="The نام زبان field is required." id="LIs_0__LnN" name="lang[0][name]">
                                                                <option value="" selected=""></option>
                                                                <option value="English">انگلیسی</option>
                                                                <option value="Arabic">عربی</option>
                                                                <option value="German">آلمانی</option>
                                                                <option value="France">فرانسوی</option>
                                                                <option value="Spanish">اسپانیایی</option>
                                                                <option value="Russian">روسی</option>
                                                                <option value="Italy">ایتالیایی</option>
                                                                <option value="Turkish">ترکی استانبولی</option>
                                                                <option value="Persian">فارسی</option>
                                                                <option value="China">چینی</option>
                                                                <option value="Hebrew">عبری</option>
                                                                <option value="Azerbaijani">ترکی آذربایجانی</option>
                                                                <option value="Armenian">ارمنی</option>
                                                                <option value="Japanese">ژاپنی</option>
                                                                <option value="Georgian">گرجی</option>
                                                                <option value="Kurdish">کُردی</option>
                                                                <option value="Portuguese">پرتغالی</option>
                                                                <option value="Bengali">بنگالی</option>
                                                                <option value="Lahnda">لندا</option>
                                                                <option value="Javanese">جاوه&zwnj;ای</option>
                                                                <option value="Korean">کره ای</option>
                                                                <option value="Vietnamese">ویتنامی</option>
                                                                <option value="Urdu">اردو</option>
                                                                <option value="Hindi">هندی</option>
                                                                <option value="Egyptian">مصری</option>
                                                                <option value="Telugu">تلوگو</option>
                                                                <option value="Gujarati">گجراتی</option>
                                                                <option value="Tamil">تامیلی</option>
                                                                <option value="Marathi">مراتی</option>
                                                                <option value="Hungarian">مجاری</option>
                                                                <option value="Swedish">سوئدی</option>
                                                                <option value="Pashto">پشتو</option>
                                                                <option value="Greek">یونانی</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2 uk-width-1-5@s">
                                                        <label class="uk-form-label" for="LIs_0__RL">مهارت خواندن</label>
                                                        <div class="uk-form-controls">
                                                            <select class="uk-select uk-select-score" data-val="true" data-val-required="The مهارت خواندن field is required." id="LIs_0__RL" name="lang[0][reading]">
                                                                <option value="" selected=""></option>

                                                                <option value="1">
                                                                    ★☆☆☆☆ </option>
                                                                <option value="2">
                                                                    ★★☆☆☆ </option>
                                                                <option value="3">
                                                                    ★★★☆☆ </option>
                                                                <option value="4">
                                                                    ★★★★☆ </option>
                                                                <option value="5">
                                                                    ★★★★★ </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2 uk-width-1-5@s">
                                                        <label class="uk-form-label" for="LIs_0__WL">مهارت نوشتن</label>
                                                        <div class="uk-form-controls">
                                                            <select class="uk-select uk-select-score" data-val="true" data-val-required="The مهارت نوشتن field is required." id="LIs_0__WL" name="lang[0][writing]">
                                                                <option value="" selected=""></option>

                                                                <option value="1">
                                                                    ★☆☆☆☆ </option>
                                                                <option value="2">
                                                                    ★★☆☆☆ </option>
                                                                <option value="3">
                                                                    ★★★☆☆ </option>
                                                                <option value="4">
                                                                    ★★★★☆ </option>
                                                                <option value="5">
                                                                    ★★★★★ </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2 uk-width-1-5@s">
                                                        <label class="uk-form-label" for="LIs_0__LL">مهارت شنیداری</label>
                                                        <div class="uk-form-controls">
                                                            <select class="uk-select uk-select-score" data-val="true" data-val-required="The مهارت شنیداری field is required." id="LIs_0__LL" name="lang[0][listen]">
                                                                <option value="" selected=""></option>

                                                                <option value="1">
                                                                    ★☆☆☆☆ </option>
                                                                <option value="2">
                                                                    ★★☆☆☆ </option>
                                                                <option value="3">
                                                                    ★★★☆☆ </option>
                                                                <option value="4">
                                                                    ★★★★☆ </option>
                                                                <option value="5">
                                                                    ★★★★★ </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2 uk-width-1-5@s">
                                                        <label class="uk-form-label" for="LIs_0__SL">مهارت گفتاری</label>
                                                        <div class="uk-form-controls">
                                                            <select class="uk-select uk-select-score" data-val="true" data-val-required="The مهارت گفتاری field is required." id="LIs_0__SL" name="lang[0][speak]">>
                                                                <option value="" selected=""></option>

                                                                <option value="1">
                                                                    ★☆☆☆☆ </option>
                                                                <option value="2">
                                                                    ★★☆☆☆ </option>
                                                                <option value="3">
                                                                    ★★★☆☆ </option>
                                                                <option value="4">
                                                                    ★★★★☆ </option>
                                                                <option value="5">
                                                                    ★★★★★ </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="remove-new-record uk-text-danger" type="button" data-section="LanguageInfo" data-id="0">
                                            <img src="{{ asset('kit/close-icon-red.svg') }}">
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <span class="add-new-title">زبان خارجی دیگری را اضافه کنید</span>
                            <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-lang-button" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                        </div>

                        <h2>مهارت&zwnj;های تجربی</h2>
                        <div id="skillsTab" data-fieldset="2">
                            <div class="uk-grid-small uk-grid" uk-grid="" id="skill-box">

                                <div class="builder-card uk-width-1-1 uk-width-1-2@s">
                                    <div class="cv-box builder-box box-sh back-section">
                                        <div style="z-index:400">
                                            <input type="hidden" name="SIs.Index" value="0">
                                            <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="SIs_0__Order" name="SIs[0].Order">
                                            <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="SIs_0__IC" name="SIs[0].IC" value="">
                                            <input type="hidden" data-section="SkillInfo" data-val="true" data-val-required="The Id field is required." id="SIs_0__Id" name="SIs[0].Id" value="">

                                            <div class="card-slide">
                                                <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                <span class="card-slide_down uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                            </div>

                                            <div class="builder-card-content">
                                                <div class="uk-grid-small uk-grid" uk-grid="">
                                                    <div class="uk-width-1-1 uk-width-2-3@s">
                                                        <label class="uk-form-label" for="SIs_0__SkN">نام مهارت</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" data-suggestion="true" data-messagetype="warning" data-maxlength="30" data-maxmessage="بیشتر از 30 حرف مجاز نمی باشد" data-url="/Builder/Software" placeholder="مثال : نرم افزار اکسل" type="text" id="SIs_0__SkN" name="skill[0][name]" value="" autocomplete="off"><span class="error-message uk-text-warning maxmessage">بیشتر از 30 حرف مجاز نمی باشد</span><span class="error-message uk-text-warning"></span>
                                                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-1 uk-width-1-3@s">
                                                        <label class="uk-form-label" for="SIs_0__L">سطح</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="2" class="uk-select uk-select-score" data-val="true" data-val-required="The سطح field is required." id="SIs_0__L" name="skill[0][level]">
                                                                <option value="" selected=""></option>

                                                                <option value="1">
                                                                    ★☆☆☆☆ </option>
                                                                <option value="2">
                                                                    ★★☆☆☆ </option>
                                                                <option value="3">
                                                                    ★★★☆☆ </option>
                                                                <option value="4">
                                                                    ★★★★☆ </option>
                                                                <option value="5">
                                                                    ★★★★★ </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="remove-new-record uk-text-danger" type="button" data-section="SkillInfo" data-id="0">
                                                <img src="{{ asset('kit/close-icon-red.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="builder-card uk-width-1-1 uk-width-1-2@s">
                                    <div class="cv-box builder-box box-sh back-section">
                                        <div style="z-index:399">
                                            <input type="hidden" name="SIs.Index" value="1">
                                            <input type="hidden" value="2" data-val="true" data-val-required="The Order field is required." id="SIs_1__Order" name="SIs[1].Order">
                                            <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="SIs_1__IC" name="SIs[1].IC" value="">
                                            <input type="hidden" data-section="SkillInfo" data-val="true" data-val-required="The Id field is required." id="SIs_1__Id" name="SIs[1].Id" value="">

                                            <div class="card-slide">
                                                <span class="card-slide_up uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                            </div>

                                            <div class="builder-card-content">
                                                <div class="uk-grid-small uk-grid" uk-grid="">
                                                    <div class="uk-width-1-1 uk-width-2-3@s">
                                                        <label class="uk-form-label" for="SIs_1__SkN">نام مهارت</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" data-suggestion="true" data-messagetype="warning" data-maxlength="30" data-maxmessage="بیشتر از 30 حرف مجاز نمی باشد" data-url="/Builder/Software" placeholder="مثال : فوتوشاپ" type="text" id="SIs_1__SkN" name="skill[1][name]" value="" autocomplete="off"><span class="error-message uk-text-warning maxmessage">بیشتر از 30 حرف مجاز نمی باشد</span><span class="error-message uk-text-warning"></span>
                                                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-1 uk-width-1-3@s">
                                                        <label class="uk-form-label" for="SIs_1__L">سطح</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="2" class="uk-select uk-select-score" data-val="true" data-val-required="The سطح field is required." id="SIs_1__L" name="skill[1][level]">
                                                                <option value="" selected=""></option>

                                                                <option value="1">
                                                                    ★☆☆☆☆ </option>
                                                                <option value="2">
                                                                    ★★☆☆☆ </option>
                                                                <option value="3">
                                                                    ★★★☆☆ </option>
                                                                <option value="4">
                                                                    ★★★★☆ </option>
                                                                <option value="5">
                                                                    ★★★★★ </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="remove-new-record uk-text-danger" type="button" data-section="SkillInfo" data-id="0">
                                                <img src="{{ asset('kit/close-icon-red.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="add-new-title">مهارت تجربی دیگری را اضافه کنید</span>
                            <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-skill-section" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                        </div>

                        <h2>دوره&zwnj;ها و گواهینامه&zwnj;ها</h2>
                        <div id="certificatesTab" data-fieldset="3">
                            <div class="uk-grid-small uk-grid" uk-grid="" id="course-box">

                                <div class="builder-card uk-width-1-1">
                                    <div class="cv-box builder-box box-sh back-section">
                                        <div style="z-index:300">
                                            <input type="hidden" name="CIs.Index" value="0">
                                            <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="CIs_0__Order" name="CIs[0].Order">
                                            <input type="hidden" data-section="CertificateInfo" data-val="true" data-val-required="The Id field is required." id="CIs_0__Id" name="CIs[0].Id" value="">
                                            <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="CIs_0__IC" name="CIs[0].IC" value="">

                                            <div class="card-slide">
                                                <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                            </div>

                                            <div class="builder-card-content">

                                                <div class="uk-grid-small uk-grid" uk-grid="" id="add-course-box">
                                                    <div class="uk-width-1-1 uk-width-1-6@s">
                                                        <label class="uk-form-label" for="CIs_0__CerT">نوع گواهینامه</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="2" class="uk-select" data-val="true" data-val-required="The نوع گواهینامه field is required." id="CIs_0__CerT" name="course[0][type]">
                                                                <option value="" selected=""></option>
                                                                <option value="Language">زبان</option>
                                                                <option value="Software">نرم افزار</option>
                                                                <option value="Other">سایر</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-1 uk-width-5-6@s" style="position:relative">
                                                        <label class="uk-form-label" for="CIs_0__T">عنوان</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-suggestion="true" data-url="/Builder/Software" data-score="2" type="text" id="CIs_0__T" name="course[0][title]" value="" autocomplete="off">
                                                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-1 uk-width-3-4@s">
                                                        <label class="uk-form-label" for="CIs_0__Ins">موسسه</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" type="text" id="CIs_0__Ins" name="course[0][institute]" value="">
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-1 uk-width-1-4@s">
                                                        <label class="uk-form-label" for="CIs_0__Y">تاریخ</label>
                                                        <div class="uk-form-controls">
                                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                                <div class="uk-width-1-2">
                                                                    <select class="uk-select" data-val="true" data-val-required="The ماه field is required." id="CIs_0__M" name="course[0][date]">
                                                                        <option value="" selected="">ماه</option>
                                                                        <option value="1">فروردین</option>
                                                                        <option value="2">اردیبهشت</option>
                                                                        <option value="3">خرداد</option>
                                                                        <option value="4">تیر</option>
                                                                        <option value="5">مرداد</option>
                                                                        <option value="6">شهریور</option>
                                                                        <option value="7">مهر</option>
                                                                        <option value="8">آبان</option>
                                                                        <option value="9">آذر</option>
                                                                        <option value="10">دی</option>
                                                                        <option value="11">بهمن</option>
                                                                        <option value="12">اسفند</option>
                                                                    </select>
                                                                </div>
                                                                <div class="uk-width-1-2">
                                                                    <input data-min="1299" data-max="1399" data-score="2" class="uk-input input-year" placeholder="سال" type="number" data-val="true" data-val-required="The تاریخ field is required." id="CIs_0__Y" name="course[0][month]" value="">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="remove-new-record uk-text-danger" type="button" data-section="CertificateInfo" data-id="0">
                                                <img src="{{ asset('kit/close-icon-red.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="add-new-title">دوره و گواهینامه دیگری را اضافه کنید</span>
                            <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-course-button" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                        </div>

                        <h2>افتخارات</h2>
                        <div id="honorsTab" data-fieldset="4">
                            <div class="uk-grid-small uk-grid" uk-grid="" id="honor-box">

                                <div class="builder-card uk-width-1-1">
                                    <div class="cv-box builder-box box-sh back-section">
                                        <div style="z-index:200">
                                            <input type="hidden" name="HIs.Index" value="0">
                                            <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="HIs_0__Order" name="HIs[0].Order">
                                            <input type="hidden" data-section="HonorInfo" data-val="true" data-val-required="The Id field is required." id="HIs_0__Id" name="HIs[0].Id" value="">
                                            <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="HIs_0__IC" name="HIs[0].IC" value="">

                                            <div class="card-slide">
                                                <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                            </div>

                                            <div class="builder-card-content">
                                                <div class="uk-grid-small uk-grid" uk-grid="" id="honor-box">
                                                    <div class="uk-width-1-1 uk-width-3-4@s">
                                                        <label class="uk-form-label" for="HIs_0__T">عنوان</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" placeholder="به طور مثال: برنده جایزه، مقاله برتر پژوهشگاه، دانشجوی ممتاز کارشناسی ارشد" type="text" id="HIs_0__T" name="honor[0][title]" value="">
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-1 uk-width-1-4@s">
                                                        <label class="uk-form-label" for="HIs_0__Y">تاریخ</label>
                                                        <div class="uk-form-controls">
                                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                                <div class="uk-width-1-2">
                                                                    <div class="uk-form-controls">
                                                                        <select class="uk-select" data-val="true" data-val-required="The ماه field is required." id="HIs_0__M" name="honor[0][month]">
                                                                            <option value="" selected="">ماه</option>
                                                                            <option value="1">فروردین</option>
                                                                            <option value="2">اردیبهشت</option>
                                                                            <option value="3">خرداد</option>
                                                                            <option value="4">تیر</option>
                                                                            <option value="5">مرداد</option>
                                                                            <option value="6">شهریور</option>
                                                                            <option value="7">مهر</option>
                                                                            <option value="8">آبان</option>
                                                                            <option value="9">آذر</option>
                                                                            <option value="10">دی</option>
                                                                            <option value="11">بهمن</option>
                                                                            <option value="12">اسفند</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-1-2">
                                                                    <div class="uk-form-controls">
                                                                        <input data-min="1299" data-max="1399" data-score="2" class="uk-input input-year" placeholder="سال" type="number" data-val="true" data-val-required="The تاریخ field is required." id="HIs_0__Y" name="honor[0][year]" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="remove-new-record uk-text-danger" type="button"  data-section="HonorInfo" data-id="0">
                                                <img src="{{ asset('kit/close-icon-red.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="add-new-title">افتخار دیگری را اضافه کنید</span>
                            <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-honor-button" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                        </div>
                    </li>
                    <li data-step="5">
                        <h2>تحقیقات و مقالات</h2>
                        <div id="langsTab" data-fieldset="1">
                            <div class="uk-grid-small uk-grid" uk-grid="" id="article-box">

                                <div class="builder-card uk-width-1-1">
                                    <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="RIs_0__IC" name="RIs[0].IC" value="">
                                    <div class="cv-box builder-box box-sh back-section">
                                        <div style="z-index:100">
                                            <input type="hidden" name="RIs.Index" value="0">
                                            <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="RIs_0__Order" name="RIs[0].Order">
                                            <input type="hidden" data-section="ResearchInfo" data-val="true" data-val-required="The Id field is required." id="RIs_0__Id" name="RIs[0].Id" value="">

                                            <div class="card-slide">
                                                <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                            </div>

                                            <div class="builder-card-content">
                                                <div class="uk-grid-small uk-grid" uk-grid="">
                                                    <div class="uk-width-1-1 uk-width-1-6@s">
                                                        <label class="uk-form-label" for="RIs_0__PubT">نوع اثر</label>
                                                        <div class="uk-form-controls">
                                                            <select data-score="2" class="uk-select" data-val="true" data-val-required="The نوع اثر field is required." id="RIs_0__PubT" name="article[0][type]">
                                                                <option value="" selected=""></option>
                                                                <option value="Book">کتاب</option>
                                                                <option value="Paper">مقاله</option>
                                                                <option value="Thesis">پایان نامه</option>
                                                                <option value="Other">سایر</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1 uk-width-5-6@s">
                                                        <label class="uk-form-label" for="RIs_0__T">عنوان</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" type="text" id="RIs_0__T" name="article[0][title]" value="">
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1 uk-width-1-4@s">
                                                        <label class="uk-form-label" for="RIs_0__Pub">ناشر</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" type="text" id="RIs_0__Pub" name="article[0][publisher]" value="">
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1 uk-width-1-2@s">
                                                        <label class="uk-form-label" for="RIs_0__LUrl">لینک مرتبط</label>
                                                        <div class="uk-form-controls">
                                                            <input dir="ltr" class="uk-input" data-linkurl="لینک معتبر وارد کنید" type="text" id="RIs_0__LUrl" name="article[0][link]" value=""><span class="error-message uk-form-danger">لینک معتبر وارد کنید</span>
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1 uk-width-1-4@s">
                                                        <label class="uk-form-label" for="RIs_0__Y">تاریخ</label>
                                                        <div class="uk-form-controls">
                                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                                <div class="uk-width-1-2">
                                                                    <select class="uk-select" data-val="true" data-val-required="The ماه field is required." id="RIs_0__M" name="article[0][month]">
                                                                        <option value="" selected="">ماه</option>
                                                                        <option value="1">فروردین</option>
                                                                        <option value="2">اردیبهشت</option>
                                                                        <option value="3">خرداد</option>
                                                                        <option value="4">تیر</option>
                                                                        <option value="5">مرداد</option>
                                                                        <option value="6">شهریور</option>
                                                                        <option value="7">مهر</option>
                                                                        <option value="8">آبان</option>
                                                                        <option value="9">آذر</option>
                                                                        <option value="10">دی</option>
                                                                        <option value="11">بهمن</option>
                                                                        <option value="12">اسفند</option>
                                                                    </select>
                                                                </div>
                                                                <div class="uk-width-1-2">
                                                                    <input data-min="1299" data-max="1399" data-score="2" class="uk-input input-year" placeholder="سال" type="number" data-val="true" data-val-required="The تاریخ field is required." id="RIs_0__Y" name="article[0][year]" value="">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1">
                                                        <label class="uk-form-label" for="RIs_0__Dsc">توضیحات</label>
                                                        <div class="uk-form-controls">
                                                            <textarea class="uk-textarea" rows="3" data-score="2" id="RIs_0__Dsc" name="article[0][desc]"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="remove-new-record uk-text-danger" type="button" data-section="ResearchInfo" data-id="0">
                                                <img src="{{ asset('kit/close-icon-red.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="add-new-title">تحقیق و مقاله دیگری را اضافه کنید</span>
                            <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-article-button" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                        </div>

                        <h2>پروژه&zwnj;ها</h2>
                        <div id="langsTab" data-fieldset="2">
                            <div class="uk-grid-small uk-grid" uk-grid="" id="add-project-box">

                                <div class="builder-card uk-width-1-1">
                                    <div class="cv-box builder-box box-sh back-section">
                                        <div style="z-index:100">
                                            <input type="hidden" name="PIs.Index" value="0">
                                            <input type="hidden" value="1" data-val="true" data-val-required="The Order field is required." id="PIs_0__Order" name="PIs[0].Order">
                                            <input type="hidden" data-section="ProjectInfo" data-val="true" data-val-required="The Id field is required." id="PIs_0__Id" name="PIs[0].Id" value="">
                                            <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="PIs_0__IC" name="PIs[0].IC" value="">

                                            <div class="card-slide">
                                                <span class="card-slide_up disable uk-icon" uk-icon="chevron-up">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-up"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"></polyline></svg>
    </span>
                                                <span class="card-slide_down disable uk-icon" uk-icon="chevron-down">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg>
    </span>
                                            </div>

                                            <div class="builder-card-content">
                                                <div class="uk-grid-small uk-grid" uk-grid="">
                                                    <div class="uk-width-1-1 uk-width-2-3@s">
                                                        <label class="uk-form-label" for="PIs_0__T">عنوان</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" type="text" id="PIs_0__T" name="project[0][title]" value="">
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1 uk-width-1-3@s">
                                                        <label class="uk-form-label" for="PIs_0__For">کارفرما / درخواست کننده</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" data-score="2" type="text" id="PIs_0__For" name="project[0][employer]" value="">
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1 uk-width-3-4@s">
                                                        <label class="uk-form-label" for="PIs_0__LUrl">لینک مرتبط</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" dir="ltr" data-linkurl="لینک معتبر وارد کنید" data-score="2" type="text" id="PIs_0__LUrl" name="project[0][link]" value=""><span class="error-message uk-form-danger">لینک معتبر وارد کنید</span>
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1 uk-width-1-4@s">
                                                        <label class="uk-form-label" for="PIs_0__Y">تاریخ</label>
                                                        <div class="uk-form-controls">
                                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                                <div class="uk-width-1-2">
                                                                    <select class="uk-select" data-val="true" data-val-required="The ماه field is required." id="PIs_0__M" name="project[0][mouth]">
                                                                        <option value="" selected="">ماه</option>
                                                                        <option value="1">فروردین</option>
                                                                        <option value="2">اردیبهشت</option>
                                                                        <option value="3">خرداد</option>
                                                                        <option value="4">تیر</option>
                                                                        <option value="5">مرداد</option>
                                                                        <option value="6">شهریور</option>
                                                                        <option value="7">مهر</option>
                                                                        <option value="8">آبان</option>
                                                                        <option value="9">آذر</option>
                                                                        <option value="10">دی</option>
                                                                        <option value="11">بهمن</option>
                                                                        <option value="12">اسفند</option>
                                                                    </select>
                                                                </div>
                                                                <div class="uk-width-1-2">
                                                                    <input data-min="1299" data-max="1399" data-score="2" class="uk-input input-year" placeholder="سال" type="number" data-val="true" data-val-required="The تاریخ field is required." id="PIs_0__Y" name="project[0][year]" value="">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-1">
                                                        <label class="uk-form-label" for="PIs_0__Dsc">توضیحات</label>
                                                        <div class="uk-form-controls">
                                                            <textarea class="uk-textarea" rows="3" id="PIs_0__Dsc" name="project[0][desc]"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="remove-new-record uk-text-danger" type="button" data-section="ProjectInfo" data-id="0">
                                                <img src="{{ asset('kit/close-icon-red.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <span class="add-new-title">پروژه دیگری را اضافه کنید</span>
                            <a  class="btn btn-dark rounded-circle mx-auto d-block" id="add-project-button" style="width:34px;height:31px;position:relative;top:-15px;">
                                    <img src="{{ asset('img/plus-1.svg') }}" width="20" height="20" />
                            </a>
                        </div>
                    </li>
                    <li data-step="6" data-switcher="last">

                        <h2 class="uk-margin-small-bottom">درخواست شغل</h2>
                        <p class="uk-text-muted uk-text-small uk-margin-remove-top">اطلاعات این قسمت در رزومه نمایش داده نمی شود و صرفا جهت معرفی به مشاغل می باشد</p>
                        <div class="cv-box builder-box box-sh back-section">
                            <div class="builder-card">
                                <input type="hidden" data-section="RecruitmentInfo" data-val="true" data-val-required="The Id field is required." id="RecI_Id" name="RecI.Id" value="">
                                <input type="hidden" class="change-flag" data-val="true" data-val-required="The IC field is required." id="RecI_IC" name="RecI.IC" value="">

                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-1">
                                        <label>
                                            <input uk-toggle="target: #job-application; animation: uk-animation-slide-bottom, uk-animation-slide-bottom" type="checkbox" class="uk-checkbox" data-val="true" data-val-required="The قصد انتخاب یا تغییر شغل دارم field is required." id="RecI_JobAp" name="RecI.JobAp" value="true">
                                            <label for="RecI_JobAp">قصد انتخاب یا تغییر شغل دارم</label>
                                        </label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <div id="job-application" hidden="">
                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                <div class="uk-width-1-4">
                                                    <label class="uk-form-label" for="RecI_JCId">گروه شغلی</label>
                                                    <div class="uk-form-controls">
                                                        <select class="uk-select" id="RecI_JCId" name="RecI.JCId">
                                                            <option value="" selected=""></option>

                                                            <option value="1">سخت افزار و شبکه</option>
                                                            <option value="2">طراحی / گرافیست</option>
                                                            <option value="3">وب،&zwnj; برنامه&zwnj;نویسی و نرم&zwnj;افزار</option>
                                                            <option value="4">فروش و بازاریابی</option>
                                                            <option value="5">تولید و مدیریت محتوا</option>
                                                            <option value="6">مسئول دفتر، اجرائی و اداری</option>
                                                            <option value="7">پزشکی/داروسازی</option>
                                                            <option value="8">پشتیبانی و امور مشتریان</option>
                                                            <option value="9">IT / DevOps / Server</option>
                                                            <option value="10">مالی و حسابداری</option>
                                                            <option value="11">مهندسی برق و الکترونیک</option>
                                                            <option value="12">آموزش</option>
                                                            <option value="13">منابع انسانی و کارگزینی</option>
                                                            <option value="14">مهندسی صنایع و مدیریت صنعتی</option>
                                                            <option value="15">خرید و بازرگانی</option>
                                                            <option value="16">مدیر محصول</option>
                                                            <option value="17">ترجمه</option>
                                                            <option value="18">مهندسی عمران و معماری</option>
                                                            <option value="19">تحقیق و توسعه</option>
                                                            <option value="20">تحقیق بازار و تحلیل اقتصادی</option>
                                                            <option value="21">گردشگری</option>
                                                            <option value="22">کارشناس حقوقی،&zwnj; وکالت</option>
                                                            <option value="23">پزشکی،&zwnj; پرستاری و دارویی</option>
                                                            <option value="24">مهندسی مکانیک و هوافضا</option>
                                                            <option value="25">روابط عمومی</option>
                                                            <option value="26">خبر&zwnj;نگاری</option>
                                                            <option value="27">انبارداری</option>
                                                            <option value="28">هتلداری</option>
                                                            <option value="29">حمل و نقل</option>
                                                            <option value="30">صنایع غذایی</option>
                                                            <option value="31">مهندسی شیمی و نفت</option>
                                                            <option value="32">CEO</option>
                                                            <option value="33">HSE</option>
                                                            <option value="34">مدیریت بیمه</option>
                                                            <option value="35">مهندسی کشاورزی</option>
                                                            <option value="36">مهندسی معدن و متالورژی</option>
                                                            <option value="37">مهندسی صنایع</option>
                                                            <option value="38">بازاریابی و فروش</option>
                                                            <option value="39">سایر</option>
                                                            <option value="40">بازاریابی دیجیتال/تولید محتوا</option>
                                                            <option value="41">مسئول دفتر/ امور اداری</option>
                                                            <option value="42">عملیات و تولید/تعمیر و نگهداری</option>
                                                            <option value="43">هنر</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-4">
                                                    <label class="uk-form-label" for="RecI_JT">عنوان رزومه</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" type="text" id="RecI_JT" name="RecI.JT" value="">
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-4">
                                                    <label class="uk-form-label" for="RecI_EtT">نحوه همکاری</label>
                                                    <div class="uk-form-controls">
                                                        <select class="uk-select" data-val="true" data-val-required="The نحوه همکاری field is required." id="RecI_EtT" name="RecI.EtT">
                                                            <option value="" selected=""></option>
                                                            <option value="FullTime">تمام وقت</option>
                                                            <option value="PartTime">پاره وقت</option>
                                                            <option value="ProjectBased">پروژه ای</option>
                                                            <option value="HourlyEmployee">ساعتی</option>
                                                            <option value="Remote">دورکاری</option>
                                                            <option value="Internship">کارآموزی</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-4">
                                                    <label class="uk-form-label" for="RecI_MAvgS">حداقل دستمزد ماهانه (تومان)</label>
                                                    <div class="uk-form-controls">
                                                        <input dir="ltr" type="text" class="uk-input" id="RecI_MAvgS" name="RecI.MAvgS" value="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-1">
                                        <label>
                                            <input uk-toggle="target: #immigration-for-study; animation: uk-animation-slide-bottom, uk-animation-slide-bottom" type="checkbox" class="uk-checkbox" data-val="true" data-val-required="The میخواهم برای ادامه تحصیل مهاجرت کنم field is required." id="RecI_IMFS" name="RecI.IMFS" value="true">
                                            <label for="RecI_IMFS">میخواهم برای ادامه تحصیل مهاجرت کنم</label>
                                        </label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <div id="immigration-for-study" hidden="">
                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                <div class="uk-width-1-3">
                                                    <label class="uk-form-label" for="RecI_IMFSPC">کشورهای مورد نظر برای ادامه تحصیل</label>
                                                    <div class="uk-form-controls">
                                                        <select id="RecruitmentInfo_IMFSPC" name="RecI.IMFSPC" class="uk-select">
                                                            <option value="" selected=""></option>

                                                            <option value="2">ایران</option>
                                                            <option value="153">آلبانی</option>
                                                            <option value="154">الجزایر</option>
                                                            <option value="155">آندورا</option>
                                                            <option value="156">آنگولا</option>
                                                            <option value="157">آرزانتین</option>
                                                            <option value="158">ارمنستان</option>
                                                            <option value="159">استرالیا</option>
                                                            <option value="160">اتریش</option>
                                                            <option value="161">آذربایجان</option>
                                                            <option value="162">باهاما</option>
                                                            <option value="163">بحرین</option>
                                                            <option value="164">بنگلادش</option>
                                                            <option value="165">باربادوس</option>
                                                            <option value="166">بلاروس</option>
                                                            <option value="167">بلژیک</option>
                                                            <option value="168">بلیز</option>
                                                            <option value="169">بنین</option>
                                                            <option value="170">بوتان</option>
                                                            <option value="171">بولیوی</option>
                                                            <option value="172">بوسنی و هرزگوین</option>
                                                            <option value="173">بوتسوانا</option>
                                                            <option value="174">برزیل</option>
                                                            <option value="175">بونئی</option>
                                                            <option value="176">بلغارستان</option>
                                                            <option value="177">بورکینیا فاسو</option>
                                                            <option value="178">بروندی</option>
                                                            <option value="179">کامبوج</option>
                                                            <option value="180">کامرون</option>
                                                            <option value="181">کانادا</option>
                                                            <option value="182">چاد</option>
                                                            <option value="183">شیلی</option>
                                                            <option value="184">چین</option>
                                                            <option value="185">کلمبیا</option>
                                                            <option value="186">کنگو</option>
                                                            <option value="187">کاستاریکا</option>
                                                            <option value="188">کرواسی</option>
                                                            <option value="189">کوبا</option>
                                                            <option value="190">قبرس</option>
                                                            <option value="191">جمهوری چک</option>
                                                            <option value="192">دانمارک</option>
                                                            <option value="193">جیبوتی</option>
                                                            <option value="194">دومینیکا</option>
                                                            <option value="195">جمهوری دومنیکن</option>
                                                            <option value="196">اکوادور</option>
                                                            <option value="197">مصر</option>
                                                            <option value="198">السالوادور</option>
                                                            <option value="199">انگلیسی</option>
                                                            <option value="200">ایتره</option>
                                                            <option value="201">استونی</option>
                                                            <option value="202">اتیوپی</option>
                                                            <option value="203">فیجی</option>
                                                            <option value="204">فنلاند</option>
                                                            <option value="205">فرانسه</option>
                                                            <option value="206">گابن</option>
                                                            <option value="207">گامبیا</option>
                                                            <option value="208">گرجستان</option>
                                                            <option value="209">آلمان</option>
                                                            <option value="210">غنا</option>
                                                            <option value="211">یونان</option>
                                                            <option value="212">گرانادا</option>
                                                            <option value="213">گواتمالا</option>
                                                            <option value="214">گینه</option>
                                                            <option value="215">گویان</option>
                                                            <option value="216">هایتی</option>
                                                            <option value="217">هندوراس</option>
                                                            <option value="218">مجارستان</option>
                                                            <option value="219">ایسلند</option>
                                                            <option value="220">هند</option>
                                                            <option value="221">اندونزی</option>
                                                            <option value="222">عراق</option>
                                                            <option value="223">جمهوری ایرلند</option>
                                                            <option value="224">ایتالیا</option>
                                                            <option value="225">جامائیکا</option>
                                                            <option value="226">ژاپن</option>
                                                            <option value="227">اردن</option>
                                                            <option value="228">قزاقستان</option>
                                                            <option value="229">کنیا</option>
                                                            <option value="230">کویت</option>
                                                            <option value="231">لائوس</option>
                                                            <option value="232">لیتوانی</option>
                                                            <option value="233">لبنان</option>
                                                            <option value="234">لیبریا</option>
                                                            <option value="235">لیبی</option>
                                                            <option value="236">لیتوانی</option>
                                                            <option value="237">مقدونیه</option>
                                                            <option value="238">ماداگاسکار</option>
                                                            <option value="239">مالاوی</option>
                                                            <option value="240">مالزی</option>
                                                            <option value="241">مالدیو</option>
                                                            <option value="242">مالی</option>
                                                            <option value="243">مالت</option>
                                                            <option value="244">موریتانی</option>
                                                            <option value="245">موریس</option>
                                                            <option value="246">مکزیک</option>
                                                            <option value="247">موناکو</option>
                                                            <option value="248">مغولستان</option>
                                                            <option value="249">مونته نگرو</option>
                                                            <option value="250">مراکش</option>
                                                            <option value="251">موزامبیک</option>
                                                            <option value="252">میانمار (نام دیگر این کشور برمه است)</option>
                                                            <option value="253">نامیبیا</option>
                                                            <option value="254">نپال</option>
                                                            <option value="255">هلند</option>
                                                            <option value="256">نیوزیلند</option>
                                                            <option value="257">نیکاراگوئه</option>
                                                            <option value="258">نیجر</option>
                                                            <option value="259">نیجریه</option>
                                                            <option value="260">کره شمالی</option>
                                                            <option value="261">نروژ</option>
                                                            <option value="262">عمان</option>
                                                            <option value="263">پاکستان</option>
                                                            <option value="264">فلستین</option>
                                                            <option value="265">پاناما</option>
                                                            <option value="266">گینه نو</option>
                                                            <option value="267">پاراگوئه</option>
                                                            <option value="268">پرو</option>
                                                            <option value="269">فیلیپین</option>
                                                            <option value="270">لهستان</option>
                                                            <option value="271">پرتغال</option>
                                                            <option value="272">قطر</option>
                                                            <option value="273">رومانی</option>
                                                            <option value="274">روسیه</option>
                                                            <option value="275">رواندا</option>
                                                            <option value="276">عربستان سعودی</option>
                                                            <option value="277">سنگال</option>
                                                            <option value="278">صربستان</option>
                                                            <option value="279">سیشل</option>
                                                            <option value="280">سیرالئون</option>
                                                            <option value="281">سنگاپور</option>
                                                            <option value="282">اسلواکی</option>
                                                            <option value="283">اسلوونی</option>
                                                            <option value="284">سومالی</option>
                                                            <option value="285">آفریقای جنوبی</option>
                                                            <option value="286">کره جنوبی</option>
                                                            <option value="287">اسپانیا</option>
                                                            <option value="288">سریلانکا</option>
                                                            <option value="289">سودان</option>
                                                            <option value="290">سورینام</option>
                                                            <option value="291">سوازیلند</option>
                                                            <option value="292">سوئد</option>
                                                            <option value="293">سوئیس</option>
                                                            <option value="294">سوریه</option>
                                                            <option value="295">تایوان</option>
                                                            <option value="296">تاجیکستان</option>
                                                            <option value="297">تانزانیا</option>
                                                            <option value="298">تایلند</option>
                                                            <option value="299">توگو</option>
                                                            <option value="300">ترینیداد و توباگو</option>
                                                            <option value="301">تونس</option>
                                                            <option value="302">ترکیه</option>
                                                            <option value="303">ترکمنستان</option>
                                                            <option value="304">توالو</option>
                                                            <option value="305">اوگاندا</option>
                                                            <option value="306">اکراین</option>
                                                            <option value="307">امارات متحده عربی</option>
                                                            <option value="308">ایالات متحده آمریکا</option>
                                                            <option value="309">اروگوئه</option>
                                                            <option value="310">ازبکستان</option>
                                                            <option value="311">وانوواتو</option>
                                                            <option value="312">واتیکان</option>
                                                            <option value="313">ونزوئلا</option>
                                                            <option value="314">ویتنام</option>
                                                            <option value="315">یمن</option>
                                                            <option value="316">زامبیا</option>
                                                            <option value="317">زیمباوه</option>
                                                            <option value="318">افغانستان</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-3">
                                                    <label class="uk-form-label">مقطع درخواستی برای ادامه تحصیل</label>
                                                    <div class="uk-form-controls">
                                                        <select class="uk-select" data-val="true" data-val-required="The مقطع field is required." id="RecI_EL" name="RecI.EL">
                                                            <option value="" selected=""></option>
                                                            <option value="UnderGraduate">زیر دیپلم</option>
                                                            <option value="Diploma">دیپلم</option>
                                                            <option value="Associate">کاردانی</option>
                                                            <option value="Bachelor">کارشناسی</option>
                                                            <option value="Master">کارشناسی ارشد</option>
                                                            <option value="Doctorate">دکتری</option>
                                                            <option value="Postdoctoral">فوق دکتری</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-3">
                                                    <label class="uk-form-label" for="RecI_FoS">رشته تحصیلی</label>
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" type="text" id="RecI_FoS" name="RecI.FoS" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-1">
                                        <label>
                                            <input uk-toggle="target: #immigration-for-word; animation: uk-animation-slide-bottom, uk-animation-slide-bottom" type="checkbox" class="uk-checkbox" data-val="true" data-val-required="The میخواهم برای کار مهاجرت کنم field is required." id="RecI_IMFW" name="RecI.IMFW" value="true">
                                            <label for="RecI_IMFW">میخواهم برای کار مهاجرت کنم</label>
                                        </label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <div id="immigration-for-word" hidden="">
                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                <div class="uk-width-1-3">
                                                    <label class="uk-form-label" for="RecI_IMFWPC">کشورهای مورد نظر برای کار</label>
                                                    <div class="uk-form-controls">
                                                        <select id="RecruitmentInfo_IMFWPC" name="RecI.IMFWPC" class="uk-select">
                                                            <option value=""></option>

                                                            <option value="2">ایران</option>
                                                            <option value="153">آلبانی</option>
                                                            <option value="154">الجزایر</option>
                                                            <option value="155">آندورا</option>
                                                            <option value="156">آنگولا</option>
                                                            <option value="157">آرزانتین</option>
                                                            <option value="158">ارمنستان</option>
                                                            <option value="159">استرالیا</option>
                                                            <option value="160">اتریش</option>
                                                            <option value="161">آذربایجان</option>
                                                            <option value="162">باهاما</option>
                                                            <option value="163">بحرین</option>
                                                            <option value="164">بنگلادش</option>
                                                            <option value="165">باربادوس</option>
                                                            <option value="166">بلاروس</option>
                                                            <option value="167">بلژیک</option>
                                                            <option value="168">بلیز</option>
                                                            <option value="169">بنین</option>
                                                            <option value="170">بوتان</option>
                                                            <option value="171">بولیوی</option>
                                                            <option value="172">بوسنی و هرزگوین</option>
                                                            <option value="173">بوتسوانا</option>
                                                            <option value="174">برزیل</option>
                                                            <option value="175">بونئی</option>
                                                            <option value="176">بلغارستان</option>
                                                            <option value="177">بورکینیا فاسو</option>
                                                            <option value="178">بروندی</option>
                                                            <option value="179">کامبوج</option>
                                                            <option value="180">کامرون</option>
                                                            <option value="181">کانادا</option>
                                                            <option value="182">چاد</option>
                                                            <option value="183">شیلی</option>
                                                            <option value="184">چین</option>
                                                            <option value="185">کلمبیا</option>
                                                            <option value="186">کنگو</option>
                                                            <option value="187">کاستاریکا</option>
                                                            <option value="188">کرواسی</option>
                                                            <option value="189">کوبا</option>
                                                            <option value="190">قبرس</option>
                                                            <option value="191">جمهوری چک</option>
                                                            <option value="192">دانمارک</option>
                                                            <option value="193">جیبوتی</option>
                                                            <option value="194">دومینیکا</option>
                                                            <option value="195">جمهوری دومنیکن</option>
                                                            <option value="196">اکوادور</option>
                                                            <option value="197">مصر</option>
                                                            <option value="198">السالوادور</option>
                                                            <option value="199">انگلیسی</option>
                                                            <option value="200">ایتره</option>
                                                            <option value="201">استونی</option>
                                                            <option value="202">اتیوپی</option>
                                                            <option value="203">فیجی</option>
                                                            <option value="204">فنلاند</option>
                                                            <option value="205">فرانسه</option>
                                                            <option value="206">گابن</option>
                                                            <option value="207">گامبیا</option>
                                                            <option value="208">گرجستان</option>
                                                            <option value="209">آلمان</option>
                                                            <option value="210">غنا</option>
                                                            <option value="211">یونان</option>
                                                            <option value="212">گرانادا</option>
                                                            <option value="213">گواتمالا</option>
                                                            <option value="214">گینه</option>
                                                            <option value="215">گویان</option>
                                                            <option value="216">هایتی</option>
                                                            <option value="217">هندوراس</option>
                                                            <option value="218">مجارستان</option>
                                                            <option value="219">ایسلند</option>
                                                            <option value="220">هند</option>
                                                            <option value="221">اندونزی</option>
                                                            <option value="222">عراق</option>
                                                            <option value="223">جمهوری ایرلند</option>
                                                            <option value="224">ایتالیا</option>
                                                            <option value="225">جامائیکا</option>
                                                            <option value="226">ژاپن</option>
                                                            <option value="227">اردن</option>
                                                            <option value="228">قزاقستان</option>
                                                            <option value="229">کنیا</option>
                                                            <option value="230">کویت</option>
                                                            <option value="231">لائوس</option>
                                                            <option value="232">لیتوانی</option>
                                                            <option value="233">لبنان</option>
                                                            <option value="234">لیبریا</option>
                                                            <option value="235">لیبی</option>
                                                            <option value="236">لیتوانی</option>
                                                            <option value="237">مقدونیه</option>
                                                            <option value="238">ماداگاسکار</option>
                                                            <option value="239">مالاوی</option>
                                                            <option value="240">مالزی</option>
                                                            <option value="241">مالدیو</option>
                                                            <option value="242">مالی</option>
                                                            <option value="243">مالت</option>
                                                            <option value="244">موریتانی</option>
                                                            <option value="245">موریس</option>
                                                            <option value="246">مکزیک</option>
                                                            <option value="247">موناکو</option>
                                                            <option value="248">مغولستان</option>
                                                            <option value="249">مونته نگرو</option>
                                                            <option value="250">مراکش</option>
                                                            <option value="251">موزامبیک</option>
                                                            <option value="252">میانمار (نام دیگر این کشور برمه است)</option>
                                                            <option value="253">نامیبیا</option>
                                                            <option value="254">نپال</option>
                                                            <option value="255">هلند</option>
                                                            <option value="256">نیوزیلند</option>
                                                            <option value="257">نیکاراگوئه</option>
                                                            <option value="258">نیجر</option>
                                                            <option value="259">نیجریه</option>
                                                            <option value="260">کره شمالی</option>
                                                            <option value="261">نروژ</option>
                                                            <option value="262">عمان</option>
                                                            <option value="263">پاکستان</option>
                                                            <option value="264">فلستین</option>
                                                            <option value="265">پاناما</option>
                                                            <option value="266">گینه نو</option>
                                                            <option value="267">پاراگوئه</option>
                                                            <option value="268">پرو</option>
                                                            <option value="269">فیلیپین</option>
                                                            <option value="270">لهستان</option>
                                                            <option value="271">پرتغال</option>
                                                            <option value="272">قطر</option>
                                                            <option value="273">رومانی</option>
                                                            <option value="274">روسیه</option>
                                                            <option value="275">رواندا</option>
                                                            <option value="276">عربستان سعودی</option>
                                                            <option value="277">سنگال</option>
                                                            <option value="278">صربستان</option>
                                                            <option value="279">سیشل</option>
                                                            <option value="280">سیرالئون</option>
                                                            <option value="281">سنگاپور</option>
                                                            <option value="282">اسلواکی</option>
                                                            <option value="283">اسلوونی</option>
                                                            <option value="284">سومالی</option>
                                                            <option value="285">آفریقای جنوبی</option>
                                                            <option value="286">کره جنوبی</option>
                                                            <option value="287">اسپانیا</option>
                                                            <option value="288">سریلانکا</option>
                                                            <option value="289">سودان</option>
                                                            <option value="290">سورینام</option>
                                                            <option value="291">سوازیلند</option>
                                                            <option value="292">سوئد</option>
                                                            <option value="293">سوئیس</option>
                                                            <option value="294">سوریه</option>
                                                            <option value="295">تایوان</option>
                                                            <option value="296">تاجیکستان</option>
                                                            <option value="297">تانزانیا</option>
                                                            <option value="298">تایلند</option>
                                                            <option value="299">توگو</option>
                                                            <option value="300">ترینیداد و توباگو</option>
                                                            <option value="301">تونس</option>
                                                            <option value="302">ترکیه</option>
                                                            <option value="303">ترکمنستان</option>
                                                            <option value="304">توالو</option>
                                                            <option value="305">اوگاندا</option>
                                                            <option value="306">اکراین</option>
                                                            <option value="307">امارات متحده عربی</option>
                                                            <option value="308">ایالات متحده آمریکا</option>
                                                            <option value="309">اروگوئه</option>
                                                            <option value="310">ازبکستان</option>
                                                            <option value="311">وانوواتو</option>
                                                            <option value="312">واتیکان</option>
                                                            <option value="313">ونزوئلا</option>
                                                            <option value="314">ویتنام</option>
                                                            <option value="315">یمن</option>
                                                            <option value="316">زامبیا</option>
                                                            <option value="317">زیمباوه</option>
                                                            <option value="318">افغانستان</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-width-1-1">
                                        <label>
                                            <input uk-toggle="target: #continue-education; animation: uk-animation-slide-bottom, uk-animation-slide-bottom" type="checkbox" class="uk-checkbox" data-val="true" data-val-required="The ادامه تحصیل داخل field is required." id="RecI_ConEdu" name="RecI.ConEdu" value="true">
                                            <label for="RecI_ConEdu">ادامه تحصیل داخل</label>
                                        </label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <div id="continue-education" hidden="">
                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                <div class="uk-width-1-4">
                                                    <label class="uk-form-label" for="RecI_InsTy">نوع موسسه</label>
                                                    <div class="uk-form-controls">
                                                        <select class="uk-select" data-val="true" data-val-required="The نوع موسسه field is required." id="RecI_InsTy" name="RecI.InsTy">
                                                            <option value="" selected=""></option>
                                                            <option value="Dolati">دولتی</option>
                                                            <option value="Azad">آزاد</option>
                                                            <option value="Payamenoor">پیام نور</option>
                                                            <option value="ElmiKarbordi">علمی کاربردی</option>
                                                            <option value="GheireEntefayi">غیرانتفاعی</option>
                                                            <option value="Other">سایر</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="switcher-button">
                        <button class="switcher-submit uk-border-pill uk-button" style="background: linear-gradient(to left,#ffbc4e,#ff9f00);" type="submit">دریافت رزومه</button>
                    </li>
                </ul>
            </div>
            <div class="uk-width-1-6 uk-visible@s">
            </div>
        </div>
    </div>
    <input name="RecI.JobAp" type="hidden" value="false">
    <input name="RecI.IMFS" type="hidden" value="false">
    <input name="RecI.IMFW" type="hidden" value="false">
    <input name="RecI.ConEdu" type="hidden" value="false">



</form>


