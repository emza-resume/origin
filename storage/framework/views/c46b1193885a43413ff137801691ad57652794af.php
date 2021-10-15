<?php $__env->startSection('style'); ?>

.pagination
{
direction: rtl !important;
padding-right: 0px;
margin-top: 30px;
margin-right: -4px;
}

ul.pagination li {
display: inline;
font-size: 14px;
font-weight: bold;

}

ul.pagination li a {

color: black;
padding: 8px 8px;
text-decoration: none;
transition: background-color .3s;
border: 1px solid #ddd;
margin: 4px;
padding-left: 15px;
padding-right: 15px;
border-radius: 5px;

}

ul.pagination li a.active {
background-color: #4CAF50;
padding: 8px 8px;
margin: 4px;
color: white;
border: 1px solid #4CAF50;

}

ul.pagination li.active {
/*background-color: #4CAF50;*/
background-color: #6435c9;
padding: 8px 8px;
margin: 4px;
color: white;
border: 1px solid #4CAF50;
padding-left: 15px;
padding-right: 15px;
border-radius: 5px;
}

/*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #eee;}

ul.pagination li.disabled {
/*background-color: #cccccc;*/
color: #ddd;
padding: 8px 8px;
border: 1px solid #ddd;
margin: 4px;
padding-left: 15px;
padding-right: 15px;
border-radius: 5px;
}
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<form method="post" action="/administrator/update-location">
<?php echo csrf_field(); ?>
    <input type="hidden" name="batch" value="<?php echo e($getbase->BaseBatch); ?>">
    <div style="text-align:center;margin:90px;margin-top:110px;" >
    <table style="margin: 0 auto;">
        <tr>
            <td>
                <div class="ui disabled input">
                    <input value="<?php echo e($getbase->BaseName); ?> <?php echo e($getbase->BaseFamily); ?>">
                </div>
            </td>
            <td>
                <span>&nbsp;&nbsp;نام</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="ui disabled input">
                    <input value="<?php echo e($getbase_b->BaseCity); ?>">
                </div>
            </td>
            <td>
                <span>&nbsp;&nbsp;شهر</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="ui input focus">
                    <input value="<?php echo e($getbase_b->CityLat); ?>"  style="text-align:center" name="lat">
                </div>
            </td>
            <td>
                <span>&nbsp;&nbsp;(Lat) عرض جغرافیایی</span>
            </td>
        </tr>
        <tr>
            <td>
                    <div class="ui input focus">
                        <input value="<?php echo e($getbase_b->CityLong); ?>"  style="text-align:center" name="long">
                    </div>
            </td>
            <td>
                <span>&nbsp;&nbsp;(Long) طول جغرافیایی</span>
            </td>
        </tr>
    </table>
    <br>
    <button type="submit" class="ui blue button">ثبت تغییرات</button>
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/location.blade.php ENDPATH**/ ?>