
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

<!-- This is the modal -->

<table class="ui red table striped">
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
    <?php $i = 0; ?>
      @foreach($getbase as $base)
      <?php $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($base->created_at);
          $updated_at = new Verta();
          $updated_at = Verta::instance($base->updated_at);
      ?>

      <tr class="">
        <td class="top-3 center aligned">
        <!--  }}" -->
        <a class="mini ui red button" ><i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" uk-toggle="target: #modal-sure-{{ $base->Baseid }}" class="eraser icon icon-semantic"></i></a>
        <a class="mini ui blue button" href="/administrator/restore/{{ $base->Baseid }}" ><i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" class="redo icon icon-semantic"></i></a>

        </td>
        <td class="top-3 center aligned">{{ $created_at }}</td>
        <td class="top-3 center aligned">{{ $base->BaseMobile }}</td>
        <td class="top-3 center aligned">{{ $base->BaseName }}  {{ $base->BaseFamily }}</td>
        <td class="top-3 center aligned">1000{{ $base->Baseid }}</td>
        <td class="top-3 center aligned"><img style="width:25px;height:33px;" uk-toggle="target: #modal-{{ $base->Baseid }}"  src="{{ asset($base->BaseAvatar) }}" alt=""></td>
        <td class="top-3 center aligned">{{$i}}</td>
      </tr>
      <div id="modal-{{ $base->Baseid }}" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <img style="width:320px;height:410px;" uk-toggle="target: #modal-avatar" class="uk-align-center"  src="{{ asset($base->BaseAvatar) }}" alt="">
    <button class="uk-button uk-button-default uk-modal-close uk-align-center" type="button">بستن کادر</button>
    </div>
    <div id="modal-sure-{{ $base->Baseid }}" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <p class="uk-text-center">از این که میخواهید رزومه شماره 1000{{ $base->Baseid }} را حذف کنید مطمئن هستید؟</p>
    <a style="width: 162px;" class="uk-button uk-button-danger  uk-align-center" href="/administrator/real-delete/{{ $base->Baseid }}">بله</a>
    <a style="width: 162px;" class="uk-button uk-button-default uk-modal-close uk-align-center" type="button">خیر</a>

    </div>
</div>
      @endforeach
    </tbody>
  </table>
  
  {{ $getbase->render() }}


@endsection