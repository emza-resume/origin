@extends('admin.home')
@section('style')

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
@endsection

@section('body')

<table class="ui red table striped" style="margin-top: 0px;">
    <thead class="">
        <tr class="">
            <th class="center aligned">عملیات</th>
            <th class="center aligned">تاریخ ایجاد رزومه</th>
            <th class="center aligned">شماره موبایل</th>
            <th class="center aligned">نام و نام‌خانوادگی</th>
            <th class="center aligned">شماره رزومه</th>
            <th class="center aligned">آواتار</th>
            <th class="center aligned">ردیف</th>
        </tr>
    </thead>
    <tbody class="">
    <?php
        
        @$page = $_GET['page'];

        $nump = @$page - 1;
        $i = 0;
        if(@$page == 1 || $page == null)
        {
            $i = 0;
        }
        else
        {
            $i = ($nump * 6); 
        }
        
         ?>
        @foreach($getbase as $base)
            <?php $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($base->created_at);
          $updated_at = new Verta();
          $updated_at = Verta::instance($base->updated_at);
      ?>

            <tr class="">
                <td class="top-3 center aligned">
                    <a class="mini ui red button" href="/administrator/move-to-trash/{{ $base->Baseid }}"><i
                            style="margin-left: 0px;font-size: 13px;margin-right: 0px;"
                            class="trash icon icon-semantic"></i></a>
                    <a class="mini ui blue button" href="/administrator/cv/{{ $base->BaseBatch }}"><i
                            style="margin-left: 0px;font-size: 13px;margin-right: 0px;"
                            class="file icon icon-semantic"></i></a>
                    <button class="mini ui green button"
                        uk-toggle="target: #modal-image-change-{{ $base->Baseid }}"><i
                            style="margin-left: 0px;font-size: 13px;margin-right: 0px;"
                            class="image icon icon-semantic"></i></button>
                            <a href="/administrator/massage/{{ $base->BaseUserid }}" class="mini ui orange button"><i
                            style="margin-left: 0px;font-size: 13px;margin-right: 0px;"
                            class="envelope icon icon-semantic"></i></a>


                    <!-- This is the modal -->
                    <div id="modal-image-change-{{ $base->Baseid }}" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <p> <img style="width:270px;height:360px;" class="uk-align-center"
                                    src="{{ asset($base->BaseAvatar) }}" alt=""></p>
                            <p class="uk-text-center">به چه نوع آوتاری تغییر پیدا کند؟</p>
                            <p class="uk-text-center">
                                <br>
                                <button class=" ui  button uk-modal-close" type="button">لغو</button>

                                <a class="ui red button" href="/administrator/to-man/1000{{ $base->Baseid }}">مرد</a>
                                <a class="ui blue button"
                                    href="/administrator/to-woman/1000{{ $base->Baseid }}">زن</a>
                            </p>
                        </div>
                    </div>
                </td>
                <td class="top-3 center aligned">{{ $created_at }}</td>
                <td class="top-3 center aligned">{{ $base->BaseMobile }}</td>
                <td class="top-3 center aligned"><div style="width: 115px;overflow: hidden;">{{ $base->BaseName }} {{ $base->BaseFamily }}</div></td>
                <td class="top-3 center aligned">1000{{ $base->Baseid }}</td>
                <td class="top-3 center aligned"><img style="width:25px;height:33px;"
                        uk-toggle="target: #modal-{{ $base->Baseid }}" src="{{ asset($base->BaseAvatar) }}" alt="">
                </td>
                <td class="top-3 center aligned">{{ $i }}</td>
            </tr>
            <div id="modal-{{ $base->Baseid }}" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <img style="width:320px;height:410px;" uk-toggle="target: #modal-avatar" class="uk-align-center"
                        src="{{ asset($base->BaseAvatar) }}" alt="">
                    <button class="uk-button uk-button-default uk-modal-close uk-align-center" type="button">بستن
                        کادر</button>
                </div>
            </div>
        @endforeach
    </tbody>
</table>

{{ $getbase->render() }}


@endsection
