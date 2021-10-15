
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
*{
  font-weight: normal;
}
@endsection

@section('body')

<table class="ui celled blue striped table" style="margin-top: 0px;">
    <thead class="">
      <tr class="">
        <th class="center aligned">عملیات</th>
        <th class="center aligned">تاریخ ایجاد کاربر</th>
        <th class="center aligned">فعال</th>
        <th class="center aligned">کد فعال سازی</th>
        <th class="center aligned">موبایل یا ایمیل</th>
        <th class="center aligned">ردیف</th>
      </tr>
    </thead>
    <tbody >

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
      @foreach($users as $user)
      <?php $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($user->created_at);
          $updated_at = new Verta();
          $updated_at = Verta::instance($user->updated_at);
      ?>
          <!-- This is the modal -->
      <div id="dialog{{ $user->id }}" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h5 class="uk-text-center ">آیا کلمه عبور ریست شود؟</h5>
            <div class="uk-text-center">
            <button class="uk-modal-close ui button" type="button">لغو</button>
            <a href="/administrator/users/reset/{{ $user->id }}" class="ui secondary button">تایید</a>

            </div>
        </div>
      </div>
      <div id="delete{{ $user->id }}" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h5 class="uk-text-center ">آیا این کاربر حذف شود؟</h5>
            <div class="uk-text-center">
            <button class="uk-modal-close ui button" type="button">لغو</button>
            <a href="/administrator/users/delete/{{ $user->id }}" class="ui secondary button">تایید</a>
            </div>
        </div>
      </div>
    <tr>
        <td class="top-3 center aligned">
        <button class="mini ui  blue button" style="position: relative;top: -3px;font-weight: normal;" uk-toggle="target: #dialog{{ $user->id }}" type="button">
        <i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" class="redo icon icon-semantic"></i>
        </button>
        <button class="mini ui  red button" style="position: relative;top: -3px;font-weight: normal;"  uk-toggle="target: #delete{{ $user->id }}" type="button">
            <i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" class="trash  icon icon-semantic"></i>
        </button>
        <a style="position: relative;top: -3px;" href="/administrator/massage/user/{{ $user->id }}" class="mini ui orange button"><i
                            style="margin-left: 0px;font-size: 13px;margin-right: 0px;"
                            class="envelope icon icon-semantic"></i></a>
        </td>
        <td class="top-3 center aligned">{{ $created_at }}</td>
        <td class="top-3 center aligned">{{ $user->enable }}</td>
        <td class="top-3 center aligned">{{ $user->active_code }}</td>
        <td class="top-3 center aligned">{{ $user->email }}</td>
        <td style="height:37px;" class="top-3 center aligned">{{ $i }}</td>
    </tr>
      @endforeach
    </tbody>
</table>

{{ $users->render() }}
@endsection