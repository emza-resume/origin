@extends('master.layout-index')

@section('title')

صفحه اصلی

@endsection

@section('styles')
#bodyh{
    background:white !important;
}
@endsection

@section('content')

@include('layouts.property')

@include('layouts.center-top')


<br>
<hr>
<br>
@include('layouts.resume')
@endsection
