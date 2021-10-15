
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
<table class="ui red table striped" style="margin-top: 0px;">
    <thead class="">
        <tr class="">
            <th class="center aligned">عملیات</th>
            <th class="center aligned">حجم</th>
            <th class="center aligned">نام فایل</th>
            <th class="center aligned">آواتار</th>
            <th class="center aligned">ردیف</th>
        </tr>
    </thead>

    <tbody class="">
    @php $i = 0; @endphp
    @foreach($filesInFolder as $path) 
    @php $i++ @endphp      

            <tr class="">
                <td class="top-3 center aligned">
                <form action="/administrator/delete-avatar" method="post"> 
                @csrf
                <input type="hidden" name="path-avatar" value="{{ $path }}">
                <button type="submit" class="mini ui red button">حذف</button>
                </form>
                </td>
                <td class="top-3 center aligned">{{  number_format($file['size'] = File::size($path),0)  }} KB</td>
                <td class="top-3 center aligned">{{ $file['name'] = File::name($path) }}</td>
                <td class="top-3 center aligned"><img style="width:25px;height:33px;" uk-toggle="target: #modal-12" src="/{{ $path }}">
                </td>
                <td class="top-3 center aligned">{{ $i }}</td>
            </tr>
    
                    

            @endforeach
            </tbody>
</table>
<!-- @foreach($filesInFolder as $path)
<br>

<div style="display: inline-block;background: #eee;padding:10px;margin:10px;border:1px solid black;float: left;">
<img style="width:100px !important;border: 1px double;float:right;margin-left: 33px;" src="/{{ $path }}" class="uk-align-right">
<form action="/administrator/delete-avatar" method="post">
@csrf


    <input type="hidden" name="path-avatar" value="{{ $path }}">
    <button type="submit" class="mini ui red button">حذف</button>
</form>
</div>
<br>
@endforeach -->



@endsection