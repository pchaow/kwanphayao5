<?php
require_once(app_path().'/recaptchalib.php');

// Register API keys at https://www.google.com/recaptcha/admin
$secret  = getenv('NOCAPTCHA_SECRET') ?: '';
$siteKey = getenv('NOCAPTCHA_SITEKEY') ?: '';

// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
//$lang = app()->getLocale();
$lang = 'th';