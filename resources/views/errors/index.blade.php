@extends('home.layout')

@section('css')
    <link href="/components/semantic-ui/dist/components/list.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <div class="ui grid">
        <div class="sixteen wide mobile six wide tablet six wide computer center aligned colum">
            <div class="ui grid">
                <div class="sixteen wide computer only colum">
                    <i class="circular red max10 bug icon"></i>
                </div>
                <div class="sixteen wide tablet only colum">
                    <i class="circular red massive bug icon"></i>
                </div>
                <div class="sixteen wide mobile only colum">
                    <div class="ui two colum centered grid">
                        <div class="colum">
                            <i class="circular red huge bug icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sixteen wide mobile ten wide tablet ten wide computer colum">
            <div class="kunlasatri-bold-font max-font red-font">{{$code}}</div>
            <div class="supermarket-font huge-font red-font underline-font">
                ระบบเว็บไซต์มีข้อผิดพลาด
            </div>
            <div class="supermarket-font bold-font big-font">
                หน้าเว็บไซต์ที่คุณพยายามเข้าถึงมีข้อผิดพลาดบนเซิร์ฟเวอร์ เราขออภัยในความไม่สะดวกดังกล่าวด้วย
            </div>
            <br>
            <div class="supermarket-font">
                <div class="ui list">
                    <span class="large-font">
                        อาจเป็นไปได้ว่า:
                    </span>
                    <div class="item">
                        <i class="small asterisk icon"></i>
                        <div class="content large-font">
                            <div class="description">ระบบเว็บไซต์มีปัญหา เราอาจใช้เวลาสักพักในการแก้ไขปัญหาดังกล่าว</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

@section('javascript')

@stop