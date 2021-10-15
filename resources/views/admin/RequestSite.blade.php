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
            <th class="center aligned">سایت درخواست‌شده</th>
            <th class="center aligned">موقعیت جغرافیایی</th>
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
        <?php
          $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($base->created_at);
          $updated_at = new Verta();
          $updated_at = Verta::instance($base->updated_at);
        ?>

            <tr class="">
                <td class="top-3 center aligned">
                @if($base->RequestSite == 1)
                <!-- <a class="mini ui blue button" href="/administrator/verify-site/{{ $base->Baseid }}">تایید</a> -->
                <a class="mini ui green button" href="/administrator/verify-site-4/{{ $base->Baseid }}">تایید فوری</a>

                @endif
                @if($base->RequestSite == 2)
                <span class="mini ui green" style="color:darkgreen">تایید شده و منتظر پرداخت</span>
                @endif
                @if($base->RequestSite == 3)
                <a class="mini ui blue button" href="/administrator/enable-site/{{ $base->Baseid }}">فعال‌کردن</a>
                <span class="mini ui green" style="font-weight:bold;color:darkgreen">پرداخت شده</span>
                @endif
                @if($base->RequestSite == 4)
                <span class="mini ui green" style="font-weight:bold;color:darkgreen">فعال</span>
                @endif
                </td>
                <td class="top-3 center aligned" @if($base->RequestSite == 1 || $base->RequestSite == 2 || $base->RequestSite == 3 || $base->RequestSite == 4) style='font-weight:bold;color:darkgreen !important' ><a href="https://{{ $base->BaseWebsite }}.emza.app" target="_blank">{{ $base->BaseWebsite }}</a>&nbsp;@endif @if($base->RequestSite == 4) &nbsp<img src="{{ asset('img/tic.png') }}" style="width:20px;height:20px;" alt="" >@endif</td>
                <td class="top-3 center aligned"><a class="mini ui yellow button" style="font-size: 12px;font-weight: 100;color: black;" href="/administrator/location/{{ $base->BaseBatch }}">نمایش موقعیت</a></td>
                <td class="top-3 center aligned">{{ $base->BaseName }} {{ $base->BaseFamily }}</td>
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
