@extends('register.layout')

@section('contentRegister')
<div class="sixteen wide colum">
    <div class="ui raised segment">
        <form action="/register/profile/save" method="post" class="ui form">
            <div class="ui grid">
                <div class="low">
                    <div class="heading-register sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="supermarket-font bigger-font bold-font">ข้อมูลส่วนตัว</div>
                    </div>
                </div>

                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="required field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">ชื่อ-นามสกุล</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile three wide tablet three wide computer colum">
                    <div class="required field fill-form">
                        <input name="title" type="text" placeholder="คำนำหน้านาม">
                    </div>
                </div>
                <div class="sixteen wide mobile four wide tablet four wide computer colum">
                    <div class="required field fill-form">
                        <input name="firstname" type="text" placeholder="ชื่อ">
                    </div>
                </div>
                <div class="sixteen wide mobile four wide tablet four wide computer colum">
                    <div class="required field fill-form">
                        <input name="lastname" type="text" placeholder="นามสกุล">
                    </div>
                </div>

                <div class="low field-leading">
                    <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="required field">
                            <label class="height-line field-label">
                                <span class="supermarket-font big-font">รูปประจำตัว</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile three wide tablet two wide computer colum">
                        <div class="required field">
                            <img src="/app/home/images/sample.png" alt="" class="ui tiny circular image"/>
                        </div>
                    </div>
                    <div class="sixteen wide mobile eight wide tablet nine wide computer colum">
                        <div class="required field">
                                <input name="profilePic" type="file" accept="image/*" aria-label="เลือกรูป">
                        <div class="supermarket-font large-font">กรุณาเลือกไฟล์ภาพ .jpg หรือ .png และมีขนาดภาพ 400 x 400 px</div>
                        </div>
                    </div>
                </div>

                <div class="low field-leading">
                    <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="field">
                            <label for="biography" class="height-line field-label">
                                <span class="supermarket-font big-font">เกี่ยวกับคุณ</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                        <div class="field fill-form">
                            <textarea name="biography" id="biography"></textarea>
                        </div>
                    </div>
                </div>

                <div class="low field-leading">
                    <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="field">
                            <label for="organization" class="height-line field-label">
                                <span class="supermarket-font big-font">หน่วยงาน</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile eleven wide tablet eleven wide computer right aligned colum">
                        <div class="field fill-form">
                            <input type="text" name="organization" id="organization"/>
                        </div>
                    </div>
                </div>

                <div class="sixteen wide center aligned colum register-button">
                    <button class="ui teal buttun">
                        <span>ย้อนกลับ</span>
                    </button>
                    <button class="ui submit buttun">
                        <span>บันทึกข้อมูล</span>
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@stop

@section('javascriptRegister')
<script src="/components/angular/angular.js"></script>
@stop