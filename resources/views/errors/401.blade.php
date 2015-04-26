@extends('home.layout')

@section('css')
    <link href="/components/semantic-ui/dist/components/list.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <div class="ui grid">
        <div class="sixteen wide mobile six wide tablet six wide computer center aligned colum">
            <div class="ui grid">
                <div class="sixteen wide computer only colum">
                    <i class="circular red max10 protect icon"></i>
                </div>
                <div class="sixteen wide tablet only colum">
                    <i class="circular red massive protect icon"></i>
                </div>
                <div class="sixteen wide mobile only colum">
                    <div class="ui two colum centered grid">
                        <div class="colum">
                            <i class="circular red huge protect icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sixteen wide mobile ten wide tablet six wide computer colum">
            <div class="kunlasatri-bold-font max-font red-font">401</div>
            <div class="supermarket-font huge-font red-font underline-font">
                คุณไม่มีสิทธิ์เข้าถึงหน้านี้
            </div>
            <div class="supermarket-font bold-font big-font">
                หน้าเว็บไซต์ที่คุณพยายามเข้าถึงถูกจำกัดสิทธิ์การเข้าถึงไว้
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
                            <div class="description">คุณอาจจะต้อง <a class="underline-font" href="/register">ลงทะเบียนก่อน</a></div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="small asterisk icon"></i>
                        <div class="content large-font">
                            <div class="description">ถ้าคุณลงทะเบียนแล้ว คุณอาจจะต้อง <a class="call-register-modal underline-font">ลงชื่อเข้าใช้งานก่อน</a></div>
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