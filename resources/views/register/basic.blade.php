<?php
require_once(app_path().'/recaptchainc.php');

// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;

$reCaptcha = new ReCaptcha($secret);

// Was there a reCAPTCHA response
    Route::post('captcha', function() {
        $validate = Validator::make(Input::all(), array(
            'g-recaptcha-response' => 'required|captcha'
        ));
        var_dump($validate->passes());
    });
/*
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
    );
}
*/
?>
@extends('register.layout')

@section('contentRegister')
<div class="sixteen wide colum">
    <div class="ui raised segment">
        <form action="" method="post" class="ui form">
            <div class="ui grid">
                <div class="low">
                    <div class="heading-register sixteen wide mobile five wide tablet five wide computer right aligned colum">
                        <div class="supermarket-font bigger-font bold-font">ข้อมูลลงทะเบียนเบื้องต้น</div>
                    </div>
                </div>

                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="required field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">ชื่อผู้ใช้</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                    <div class="required field fill-form">
                        <input name="username" type="text" placeholder="ชื่อผู้ใช้">
                    </div>
                </div>
                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="required field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">อีเมล</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                    <div class="required field fill-form">
                        <input class="" name="email" type="text" placeholder="อีเมล">
                    </div>
                </div>
                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="required field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">รหัสผ่าน</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                    <div class="required field fill-form">
                        <input class="" name="password" type="password" placeholder="รหัสผ่าน">
                    </div>
                </div>
                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="required field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">ยืนยันรหัสผ่าน</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                    <div class="required field fill-form">
                        <input class="" name="repassword" type="password" placeholder="ป้อนรหัสผ่านอีกครั้ง">
                    </div>
                </div>
                <div class="sixteen wide mobile five wide tablet five wide computer right aligned colum">
                    <div class="required field">
                        <label class="height-line field-label">
                            <span class="supermarket-font big-font">ทำเครื่องหมายในช่องว่าง</span>
                        </label>
                    </div>
                </div>
                <div class="sixteen wide mobile eleven wide tablet eleven wide computer colum">
                    <div class="required field">
                        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
                    </div>
                </div>
                <div class="sixteen wide center aligned colum register-button">
                    <button class="ui teal buttun">
                        <span>ยกเลิก</span>
                    </button>
                    <button class="ui submit buttun">
                        <span>ลงทะเบียน</span>
                    </button>
                </div>

            </div>
        </form>

        <?php
        foreach ($_POST as $key => $value) {
            //echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
        }
        ?>

    </div>
</div>
@stop

@section('javascriptRegister')
<script>
$('.ui.form')
        .form({
            username: {
                identifier: 'username',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'กรุณากรอกชื่อผู้ใช้ของคุณ'
                    }
                ]
            }
        });

</script>
@stop