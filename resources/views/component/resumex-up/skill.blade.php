<div class="p-5" id="svazir" style="position:relative;top:-145px; !important;padding-right: 50px !important;">
    <span style="font-weight:bold;font-size: 12px;" class="float-left" id="textskills">مهارت‌های تجربی: </span>
    @foreach($getskills as $skills)
    <div>
    <?php
     if($skills->SkillsLevel == 'کم') 
     {
         $level = 1;
     }
     if($skills->SkillsLevel == 'خیلی‌کم') 
     {
         $level = 2;
     }
     if($skills->SkillsLevel == 'متوسط') 
     {
         $level = 3;
     }
     if($skills->SkillsLevel == 'زیاد') 
     {
         $level = 4;
     }
     if($skills->SkillsLevel == 'خیلی‌زیاد') 
     {
         $level = 5;
     }
     
     ?>
        <span style="font-size: 13px;color:#020063 !important" class="float-left mx-3" id="SkillTitlex0">{{ $skills->SkillsName }}</span>
        <div class="float-left" style="margin-top: 5px;position: relative;left: 8px;margin-top: 5px;@if($skills->SkillsName == '')visibility:hidden; @endif" id="SkillRatingx0">
        @for($i=0;$i < $level;$i++)
            <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
        @endfor
        <?php $k = 5 - $level; ?>
        @for($i=0;$i<$k;$i++)
            <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
        @endfor
        </div>
    </div>
    @endforeach
</div>
