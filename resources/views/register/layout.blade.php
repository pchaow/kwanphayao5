@extends('home.layout')

@section('css')
<!-- <link href="/components/semantic-ui/dist/components/step.css" rel="stylesheet" type="text/css"> -->
<link href="/app/home/css/semantic/step2.css" rel="stylesheet" type="text/css">
@stop

@section('content')
<div class="ui page grid">
    <div class="fluid sixteen wide colum">
        <div class="ui ordered steps center-grid">
            <div class="{{Request::path() == 'register' ? 'active ' : (Request::path() == 'register/profile' ? 'completed ' : (Request::path() == 'register/account' ? 'completed ' : ''))}}step">
                <div class="content">
                    <div class="title supermarket-font big-font">ลงทะเบียน</div>
                    <div class="description supermarket-font large-font">เป็นผู้ดูแลระบบสารานุกรมกว๊านพะเยา</div>
                </div>
            </div>
            <div class="{{Request::path() == 'register' ? 'disabled ' : (Request::path() == 'register/profile' ? 'active ' : (Request::path() == 'register/account' ? 'completed ' : ''))}}step">
                <div class="content">
                    <div class="title supermarket-font big-font">ข้อมูลส่วนตัว</div>
                    <div class="description supermarket-font large-font">กรอกข้อมูลที่เกี่ยวกับตัวคุณ</div>
                </div>
            </div>
            <div class="{{Request::path() == 'register' ? 'disabled ' : (Request::path() == 'register/profile' ? 'disabled ' : (Request::path() == 'register/account' ? 'active ' : ''))}}step">
                <div class="content">
                    <div class="title supermarket-font big-font">ข้อมูลเกี่ยวกับบัญชี</div>
                    <div class="description supermarket-font large-font">กรอกข้อมูลที่เกี่ยวกับบัญชีของคุณ</div>
                </div>
            </div>
        </div>
    </div>

    @yield('contentRegister')
</div>
@stop

@section('javascript')
    @yield('javascriptRegister')
@stop