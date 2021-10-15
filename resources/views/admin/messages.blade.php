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
            <th class="center aligned">تاریخ ایجاد پیام</th>
            <th class="center aligned">آدرس ایمیل</th>
            <th class="center aligned">نام</th>
            <th class="center aligned">شماره پیام</th>
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
        @foreach($getmsgs as $msgs)
            <?php $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($msgs->created_at);

      ?>

            <tr class="">
                <td class="top-3 center aligned">
                <a class="mini ui red button" href="/administrator/delete-msg/{{ $msgs->Contactid }}">حذف</a>
                <button class="mini ui blue button" uk-toggle="target: #msg-{{ $msgs->Contactid }}" type="button">مشاهده پیام</button>

                </td>
                <td class="top-3 center aligned">{{ $created_at }}</td>
                <td class="top-3 center aligned">{{ $msgs->ContactEmail }}</td>
                <td class="top-3 center aligned">{{ $msgs->ContactName }}</td>
                <td class="top-3 center aligned">100{{ $msgs->Contactid }}</td>
                <td class="top-3 center aligned">{{ $i }}</td>
                                <!-- This is the modal -->
                                <div id="msg-{{ $msgs->Contactid }}" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body">
                                        <h4 class="uk-modal-title" style="text-align:center">محتوی پیام</h4>
                                        <p class="uk-modal-title"
                                            style="text-align:justify;direction:rtl;font-size:14px;">
                                            {{ $msgs->ContactComment }}
                                        </p>


                                        <button class="uk-modal-close mini ui red button" type="button">بستن</button>
                                    </div>
                                </div>
            </tr>

        @endforeach
    </tbody>
</table>

{{ $getmsgs->render() }}


@endsection
