    <!-- دکمه اضافه -->
    <div class="form-group float-left" style="position: relative;right: 10px;top:18px">
        <button type="button" class="btn rounded-circle position-relative border-new-color" id="btn-add-project"
            style="top:25px;background: #320069;border:1px solid #320069;width:40px;height:40px;"><span class="glyphicon glyphicon-plus"
                style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <!-- دکمه حذف -->
    <div class="form-group float-right" style="position: relative;right: -10px;top:18px">
        <button type="button" class="btn rounded-circle position-relative border-new-color" id="btn-remove-project"
            style="top:25px;background: #320069;border:1px solid #320069;width:40px;height:40px;"><span class="glyphicon glyphicon-minus"
                style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <h5 class="position-relative panel-title p-2" style="<?php echo $__env->yieldContent('stylepanel-8'); ?>;top:0px;">پروژه</h5>
    <div class="jumbotron w-100 border-2 p-xs-1 p-5 mb-6 br-4 shadow" id="divproject" style="<?php echo $__env->yieldContent('backpanel-8'); ?>">
    <h5 class="text-center" style="font-size: 14px !important;position: relative;top: -15px;color:#222;margin-right: 20px;margin-left: 20px;">برای نوشتن پروژه‌ها ترتیب زمانی معکوس را رعایت کنید و از آخرین پروژه‌ای که داشتید یا دارید، شروع به نوشتن کنید.</h5>

        <!-- hidden input -->

        <input type="hidden" name="projectName1Z" value="<?php echo $__env->yieldContent('pn1'); ?>" id="projecName1Z"/>
        <input type="hidden" name="projecttStartMonth1Z" value="<?php echo $__env->yieldContent('psm1'); ?>" id="projectStartMonth1Z"/>
        <input type="hidden" name="projecttStartYear1Z" value="<?php echo $__env->yieldContent('psy1'); ?>" id="projectStartYear1Z"/>
        <input type="hidden" name="projectEndMonth1Z" value="<?php echo $__env->yieldContent('pem1'); ?>" id="projectEndMonth1Z"/>
        <input type="hidden" name="projectEndYear1Z" value="<?php echo $__env->yieldContent('pey1'); ?>" id="projectEndYear1Z"/>
        <input type="hidden" name="projectEmployer1Z" value="<?php echo $__env->yieldContent('pe1'); ?>" id="projectEmployer1Z"/>
        <input type="hidden" name="projectLink1Z" value="<?php echo $__env->yieldContent('pl1'); ?>" id="projectLink1Z"/>

        <input type="hidden" name="projecName2Z" value="<?php echo $__env->yieldContent('pn2'); ?>" id="projecName2Z"/>
        <input type="hidden" name="projectStartMonth2Z" value="<?php echo $__env->yieldContent('psm2'); ?>" id="projectStartMonth2Z"/>
        <input type="hidden" name="projectStartYear2Z" value="<?php echo $__env->yieldContent('psy2'); ?>" id="projectStartYear2Z"/>
        <input type="hidden" name="projectEndMonth2Z" value="<?php echo $__env->yieldContent('pem2'); ?>" id="projectEndMonth2Z"/>
        <input type="hidden" name="projectEndYear2Z" value="<?php echo $__env->yieldContent('pey2'); ?>" id="projectEndYear2Z"/>
        <input type="hidden" name="projectEmployer2Z" value="<?php echo $__env->yieldContent('pe2'); ?>" id="projectEmployer2Z"/>
        <input type="hidden" name="projectLink2Z" value="<?php echo $__env->yieldContent('pl2'); ?>" id="projectLink2Z"/>

        <input type="hidden" name="projecName3Z" value="<?php echo $__env->yieldContent('pn3'); ?>" id="projecName3Z"/>
        <input type="hidden" name="projectStartMonth3Z" value="<?php echo $__env->yieldContent('psm3'); ?>" id="projectStartMonth3Z"/>
        <input type="hidden" name="projectStartYear3Z" value="<?php echo $__env->yieldContent('psy3'); ?>" id="projectStartYear3Z"/>
        <input type="hidden" name="projectEndMonth3Z" value="<?php echo $__env->yieldContent('pem3'); ?>" id="projectEndMonth3Z"/>
        <input type="hidden" name="projectEndYear3Z" value="<?php echo $__env->yieldContent('pey3'); ?>" id="projectEndYear3Z"/>
        <input type="hidden" name="projectEmployer3Z" value="<?php echo $__env->yieldContent('pe3'); ?>" id="projectEmployer3Z"/>
        <input type="hidden" name="projectLink3Z" value="<?php echo $__env->yieldContent('pl3'); ?>" id="projectLink3Z"/>



        <!-- End hidden input -->
        <div class="form-row" id="formproject0">

            <!-- عنوان پروژه -->
            <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 175px;">
                <label for="projecName0">عنوان پروژه<span class="text-danger">*</span></label>
                <input type="text" name="projecName0" value="<?php echo $__env->yieldContent('projectName0'); ?>" id="projecName0" tabindex="80" size="30"
                    class="form-control border-new-color" required>
            </div>

            <!-- تاریخ شروع -->
            <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 160px;">
                <label for="projectName0">تاریخ شروع<span class="text-danger">*</span></label>
                <div class="mobile-input">
                    <select required class="form-control border-new-color w-auto float-left mx-1" tabindex="81"
                        name="projectStartMonth0" id="projectStartMonth0">
                        <option value="" disabled="" selected="">ماه</option>
                        <option <?php echo e(old('projectStartMonth0')=='1' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='1' ? 'selected' : ''); ?> value="1">01</option>
                        <option <?php echo e(old('projectStartMonth0')=='2' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='2' ? 'selected' : ''); ?> value="2">02</option>
                        <option <?php echo e(old('projectStartMonth0')=='3' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='3' ? 'selected' : ''); ?> value="3">03</option>
                        <option <?php echo e(old('projectStartMonth0')=='4' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='4' ? 'selected' : ''); ?> value="4">04</option>
                        <option <?php echo e(old('projectStartMonth0')=='5' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='5' ? 'selected' : ''); ?> value="5">05</option>
                        <option <?php echo e(old('projectStartMonth0')=='6' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='6' ? 'selected' : ''); ?> value="6">06</option>
                        <option <?php echo e(old('projectStartMonth0')=='7' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='7' ? 'selected' : ''); ?> value="7">07</option>
                        <option <?php echo e(old('projectStartMonth0')=='8' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='8' ? 'selected' : ''); ?> value="8">08</option>
                        <option <?php echo e(old('projectStartMonth0')=='9' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='9' ? 'selected' : ''); ?>  value="9">09</option>
                        <option <?php echo e(old('projectStartMonth0')=='10' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='10' ? 'selected' : ''); ?> value="10">10</option>
                        <option <?php echo e(old('projectStartMonth0')=='11' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='11' ? 'selected' : ''); ?> value="11">11</option>
                        <option <?php echo e(old('projectStartMonth0')=='12' ? 'selected' : ''); ?> <?php echo e(@$projectmonthstart=='12' ? 'selected' : ''); ?> value="12">12</option>
                    </select>


                    <input required min="1300" max="1399" pattern="13[0-9]+[0-9]$" data-score="2" tabindex="82"
                        class="form-control border-new-color w-auto float-left mx-1 mobile-input" placeholder="سال" maxlength="4"
                        style="width: 85px !important;" list="year-list-s" id="projectStartYear0" name="projectStartYear0" value="<?php echo $__env->yieldContent('projectStartYear_0'); ?>">


                    <datalist id="year-list-s">
                        <option value="1300">1300</option>
                        <option value="1301">1301</option>
                        <option value="1302">1302</option>
                        <option value="1303">1303</option>
                        <option value="1304">1304</option>
                        <option value="1305">1305</option>
                        <option value="1306">1306</option>
                        <option value="1307">1307</option>
                        <option value="1308">1308</option>
                        <option value="1309">1309</option>
                        <option value="1310">1310</option>
                        <option value="1311">1311</option>
                        <option value="1312">1312</option>
                        <option value="1313">1313</option>
                        <option value="1314">1314</option>
                        <option value="1315">1315</option>
                        <option value="1316">1316</option>
                        <option value="1317">1317</option>
                        <option value="1318">1318</option>
                        <option value="1319">1319</option>
                        <option value="1320">1320</option>
                        <option value="1321">1321</option>
                        <option value="1322">1322</option>
                        <option value="1323">1323</option>
                        <option value="1324">1324</option>
                        <option value="1325">1325</option>
                        <option value="1326">1326</option>
                        <option value="1327">1327</option>
                        <option value="1328">1328</option>
                        <option value="1329">1329</option>
                        <option value="1330">1330</option>
                        <option value="1331">1331</option>
                        <option value="1332">1332</option>
                        <option value="1333">1333</option>
                        <option value="1334">1334</option>
                        <option value="1335">1335</option>
                        <option value="1336">1336</option>
                        <option value="1337">1337</option>
                        <option value="1338">1338</option>
                        <option value="1339">1339</option>
                        <option value="1340">1340</option>
                        <option value="1341">1341</option>
                        <option value="1342">1342</option>
                        <option value="1343">1343</option>
                        <option value="1344">1344</option>
                        <option value="1345">1345</option>
                        <option value="1346">1346</option>
                        <option value="1347">1347</option>
                        <option value="1348">1348</option>
                        <option value="1349">1349</option>
                        <option value="1350">1350</option>
                        <option value="1351">1351</option>
                        <option value="1352">1352</option>
                        <option value="1353">1353</option>
                        <option value="1354">1354</option>
                        <option value="1355">1355</option>
                        <option value="1356">1356</option>
                        <option value="1357">1357</option>
                        <option value="1358">1358</option>
                        <option value="1359">1359</option>
                        <option value="1360">1360</option>
                        <option value="1361">1361</option>
                        <option value="1362">1362</option>
                        <option value="1363">1363</option>
                        <option value="1364">1364</option>
                        <option value="1365">1365</option>
                        <option value="1366">1366</option>
                        <option value="1367">1367</option>
                        <option value="1368">1368</option>
                        <option value="1369">1369</option>
                        <option value="1370">1370</option>
                        <option value="1371">1371</option>
                        <option value="1372">1372</option>
                        <option value="1373">1373</option>
                        <option value="1374">1374</option>
                        <option value="1375">1375</option>
                        <option value="1376">1376</option>
                        <option value="1377">1377</option>
                        <option value="1378">1378</option>
                        <option value="1379">1379</option>
                        <option value="1380">1380</option>
                        <option value="1381">1381</option>
                        <option value="1382">1382</option>
                        <option value="1383">1383</option>
                        <option value="1384">1384</option>
                        <option value="1385">1385</option>
                        <option value="1386">1386</option>
                        <option value="1387">1387</option>
                        <option value="1388">1388</option>
                        <option value="1389">1389</option>
                        <option value="1390">1390</option>
                        <option value="1391">1391</option>
                        <option value="1392">1392</option>
                        <option value="1393">1393</option>
                        <option value="1394">1394</option>
                        <option value="1395">1395</option>
                        <option value="1396">1396</option>
                        <option value="1397">1397</option>
                        <option value="1398">1398</option>
                        <option value="1399">1399</option>
                    </datalist>
                </div>
            </div>

            <!-- تاریخ پایان -->
            <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 160px;">
                <label for="projectName0">تاریخ پایان<span class="text-danger">*</span></label>
                <div class="mobile-input">
                    <select required class="form-control border-new-color w-auto float-left mx-1" tabindex="83"
                        name="projectEndMonth0" id="projectEndMonth0">
                        <option value="" disabled="" selected="">ماه</option>
                        <option <?php echo e(old('projectEndMonth0')=='1' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='1' ? 'selected' : ''); ?> value="1">01</option>
                        <option <?php echo e(old('projectEndMonth0')=='2' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='2' ? 'selected' : ''); ?> value="2">02</option>
                        <option <?php echo e(old('projectEndMonth0')=='3' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='3' ? 'selected' : ''); ?> value="3">03</option>
                        <option <?php echo e(old('projectEndMonth0')=='4' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='4' ? 'selected' : ''); ?> value="4">04</option>
                        <option <?php echo e(old('projectEndMonth0')=='5' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='5' ? 'selected' : ''); ?> value="5">05</option>
                        <option <?php echo e(old('projectEndMonth0')=='6' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='6' ? 'selected' : ''); ?> value="6">06</option>
                        <option <?php echo e(old('projectEndMonth0')=='7' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='7' ? 'selected' : ''); ?> value="7">07</option>
                        <option <?php echo e(old('projectEndMonth0')=='8' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='8' ? 'selected' : ''); ?> value="8">08</option>
                        <option <?php echo e(old('projectEndMonth0')=='9' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='9' ? 'selected' : ''); ?> value="9">09</option>
                        <option <?php echo e(old('projectEndMonth0')=='10' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='10' ? 'selected' : ''); ?> value="10">10</option>
                        <option <?php echo e(old('projectEndMonth0')=='11' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='11' ? 'selected' : ''); ?> value="11">11</option>
                        <option <?php echo e(old('projectEndMonth0')=='12' ? 'selected' : ''); ?> <?php echo e(@$projectmonthend=='12' ? 'selected' : ''); ?> value="12">12</option>
                    </select>


                    <input required min="1300" max="1399" pattern="13[0-9]+[0-9]$" data-score="2" tabindex="84"
                        class="form-control border-new-color w-auto float-left mx-1 mobile-input" placeholder="سال" maxlength="4"
                        style="width: 85px !important;" list="year-list-e" id="projectEndYear0" name="projectEndYear0"
                        value="<?php echo $__env->yieldContent('projectEndYear_0'); ?>">


                    <datalist id="year-list-e">
                        <option value="1300">1300</option>
                        <option value="1301">1301</option>
                        <option value="1302">1302</option>
                        <option value="1303">1303</option>
                        <option value="1304">1304</option>
                        <option value="1305">1305</option>
                        <option value="1306">1306</option>
                        <option value="1307">1307</option>
                        <option value="1308">1308</option>
                        <option value="1309">1309</option>
                        <option value="1310">1310</option>
                        <option value="1311">1311</option>
                        <option value="1312">1312</option>
                        <option value="1313">1313</option>
                        <option value="1314">1314</option>
                        <option value="1315">1315</option>
                        <option value="1316">1316</option>
                        <option value="1317">1317</option>
                        <option value="1318">1318</option>
                        <option value="1319">1319</option>
                        <option value="1320">1320</option>
                        <option value="1321">1321</option>
                        <option value="1322">1322</option>
                        <option value="1323">1323</option>
                        <option value="1324">1324</option>
                        <option value="1325">1325</option>
                        <option value="1326">1326</option>
                        <option value="1327">1327</option>
                        <option value="1328">1328</option>
                        <option value="1329">1329</option>
                        <option value="1330">1330</option>
                        <option value="1331">1331</option>
                        <option value="1332">1332</option>
                        <option value="1333">1333</option>
                        <option value="1334">1334</option>
                        <option value="1335">1335</option>
                        <option value="1336">1336</option>
                        <option value="1337">1337</option>
                        <option value="1338">1338</option>
                        <option value="1339">1339</option>
                        <option value="1340">1340</option>
                        <option value="1341">1341</option>
                        <option value="1342">1342</option>
                        <option value="1343">1343</option>
                        <option value="1344">1344</option>
                        <option value="1345">1345</option>
                        <option value="1346">1346</option>
                        <option value="1347">1347</option>
                        <option value="1348">1348</option>
                        <option value="1349">1349</option>
                        <option value="1350">1350</option>
                        <option value="1351">1351</option>
                        <option value="1352">1352</option>
                        <option value="1353">1353</option>
                        <option value="1354">1354</option>
                        <option value="1355">1355</option>
                        <option value="1356">1356</option>
                        <option value="1357">1357</option>
                        <option value="1358">1358</option>
                        <option value="1359">1359</option>
                        <option value="1360">1360</option>
                        <option value="1361">1361</option>
                        <option value="1362">1362</option>
                        <option value="1363">1363</option>
                        <option value="1364">1364</option>
                        <option value="1365">1365</option>
                        <option value="1366">1366</option>
                        <option value="1367">1367</option>
                        <option value="1368">1368</option>
                        <option value="1369">1369</option>
                        <option value="1370">1370</option>
                        <option value="1371">1371</option>
                        <option value="1372">1372</option>
                        <option value="1373">1373</option>
                        <option value="1374">1374</option>
                        <option value="1375">1375</option>
                        <option value="1376">1376</option>
                        <option value="1377">1377</option>
                        <option value="1378">1378</option>
                        <option value="1379">1379</option>
                        <option value="1380">1380</option>
                        <option value="1381">1381</option>
                        <option value="1382">1382</option>
                        <option value="1383">1383</option>
                        <option value="1384">1384</option>
                        <option value="1385">1385</option>
                        <option value="1386">1386</option>
                        <option value="1387">1387</option>
                        <option value="1388">1388</option>
                        <option value="1389">1389</option>
                        <option value="1390">1390</option>
                        <option value="1391">1391</option>
                        <option value="1392">1392</option>
                        <option value="1393">1393</option>
                        <option value="1394">1394</option>
                        <option value="1395">1395</option>
                        <option value="1396">1396</option>
                        <option value="1397">1397</option>
                        <option value="1398">1398</option>
                        <option value="1399">1399</option>
                    </datalist>
                </div>
            </div>

            <!-- کارفرما -->
            <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 175px;">
                <label for="projecEmployer0">کارفرما<span class="text-danger"></span></label>
                <input type="text" name="projectEmployer0" id="projectEmployer0" value="<?php echo $__env->yieldContent('projectEmployer_0'); ?>" tabindex="85" size="25"
                    class="form-control border-new-color">
            </div>

            <!-- لینک پروژه -->
            <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 175px;">
                <label for="projectLink0">لینک پروژه<span class="text-danger"></span></label>
                <input type="url" name="projectLink0" id="projectLink0" value="<?php echo $__env->yieldContent('projectLink_0'); ?>" tabindex="86" size="37"
                    class="form-control border-new-color">
            </div>
        </div>
    </div>
<script>
$("#projecName0").change(function () {
    $("#projectTitlex0").text($("#projecName0").val());
});
$("#projectStartMonth0").change(function () {
    $("#textStartP0").text('شروع: ');
    var PSM = $("#projectStartMonth0").val();
    if(PSM == 1)
    {
        $("#projectMEx0").text('فروردین');
    }
    if(PSM == 2)
    {
        $("#projectMEx0").text('اردیبهشت');
    }
    if(PSM == 3)
    {
        $("#projectMEx0").text('خرداد');
    }
    if(PSM == 4)
    {
        $("#projectMEx0").text('تیر');
    }
    if(PSM == 5)
    {
        $("#projectMEx0").text('مرداد');
    }
    if(PSM == 6)
    {
        $("#projectMEx0").text('شهریور');
    }
    if(PSM == 7)
    {
        $("#projectMEx0").text('مهر');
    }
    if(PSM == 8)
    {
        $("#projectMEx0").text('آبان');
    }
    if(PSM == 9)
    {
        $("#projectMEx0").text('آذر');
    }
    if(PSM == 10)
    {
        $("#projectMEx0").text('دی');
    }
    if(PSM == 11)
    {
        $("#projectMEx0").text('بهمن');
    }
    if(PSM == 12)
    {
        $("#projectMEx0").text('اسفند');
    }
    
    $("#projectStartYear0").focus();
});
$("#projectStartYear0").change(function () {
    $("#projectYEx0").text($("#projectStartYear0").val());
    $("#projectEndMonth0").focus();
});
$("#projectEndMonth0").change(function () {
    $("#textEndP0").text('پایان: ');
    var PEM = $("#projectEndMonth0").val();
    if(PEM == 1)
    {
        $("#projectMEEx0").text('فروردین');
    }
    if(PEM == 2)
    {
        $("#projectMEEx0").text('اردیبهشت');
    }
    if(PEM == 3)
    {
        $("#projectMEEx0").text('خرداد');
    }
    if(PEM == 4)
    {
        $("#projectMEEx0").text('تیر');
    }
    if(PEM == 5)
    {
        $("#projectMEEx0").text('مرداد');
    }
    if(PEM == 6)
    {
        $("#projectMEEx0").text('شهریور');
    }
    if(PEM == 7)
    {
        $("#projectMEEx0").text('مهر');
    }
    if(PEM == 8)
    {
        $("#projectMEEx0").text('آبان');
    }
    if(PEM == 9)
    {
        $("#projectMEEx0").text('آذر');
    }
    if(PEM == 10)
    {
        $("#projectMEEx0").text('دی');
    }
    if(PEM == 11)
    {
        $("#projectMEEx0").text('بهمن');
    }
    if(PEM == 12)
    {
        $("#projectMEEx0").text('اسفند');
    }
    $("#projectEndYear0").focus();
});
$("#projectEndYear0").change(function () {
    $("#projectYEEx0").text($("#projectEndYear0").val());
    $("#projectEmployer0").focus();
});
$("#projectEmployer0").change(function () {
    $("#ProjectEmployerx0").text($("#projectEmployer0").val());
    $("#EmployerText0").text('کارفرما :');
});
$("#projectLink0").change(function () {
    $("#ProjectLink0").text('لینک پروژه');
    $("#ProjectLink0").attr("href",$("#projectLink0").val());
});
</script>
<script>
$("#projecName1").change(function () {
    $("#projectTitlex1").text($("#projecName1").val());
});
$("#projectStartMonth1").change(function () {
    $("#textStartP1").text('شروع: ');
    var PSM = $("#projectStartMonth1").val();
    if(PSM == 1)
    {
        $("#projectMEx1").text('فروردین');
    }
    if(PSM == 2)
    {
        $("#projectMEx1").text('اردیبهشت');
    }
    if(PSM == 3)
    {
        $("#projectMEx1").text('خرداد');
    }
    if(PSM == 4)
    {
        $("#projectMEx1").text('تیر');
    }
    if(PSM == 5)
    {
        $("#projectMEx1").text('مرداد');
    }
    if(PSM == 6)
    {
        $("#projectMEx1").text('شهریور');
    }
    if(PSM == 7)
    {
        $("#projectMEx1").text('مهر');
    }
    if(PSM == 8)
    {
        $("#projectMEx1").text('آبان');
    }
    if(PSM == 9)
    {
        $("#projectMEx1").text('آذر');
    }
    if(PSM == 10)
    {
        $("#projectMEx1").text('دی');
    }
    if(PSM == 11)
    {
        $("#projectMEx1").text('بهمن');
    }
    if(PSM == 12)
    {
        $("#projectMEx1").text('اسفند');
    }
    
    $("#projectStartYear1").focus();
});
$("#projectStartYear1").change(function () {
    $("#projectYEx1").text($("#projectStartYear1").val());
    $("#projectEndMonth1").focus();
});
$("#projectEndMonth1").change(function () {
    $("#textEndP1").text('پایان: ');
    var PEM = $("#projectEndMonth1").val();
    if(PEM == 1)
    {
        $("#projectMEEx1").text('فروردین');
    }
    if(PEM == 2)
    {
        $("#projectMEEx1").text('اردیبهشت');
    }
    if(PEM == 3)
    {
        $("#projectMEEx1").text('خرداد');
    }
    if(PEM == 4)
    {
        $("#projectMEEx1").text('تیر');
    }
    if(PEM == 5)
    {
        $("#projectMEEx1").text('مرداد');
    }
    if(PEM == 6)
    {
        $("#projectMEEx1").text('شهریور');
    }
    if(PEM == 7)
    {
        $("#projectMEEx1").text('مهر');
    }
    if(PEM == 8)
    {
        $("#projectMEEx1").text('آبان');
    }
    if(PEM == 9)
    {
        $("#projectMEEx1").text('آذر');
    }
    if(PEM == 10)
    {
        $("#projectMEEx1").text('دی');
    }
    if(PEM == 11)
    {
        $("#projectMEEx1").text('بهمن');
    }
    if(PEM == 12)
    {
        $("#projectMEEx1").text('اسفند');
    }
    $("#projectEndYear1").focus();
});
$("#projectEndYear1").change(function () {
    $("#projectYEEx1").text($("#projectEndYear1").val());
    $("#projectEmployer1").focus();
});
$("#projectEmployer1").change(function () {
    $("#ProjectEmployerx1").text($("#projectEmployer1").val());
    $("#EmployerText1").text('کارفرما :');
});
$("#projectLink1").change(function () {
    $("#ProjectLink1").text('لینک پروژه');
    $("#ProjectLink1").attr("href",$("#projectLink1").val());
});
</script>
<script>
$("#projecName2").change(function () {
    $("#projectTitlex2").text($("#projecName2").val());
});
$("#projectStartMonth2").change(function () {
    $("#textStartP2").text('شروع: ');
    var PSM = $("#projectStartMonth2").val();
    if(PSM == 2)
    {
        $("#projectMEx2").text('فروردین');
    }
    if(PSM == 2)
    {
        $("#projectMEx2").text('اردیبهشت');
    }
    if(PSM == 3)
    {
        $("#projectMEx2").text('خرداد');
    }
    if(PSM == 4)
    {
        $("#projectMEx2").text('تیر');
    }
    if(PSM == 5)
    {
        $("#projectMEx2").text('مرداد');
    }
    if(PSM == 6)
    {
        $("#projectMEx2").text('شهریور');
    }
    if(PSM == 7)
    {
        $("#projectMEx2").text('مهر');
    }
    if(PSM == 8)
    {
        $("#projectMEx2").text('آبان');
    }
    if(PSM == 9)
    {
        $("#projectMEx2").text('آذر');
    }
    if(PSM == 10)
    {
        $("#projectMEx2").text('دی');
    }
    if(PSM == 11)
    {
        $("#projectMEx1").text('بهمن');
    }
    if(PSM == 12)
    {
        $("#projectMEx2").text('اسفند');
    }
    
    $("#projectStartYear2").focus();
});
$("#projectStartYear2").change(function () {
    $("#projectYEx2").text($("#projectStartYear2").val());
    $("#projectEndMonth2").focus();
});
$("#projectEndMonth2").change(function () {
    $("#textEndP2").text('پایان: ');
    var PEM = $("#projectEndMonth2").val();
    if(PEM == 2)
    {
        $("#projectMEEx2").text('فروردین');
    }
    if(PEM == 2)
    {
        $("#projectMEEx2").text('اردیبهشت');
    }
    if(PEM == 3)
    {
        $("#projectMEEx2").text('خرداد');
    }
    if(PEM == 4)
    {
        $("#projectMEEx2").text('تیر');
    }
    if(PEM == 5)
    {
        $("#projectMEEx2").text('مرداد');
    }
    if(PEM == 6)
    {
        $("#projectMEEx2").text('شهریور');
    }
    if(PEM == 7)
    {
        $("#projectMEEx2").text('مهر');
    }
    if(PEM == 8)
    {
        $("#projectMEEx2").text('آبان');
    }
    if(PEM == 9)
    {
        $("#projectMEEx2").text('آذر');
    }
    if(PEM == 10)
    {
        $("#projectMEEx2").text('دی');
    }
    if(PEM == 11)
    {
        $("#projectMEEx2").text('بهمن');
    }
    if(PEM == 12)
    {
        $("#projectMEEx2").text('اسفند');
    }
    $("#projectEndYear2").focus();
});
$("#projectEndYear2").change(function () {
    $("#projectYEEx2").text($("#projectEndYear2").val());
    $("#projectEmployer2").focus();
});
$("#projectEmployer2").change(function () {
    $("#ProjectEmployerx2").text($("#projectEmployer2").val());
    $("#EmployerText2").text('کارفرما :');
});
$("#projectLink2").change(function () {
    $("#ProjectLink2").text('لینک پروژه');
    $("#ProjectLink2").attr("href",$("#projectLink2").val());
});
</script>
<script>
$("#projecName3").change(function () {
    $("#projectTitlex3").text($("#projecName3").val());
});
$("#projectStartMonth3").change(function () {
    $("#textStartP3").text('شروع: ');
    var PSM = $("#projectStartMonth3").val();
    if(PSM == 1)
    {
        $("#projectMEx3").text('فروردین');
    }
    if(PSM == 2)
    {
        $("#projectMEx3").text('اردیبهشت');
    }
    if(PSM == 3)
    {
        $("#projectMEx3").text('خرداد');
    }
    if(PSM == 4)
    {
        $("#projectMEx3").text('تیر');
    }
    if(PSM == 5)
    {
        $("#projectMEx3").text('مرداد');
    }
    if(PSM == 6)
    {
        $("#projectMEx3").text('شهریور');
    }
    if(PSM == 7)
    {
        $("#projectMEx3").text('مهر');
    }
    if(PSM == 8)
    {
        $("#projectMEx3").text('آبان');
    }
    if(PSM == 9)
    {
        $("#projectMEx3").text('آذر');
    }
    if(PSM == 10)
    {
        $("#projectMEx3").text('دی');
    }
    if(PSM == 11)
    {
        $("#projectMEx3").text('بهمن');
    }
    if(PSM == 12)
    {
        $("#projectMEx3").text('اسفند');
    }
    
    $("#projectStartYear3").focus();
});
$("#projectStartYear3").change(function () {
    $("#projectYEx3").text($("#projectStartYear3").val());
    $("#projectEndMonth3").focus();
});
$("#projectEndMonth3").change(function () {
    $("#textEndP3").text('پایان: ');
    var PEM = $("#projectEndMonth3").val();
    if(PEM == 1)
    {
        $("#projectMEEx3").text('فروردین');
    }
    if(PEM == 2)
    {
        $("#projectMEEx3").text('اردیبهشت');
    }
    if(PEM == 3)
    {
        $("#projectMEEx3").text('خرداد');
    }
    if(PEM == 4)
    {
        $("#projectMEEx3").text('تیر');
    }
    if(PEM == 5)
    {
        $("#projectMEEx3").text('مرداد');
    }
    if(PEM == 6)
    {
        $("#projectMEEx3").text('شهریور');
    }
    if(PEM == 7)
    {
        $("#projectMEEx3").text('مهر');
    }
    if(PEM == 8)
    {
        $("#projectMEEx3").text('آبان');
    }
    if(PEM == 9)
    {
        $("#projectMEEx3").text('آذر');
    }
    if(PEM == 10)
    {
        $("#projectMEEx3").text('دی');
    }
    if(PEM == 11)
    {
        $("#projectMEEx3").text('بهمن');
    }
    if(PEM == 12)
    {
        $("#projectMEEx3").text('اسفند');
    }
    $("#projectEndYear3").focus();
});
$("#projectEndYear3").change(function () {
    $("#projectYEEx3").text($("#projectEndYear3").val());
    $("#projectEmployer3").focus();
});
$("#projectEmployer3").change(function () {
    $("#ProjectEmployerx3").text($("#projectEmployer3").val());
    $("#EmployerText3").text('کارفرما :');
});
$("#projectLink3").change(function () {
    $("#ProjectLink3").text('لینک پروژه');
    $("#ProjectLink3").attr("href",$("#projectLink3").val());
});
</script>




<script src="<?php echo e(asset('js/add-p.js')); ?>"></script>
<?php /**PATH /home/emzaapp1/mysite/resources/views/component/projects.blade.php ENDPATH**/ ?>