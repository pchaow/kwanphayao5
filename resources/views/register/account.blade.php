@extends('register.layout')

@section('contentRegister')
<div class="sixteen wide colum">
    <div class="ui raised segment">
        <form action="/register/account/save" method="post" class="ui form">
            <div class="ui grid">
                <div class="low">
                    <div class="heading-register sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="supermarket-font bigger-font bold-font">ข้อมูลเกี่ยวกับบัญชี</div>
                    </div>
                </div>

                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="required field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">อีเมล (ถ้าต้องการเปลี่ยน)</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                    <div class="required field fill-form">
                        <input class="" name="email" type="text" placeholder="อีเมล">
                    </div>
                </div>

                <div class="low field-leading">
                    <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="field">
                            <label class="height-line field-label">
                                <span class="supermarket-font big-font">รหัสผ่าน</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                        <div class="field">
                            <div class="ui mini buttun call-change-password" tabindex="0">
                                <span>เปลี่ยนรหัสผ่าน</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="low field-leading">
                    <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="field">
                            <label class="height-line field-label">
                                <span class="supermarket-font big-font">การแจ้งเตือน</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                        <div class="inline field">
                            <div class="ui toggle checkbox">
                                <input type="checkbox" name="suggestionoff" id="suggestionoff"/>
                                <label class="supermarket-font large-font suggestionoff" for="suggestionoff">ปิด/เปิดการแจ้งเตือนข้อเสนอแนะ</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">บัญชี</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                    <div class="field">
                        <div class="ui mini buttun call-cancel-account" tabindex="0">
                            <span>ยกเลิกการใช้งานบัญชี</span>
                        </div>
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
        </form>
    </div>
</div>

<!-- popup modal register/account area -->
<div class="ui small modal" id="change-password-modal">
    <i class="close icon"></i>
    <div class="header">
        <span class="supermarket-font">เปลี่ยนรหัสผ่าน</span>
    </div>
    <form class="ui form">
        <div class="ui center aligned grid">

            <div class="low field-leading">
                <div class="fourteen wide mobile fourteen wide tablet fourteen wide computer colum">
                    <div class="required field fill-form">
                        <input type="password" name="" id="" placeholder="รหัสผ่านเดิม"/>
                    </div>
                </div>
            </div>

            <div class="low field-leading">
                <div class="fourteen wide mobile fourteen wide tablet fourteen wide computer colum">
                    <div class="field fill-form">
                        <input type="password" name="" id="" placeholder="พิมพ์รหัสผ่านใหม่อีกครั้ง"/>
                    </div>
                </div>
            </div>

            <div class="low field-leading">
                <div class="fourteen wide mobile fourteen wide tablet fourteen wide computer colum">
                    <div class="field fill-form">
                        <input type="password" name="" id="" placeholder="รหัสผ่านใหม่"/>
                    </div>
                </div>
            </div>

            <div class="low field-leading warn-old-password-wrong">
                <div class="fourteen wide mobile fourteen wide tablet fourteen wide computer colum">
                    <div class="field">
                        <span class="supermarket-font large-font">
                            <span class="red-font">รหัสผ่านไม่ถูกต้อง</span>
                            <a href="">ลืมรหัสผ่านใช่ไหม?</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="sixteen wide colum register-button">
                <button class="ui submit buttun">
                    <span>เปลี่ยนรหัสผ่าน</span>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="ui small modal" id="changed-password-modal">
    <div class="header">
        <span class="supermarket-font">คุณสร้างรหัสผ่านใหม่แล้ว</span>
    </div>

    <form class="ui form">
        <div class="ui center aligned grid">

            <div class="low field-leading">
                <div class="fifteen wide colum">
                    <span class="supermarket-font bigger-font">ข้อมูลการเปลี่ยนแปลงรหัสผ่านของคุณได้รับการบันทึกเรียบร้อยแล้ว</span>
                </div>
            </div>

            <div class="low field-leading">
                <div class="colum"></div>
            </div>

            <div class="low field-leading">
                <div class="sixteen wide colum register-button">
                    <button class="ui submit buttun">
                        <span>ตกลง</span>
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>

<div class="ui small modal" id="cancel-account-modal">
    <i class="close icon"></i>
    <div class="header">
        <span class="supermarket-font">คุณจะยกเลิกการใช้งานบัญชีใช่ไหม?</span>
    </div>

    <form class="ui form">
        <div class="ui center aligned grid">

            <div class="low field-leading">
                <div class="colum">
                    <span class="supermarket-font bigger-font">คุณแน่ใจไหมว่าต้องการยกเลิกการใช้งานบัญชีอย่างถาวร</span>
                </div>
            </div>

            <div class="low field-leading">
                <div class="colum"></div>
            </div>

            <div class="low field-leading">
                <div class="sixteen wide colum register-button">
                    <button class="ui teal buttun">
                        <span>ยกเลิก</span>
                    </button>
                    <button class="ui submit buttun">
                        <span>ยกเลิกการใช้งานบัญชี</span>
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>

<div class="ui small modal" id="confirm-cancel-account-modal">
    <div class="header">
        <span class="supermarket-font">คุณได้ยกเลิกงานใช้งานบัญชีนี้แล้ว</span>
    </div>

    <form class="ui form">
        <div class="ui padded grid">

            <div class="low field-leading">
                <div class="fourteen wide mobile fourteen wide tablet fourteen wide computer centered colum">
                    <span class="supermarket-font big-font">ตอนนี้คุณไม่สามารถเพิ่ม/แก้ไขเนื้อหาสารานุกรมได้ <br class="break-mobile"/>คุณสามารถ<a href="">ลงทะเบียนใหม่</a>ได้<br class="break-computer"/> เมื่อคุณต้องการ <br class="break-mobile"/>เราหวังว่าคุณจะกลับมาเยี่ยมชมเว็บไซต์ของเราอีก <br class="break-mobile"/>เรายินดีรับฟัง <br class="break-computer"/><a href="">คำแนะนำ/ติชม</a> เสมอ</span>
                </div>
            </div>

            <div class="low field-leading">
                <div class="colum"></div>
            </div>

            <div class="low field-leading">
                <div class="sixteen wide center aligned colum register-button">
                    <button class="ui submit buttun">
                        <span>ออกจากระบบ</span>
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>
@stop

@section('javascriptRegister')
<script>
    $('#change-password-modal')
            .modal('setting', 'closable', false)
            .modal('attach events', '.call-change-password', 'show');

    $('#changed-password-modal')
            .modal('setting', 'closable', false)
            .modal('hide');

    $('#cancel-account-modal')
            .modal('setting', 'closable', false)
            .modal('attach events', '.call-cancel-account', 'show');

    // after canceled account show this modal
    $('#confirm-cancel-account-modal')
            .modal('setting', 'closable', false)
            .modal('hide');
</script>
@stop