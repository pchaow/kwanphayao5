@extends('home.layout')

@section('css')
    <link href="/components/semantic-ui/dist/components/list.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <div class="ui grid">
        <div class="sixteen wide mobile six wide tablet six wide computer center aligned colum">
            <div class="ui grid">
                <div class="sixteen wide computer only colum">
                    <i class="circular red max10 unlink icon"></i>
                </div>
                <div class="sixteen wide tablet only colum">
                    <i class="circular red massive unlink icon"></i>
                </div>
                <div class="sixteen wide mobile only colum">
                    <div class="ui two colum centered grid">
                        <div class="colum">
                            <i class="circular red huge unlink icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sixteen wide mobile ten wide tablet six wide computer colum">
            <div class="kunlasatri-bold-font max-font red-font">404</div>
            <div class="supermarket-font huge-font red-font underline-font">
                หาหน้าเว็บไซต์นี้ไม่พบ
            </div>
            <div class="supermarket-font bold-font big-font">
                หน้าเว็บไซต์ที่คุณพยายามเข้าถึงไม่มีอยู่บนเซิร์ฟเวอร์นี้
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
                            <div class="description">หน้าเว็บไซต์นี้อาจจะถูกย้ายหรือลบทิ้งไป</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="small asterisk icon"></i>
                        <div class="content large-font">
                            <div class="description">คุณอาจจะใช้ลิงก์ที่ล้าสมัยหรือลิงก์เสีย</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="small asterisk icon"></i>
                        <div class="content large-font">
                            <div class="description">คุณอาจจะพิมพ์ที่อยู่ (URL) ไม่ถูกต้อง</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

@section('javascript')

@stop