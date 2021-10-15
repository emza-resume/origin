@extends('layouts.header.header-main')
@section('option')
    <div>
        <a class="btn btn-primary size-20 mt-15" href="/home">
            {{ __('پنل کاربر') }}
            </a>
            <a class="btn btn-danger size-20 mt-15" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('خروج') }}
        </a>

        <form id="logout-form" class="size-20 mt-15" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@stop
