<?php require_once(app_path().'/recaptchainc.php');?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <title>@lang('text.encyclopaedia', array(), 'th') :: ยินดีต้อนรับ</title>

    <!-- Bootstrap -->
    <!-- Bootstrap Grid only -->
    <link href="/app/home/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Semantic -->
    <link href="/components/semantic-ui/dist/components/breadcrumb.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/checkbox.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/image.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/input.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/item.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/modal.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/popup.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/rail.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/search.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/segment.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/sticky.min.css" rel="stylesheet" type="text/css">
    <link href="/components/semantic-ui/dist/components/transition.min.css" rel="stylesheet" type="text/css">

    <link href="/app/home/css/semantic/button2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/dimmer2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/divider2low.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/dropdow.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/form2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/grid2low.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/header2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/icon2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/labell.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/list2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/menu2.css" rel="stylesheet" type="text/css">
    <link href="/app/home/css/semantic/statistic2.css" rel="stylesheet" type="text/css">

    @yield('css')

    <link href="/app/home/stylesheets/app.css" rel="stylesheet">

    <script>
        //        (function () {
        //            var
        //                    eventSupport = ('querySelector' in document && 'addEventListener' in window)
        //            jsonSupport  = (typeof JSON !== 'undefined'),
        //                    jQuery       = (eventSupport && jsonSupport)
//                            ? '/components/jquery/dist/jquery.min.js'
//                            : '/css/jquery.legacy.min.js'
//            ;
//            document.write('<script src="' + jQuery + '"><\/script>');
//        }());
    </script>

    <script src="/components/jquery/dist/jquery.js"></script>

    <script src="/css/easing.min.js"></script>
    <script src="/css/highlight.min.js"></script>
    <script src="/css/highlight.languages.min.js"></script>
    <script src="/css/history.min.js"></script>
    <script src="/css/tablesort.min.js"></script>

    {{--work for search fn call--}}
    <script src="/components/semantic-ui/dist/semantic.js"></script>

    {{--<script src="/css/docs.js"></script>--}}

    <script src="/app/home/js/docs.js"></script>
    <script src="/app/home/js/search.js"></script>

    @yield('jsTop')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <nav class="tab-bar show-for-small">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon">
                    <span></span>
                </a>
            </section>

            <section class="middle tab-bar-section">
                <h3 class="title"><?php echo trans('text.encyclopaedia') ?></h3>
            </section>
        </nav>

        <aside class="left-off-canvas-menu">
            <div>
                <a href="/">
                    <img class="ui centered image" src="/images/KwanEncyclopaedia.png" width="30%">
                </a>
            </div>
            <ul class="off-canvas-list">
                <li><label><?php echo trans('text.encyclopaedia') ?></label></li>
                <li><a class="supermarket-font big-font" href="/">หน้าแรก</a></li>
                <li><label class="supermarket-font">หมวดต่างๆ</label></li>
                <br/>
                <li><h3 class="ui header">
                        <i class="plug icon"></i>
                        <div class="content">
                            ข้อมูลทั่วไปกว๊านพะเยา
                        </div>
                    </h3></li>
                <li><h3 class="ui header">
                        <i class="plug icon"></i>
                        <div class="content">
                            นิเวศวิทยาและสิ่งแวดล้อม
                        </div>
                    </h3></li>
                <li></li>
                <li><h3 class="ui header">
                        <i class="plug icon"></i>
                        <div class="content">
                            เศรษฐกิจและการท่องเที่ยว
                        </div>
                    </h3></li>
                <li><h3 class="ui header">
                        <i class="plug icon"></i>
                        <div class="content">
                            เศรษฐกิจและการท่องเที่ยว
                        </div>
                    </h3></li>
                <li></li>
            </ul>
        </aside>

        {{--<script src="/app/home/js/search.js"></script>--}}

        <header><!-- header & menu -->
            <nav>

                <div id="logo-search-profile-category" class="ui page grid">
                    <div class="three wide colum">
                        <div class="ui centered grid">
                        <div class="ui statistic"> <!-- logo -->
                            <img class="ui smallp120 centered image" src="/images/KwanEncyclopaedia.png">
                            <div class="labell"><span class="supermarket-font big-font black-font">สารานุกรมกว๊านพะเยา</span></div>
                        </div> <!-- // logo -->
                        </div>
                    </div>

                    <div id="search-profile-category" class="thirteen wide colum">
                        <div class="ui grid">
                            <div class="low">
                                <div class="six wide colum">
                                    <div class="ui search"> <!-- search -->
                                        <div class="ui icon input search-form">
                                            <input class="prompt" type="text" placeholder="ค้นหา">
                                            <i class="search icon"></i>
                                        </div>
                                        <div>
                                            <p class="supermarket-font large-font">เรียงตาม : <a href="#">โพสต์ล่าสุด</a> | <a href="#">เป็นที่นิยม</a></p>
                                        </div>
                                        <div class="results"></div>
                                    </div> <!-- // search -->
                                </div>

                                <div id="profile-frame" class="ten wide colum"> <!-- profile -->
                                    <div class="ui right aligned grid">
                                        <div class="right floated sixteen wide colum">
                                            <div class="profile-shelf">
                                                <h3 class="ui header">
                                                    <div class="profile-book-first"><img src="/app/home/images/manow.jpg" class="ui avatar image"></div>
                                                    <div class="profilename">Ratanapat</div>
                                                </h3>
                                            </div>

                                            <div class="profile-book-first">
                                                <a href="">
                                                    <div class="ui red circular labell">27</div>
                                                </a>
                                            </div>
                                            <div class="profile-book-last">
                                                <div class="ui icon top right pointing dropdow buttun">
                                                    <i class="setting icon"></i>
                                                    <i class="dropdown icon"></i>
                                                    <div class="menu">
                                                        <div class="item">เพิ่ม/แก้ไข เนื้อหา</div>
                                                        <div class="item">ตั้งค่าบัญชี</div>
                                                        <div class="item">ออกจากระบบ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- // profile -->

                            </div>
                            <div class="low">
                                <div class="sixteen wide colum">
                                    <div class="ui grid"> <!-- main category -->
                                        <div class="computer only low">
                                            <div class="sixteen wide colum">
                                                <div class="ui labeled small icon menu">
                                                    <a id="category-general" class="{{Request::path() == 'general' ? 'active ' : ''}}item" href="{{Request::path() == 'general' ? '#' : '/general'}}">
                                                        {{--<i class="circular inverted{{Request::path() == 'general' ? ' red ' : ' teal '}}large dashboard icon"></i>--}}
                                                        <i class="{{Request::path() == 'general' ? 'red ' : 'teal outline '}}huge general icon"></i>
                                                        <span class="supermarket-font big-font">ข้อมูลทั่วไปกว๊านพะเยา</span>
                                                    </a>
                                                    <a id="category-ecology" class="{{Request::path() == 'ecology' ? 'active ' : ''}}item" href="{{Request::path() == 'ecology' ? '#' : '/ecology'}}">
                                                        <i class="{{Request::path() == 'ecology' ? 'red ' : 'teal outline '}}huge ecology icon"></i>
                                                        <span class="supermarket-font big-font">นิเวศวิทยาและสิ่งแวดล้อม</span>
                                                    </a>
                                                    <a id="category-travel" class="{{Request::path() == 'travel' ? 'active ' : ''}}item" href="{{Request::path() == 'travel' ? '#' : '/travel'}}">
                                                        <i class="{{Request::path() == 'travel' ? 'red ' : 'teal outline '}}huge travel phayao icon"></i>
                                                        <span class="supermarket-font big-font">เศรษฐกิจและการท่องเที่ยว</span>
                                                    </a>
                                                    <a id="category-water" class="{{Request::path() == 'water-resources' ? 'active ' : ''}}item" href="{{Request::path() == 'water-resources' ? '#' : '/water-resources'}}">
                                                        <i class="{{Request::path() == 'water-resources' ? 'red ' : 'teal outline '}}huge water resources icon"></i>
                                                        <span class="supermarket-font big-font">การจัดการทรัพยากรธรรมชาติ</span>
                                                    </a>
                                                    <a id="category-history" class="{{Request::path() == 'history' ? 'active ' : ''}}item" href="{{Request::path() == 'history' ? '#' : '/history'}}">
                                                        <i class="{{Request::path() == 'history' ? 'red ' : 'teal outline '}}huge history phayao icon"></i>
                                                        <span class="supermarket-font big-font">ประวัติศาสตร์และวัฒนธรรม</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tablet only centered low">
                                            <div class="ui icon menu">
                                                <a id="category-general-tablet" data-title="ข้อมูลทั่วไปกว๊านพะเยา" data-position="top left" class="{{Request::path() == 'general' ? 'active ' : ''}}item" href="{{Request::path() == 'general' ? '#' : '/general'}}">
                                                    {{--<i class="circular inverted{{Request::path() == 'general' ? ' red ' : ' teal '}}large dashboard icon"></i>--}}
                                                    <i class="{{Request::path() == 'general' ? 'red ' : 'teal outline '}}huge general icon"></i>
                                                </a>
                                                <a id="category-ecology-tablet" data-title="นิเวศวิทยาและสิ่งแวดล้อม" data-position="top center" class="{{Request::path() == 'ecology' ? 'active ' : ''}}item" href="{{Request::path() == 'ecology' ? '#' : '/ecology'}}">
                                                    <i class="{{Request::path() == 'ecology' ? 'red ' : 'teal outline '}}huge ecology icon"></i>
                                                </a>
                                                <a id="category-travel-tablet" data-title="เศรษฐกิจและการท่องเที่ยว" data-position="top center" class="{{Request::path() == 'travel' ? 'active ' : ''}}item" href="{{Request::path() == 'travel' ? '#' : '/travel'}}">
                                                    <i class="{{Request::path() == 'travel' ? 'red ' : 'teal outline '}}huge travel phayao icon"></i>
                                                </a>
                                                <a id="category-water-tablet" data-title="การจัดการทรัพยากรธรรมชาติ" data-position="top center" class="{{Request::path() == 'water-resources' ? 'active ' : ''}}item" href="{{Request::path() == 'water-resources' ? '#' : '/water-resources'}}">
                                                    <i class="{{Request::path() == 'water-resources' ? 'red ' : 'teal outline '}}huge water resources icon"></i>
                                                </a>
                                                <a id="category-history-tablet" data-title="ประวัติศาสตร์และวัฒนธรรม" data-position="top right" class="{{Request::path() == 'history' ? 'active ' : ''}}item" href="{{Request::path() == 'history' ? '#' : '/history'}}">
                                                    <i class="{{Request::path() == 'history' ? 'red ' : 'teal outline '}}huge history phayao icon"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="mobile only centered low">
                                            <div class="ui icon menu">
                                                <a id="category-general-mobile" data-title="ข้อมูลทั่วไปกว๊านพะเยา" data-position="top left" class="{{Request::path() == 'general' ? 'active ' : ''}}item" href="{{Request::path() == 'general' ? '#' : '/general'}}">
                                                    {{--<i class="circular inverted{{Request::path() == 'general' ? ' red ' : ' teal '}}dashboard icon"></i>--}}
                                                    <i class="{{Request::path() == 'general' ? 'red ' : 'teal outline '}}bigger general icon"></i>
                                                </a>
                                                <a id="category-ecology-mobile" data-title="นิเวศวิทยาและสิ่งแวดล้อม" data-position="top center"class="{{Request::path() == 'ecology' ? 'active ' : ''}}item" href="{{Request::path() == 'ecology' ? '#' : '/ecology'}}">
                                                    <i class="{{Request::path() == 'ecology' ? 'red ' : 'teal outline '}}bigger ecology icon"></i>
                                                </a>
                                                <a id="category-travel-mobile" data-title="เศรษฐกิจและการท่องเที่ยว" data-position="top center" class="{{Request::path() == 'travel' ? 'active ' : ''}}item" href="{{Request::path() == 'travel' ? '#' : '/travel'}}">
                                                    <i class="{{Request::path() == 'travel' ? 'red ' : 'teal outline '}}bigger travel phayao icon"></i>
                                                </a>
                                                <a id="category-water-mobile" data-title="การจัดการทรัพยากรธรรมชาติ" data-position="top center" class="{{Request::path() == 'water-resources' ? 'active ' : ''}}item" href="{{Request::path() == 'water-resources' ? '#' : '/water-resources'}}">
                                                    <i class="{{Request::path() == 'water-resources' ? 'red ' : 'teal outline '}}bigger water resources icon"></i>
                                                </a>
                                                <a id="category-history-mobile" data-title="ประวัติศาสตร์และวัฒนธรรม" data-position="top right" class="{{Request::path() == 'history' ? 'active ' : ''}}item" href="{{Request::path() == 'history' ? '#' : '/history'}}">
                                                    <i class="{{Request::path() == 'history' ? 'red ' : 'teal outline '}}bigger history phayao icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> <!-- // main category -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sixteen wide colum">
                        <div id="menu-main" class="ui secondary pointing menu"> <!-- secondary pointing menu inverted -->
                            <a class="{{Request::path() == '/' ? 'active ' : ''}}item" href="{{Request::path() == '/' ? '#' : '/'}}">
                                <i class="home icon"></i>หน้าแรก
                            </a>
                            <a class="{{Request::path() == 'about' ? 'active ' : ''}}item" href="{{Request::path() == 'about' ? '#' : '/about'}}">
                                <i class="book icon"></i>เกี่ยวกับสารานุกรมกว๊านพะเยา
                            </a>
                        </div> <!-- // menu -->
                    </div>

                    <div class="sixteen wide colum">

                    @if($showBreadcrumb)
                        <div id="breadcrumb" class="ui huge breadcrumb supermarket-font">
                            <span class="red-font">ขณะนี้คุณอยู่ที่ :</span>
                            {{--<div class="active section">หน้าแรก</div>--}}
                            <a href="/" class="section">หน้าแรก</a>
                            <i class="black angle double right icon divider"></i>
                            <div class="active section">{{$activeSection}}</div>
                        </div>
                    @endif

                    </div>
                </div>

            </nav>
        </header>

        <section id="main-content">
            <div class="ui page grid">
                <div class="sixteen wide colum">
                    <div class="ui red tall stacked raised segment">
                        <div class="sixteen wide colum">
                            <article>
                                @yield('content')
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="ui grid">
                <div class="computer tablet only low">
                    <div class="ui page grid">
                        <div class="eight wide tablet four wide computer colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="send outline icon"></i>
                                    <div class="content">
                                        ติดต่อสอบถาม
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide tablet four wide computer colum">
                            <h4 class="ui header call-suggestion-modal">
                                <a>
                                    <i class="comments outline icon"></i>
                                    <div class="content">
                                        ข้อเสนอแนะ
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide tablet four wide computer colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="pie chart icon"></i>
                                    <div class="content">
                                        แบบสอบถาม
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide tablet four wide computer colum">
                            <h4 class="ui header call-register-modal">
                                <a>
                                    <i class="write icon"></i>
                                    <div class="content">
                                        เพิ่ม/แก้ไขเนื้อหา
                                    </div>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="mobile only low">
                    <div class="ui grid">
                        <div class="eight wide mobile colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="send outline icon"></i>
                                    <div class="content">
                                        ติดต่อสอบถาม
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide mobile colum">
                            <h4 class="ui header call-suggestion-modal">
                                <a>
                                    <i class="comments outline icon"></i>
                                    <div class="content">
                                        ข้อเสนอแนะ
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide mobile colum">
                            <h4 class="ui header">
                                <a href="">
                                    <i class="pie chart icon"></i>
                                    <div class="content">
                                        แบบสอบถาม
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="eight wide mobile colum">
                            <h4 class="ui header call-register-modal">
                                <a>
                                    <i class="write icon"></i>
                                    <div class="content">
                                        เพิ่ม/แก้ไขเนื้อหา
                                    </div>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- popup register modal area -->
        <div class="ui modal" id="register-modal">
            <i class="close icon"></i>
            {{--<div class="header">--}}
                {{--ลงชื่อเข้าใช้งาน หรือ ลงทะเบียน--}}
            {{--</div>--}}
            <div id="modal-editor-box" class="two colum middle aligned relaxed fitted ui stackable grid">
                <div id="modal-login-box" class="colum">
                    <div class="ui form segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <input type="text" placeholder="ชื่อผู้ใช้ หรือ อีเมล">
                                <i class="user icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <div id="password-login" class="ui left icon input">
                                <input type="password" placeholder="รหัสผ่าน">
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="inline field">
                            <div class="ui checkbox">
                                <input type="checkbox">
                                <label class="checkbox-label">จดจำฉันไว้ในระบบ</label>
                            </div>
                        </div>
                        <div class="ui two colum middle aligned grid">
                            <div class="center aligned colum">
                            <button id="modal-login-button" class="ui teal submit buttun">
                                <span class="kunlasatri-bold-font bigger-font">ลงชื่อใช้งาน</span>
                            </button>
                            </div>
                            <div class="colum">
                                หรือ <a href="/forgot-password">ลืมรหัสผ่าน?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui vertical divider">หรือ</div>
                <div id="modal-register-box" class="center aligned colum">
                    <a href="/register">
                        <button class="huge red ui labeled icon buttun">
                            <i class="signup icon"></i>
                            <span class="kunlasatri-bold-font huge-font">ลงทะเบียน</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- popup suggestion modal area -->
        <div class="ui modal scrolling" id="suggestion-modal">
            <i class="close icon"></i>
            <div class="header">
                <span class="supermarket-font">ข้อเสนอแนะสำหรับสารานุกรมกว๊านพะเยา</span>
            </div>
            <form class="ui form">
                <div class="ui padded grid">
                    <div class="low field-leading">
                        <div class="fourteen wide mobile fourteen wide tablet thirteen wide computer centered colum">
                            <div class="supermarket-font big-font">
                                เรายินดีรับฟังข้อเสนอแนะจากคุณ เพื่อปรับปรุงการทำงานให้ดียิ่งขึ้น <br class="break-mobile">กรุณากรอกข้อมูลด้านล่าง เพื่อเป็นข้อมูล และเป็นประโยชน์ในภายภาคหน้า
                            </div>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="low field-leading">
                        <div class="fifteen wide mobile fifteen wide tablet fifteen wide computer centered colum">
                            <div class="supermarket-font big-font bold-font">
                                ข้อมูลทั่วไป
                            </div>
                        </div>
                    </div>

                    <div class="sixteen wide mobile three wide tablet three wide computer right aligned colum">
                        <div class="required field">
                            <label class="height-line field-label">
                                <span class="supermarket-font large-font">ชื่อ-นามสกุล</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile three wide tablet three wide computer colum">
                        <div class="required field fill-form">
                            <input name="title" type="text" placeholder="คำนำหน้านาม">
                        </div>
                    </div>
                    <div class="sixteen wide mobile five wide tablet five wide computer colum">
                        <div class="required field fill-form">
                            <input name="firstname" type="text" placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="sixteen wide mobile five wide tablet five wide computer colum">
                        <div class="required field fill-form">
                            <input name="lastname" type="text" placeholder="นามสกุล">
                        </div>
                    </div>

                    <div class="sixteen wide mobile four wide tablet three wide computer right aligned colum">
                        <div class="required field">
                            <label class="height-line field-label">
                                <span class="supermarket-font large-font">เลขประจำตัวประชาชน</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile five wide tablet five wide computer colum">
                        <div class="required field fill-form">
                            <input name="idnumber" type="text" placeholder="1234567890123 เป็นต้น">
                        </div>
                    </div>
                    <div class="sixteen wide mobile two wide tablet three wide computer right aligned colum">
                        <div class="required field">
                            <label class="height-line field-label">
                                <span class="supermarket-font large-font">อีเมล</span>
                        </div>
                    </div>
                    <div class="sixteen wide mobile five wide tablet five wide computer colum">
                        <div class="required field fill-form">
                            <input name="email" type="text" placeholder="อีเมลสำหรับติดต่อกลับ">
                        </div>
                    </div>

                    <div class="sixteen wide mobile three wide tablet three wide computer right aligned colum">
                        <div class="required field">
                            <label class="height-line field-label">
                                <span class="supermarket-font large-font">เบอร์โทรศัพท์</span>
                            </label>
                        </div>
                    </div>
                    <div class="sixteen wide mobile five wide tablet five wide computer colum">
                        <div class="required field fill-form">
                            <input name="phonenumber" type="text" placeholder="0xxxxxxxxx เป็นต้น">
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="fifteen wide mobile fifteen wide tablet fifteen wide computer centered colum">
                        <div class="supermarket-font big-font bold-font">
                            สอบถามข้อมูล / ข้อเสนอแนะ
                        </div>
                    </div>

                    <div class="low field-leading">
                        <div class="sixteen wide mobile three wide tablet three wide computer right aligned colum">
                            <div class="required field">
                                <label class="height-line field-label">
                                    <span class="supermarket-font large-font">เรื่อง</span>
                                </label>
                            </div>
                        </div>
                        <div class="sixteen wide mobile five wide tablet five wide computer colum">
                            <div class="required field fill-form">
                                <input name="subject" type="text" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="low field-leading">
                        <div class="sixteen wide mobile three wide tablet three wide computer right aligned colum">
                            <div class="required field">
                                <label class="height-line field-label">
                                    <span class="supermarket-font large-font">ข้าพเจ้าขอเสนอแนะดังนี้</span>
                                </label>
                            </div>
                        </div>
                        <div class="sixteen wide mobile thirteen wide tablet thirteen wide computer colum">
                            <div class="required field fill-form">
                                <textarea name="mysuggestion" id="mysuggestion"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="low field-leading">
                        <div class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated colum">
                            <div class="inline field">
                                <div class="ui checkbox">
                                    <input type="checkbox" name="accepttruth" id="accepttruth"/>
                                    <label class="supermarket-font large-font accepttruth" for="accepttruth">ข้าพเจ้าขอรับรองว่าข้อความข้างต้นเป็นจริงทุกประการ</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="low field-leading">
                        <div class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated colum">
                            <div class="required field">
                                <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
                            </div>
                        </div>
                    </div>

                    <div class="ui center aligned grid">
                        <div class="sixteen wide colum register-button">
                            <button class="ui teal buttun">
                                <span>ยกเลิก</span>
                            </button>
                            <button class="ui submit buttun">
                                <span>ส่งข้อเสนอแนะ</span>
                            </button>
                        </div>
                    </div>

                    <div class="low field-leading"><div class="colum"></div></div>

                </div>
            </form>
        </div>

        <a class="exit-off-canvas"></a> <!-- foundation.zurb back to the main page -->
    </div>
</div>

<!-- JavaScript Section -->
<script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>">
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="/components/jquery/dist/jquery.js"></script>--}}
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Semantic -->
{{--<script src="/components/semantic-ui/dist/components/semantic.js"></script>--}}
<script src="/components/semantic-ui/dist/components/checkbox.js"></script>
<script src="/components/semantic-ui/dist/components/dimmer.js"></script>
<script src="/components/semantic-ui/dist/components/form.js"></script>
<script src="/components/semantic-ui/dist/components/modal.js"></script>
<script src="/components/semantic-ui/dist/components/popup.min.js"></script>
<script src="/components/semantic-ui/dist/components/transition.js"></script>
<script src="/components/semantic-ui/dist/components/search.min.js"></script>
<script src="/components/semantic-ui/dist/components/sticky.min.js"></script>

<script src="/app/home/js/semantic/dropdow.js"></script>
<script src="/app/home/js/search.js"></script>

<!-- Foundation -->
<script src="/components/foundation/js/foundation.js"></script>
<script src="/components/foundation/js/foundation/foundation.offcanvas.js"></script>

<!-- Bootstrap -->

<script>
    $('.ui.dropdow').dropdow();

    $('#register-modal')
            .modal('setting', 'closable', false)
            .modal('attach events', '.call-register-modal', 'show');

    $('#suggestion-modal')
            .modal('setting', 'closable', false)
            .modal('attach events', '.call-suggestion-modal', 'show');

//    $('#suggestion-modal')
//            .modal('setting', 'closable', false)
//            .modal('show');

    // fix problem for long modal when resize window, the scrolling is disappear
    $(window).resize(function() {
        $('#suggestion-modal').modal('initialize');
    });

    $('.ui.checkbox')
            .checkbox();

    $('#category-general-tablet').popup({inline:true}).popup('show');
    $('#category-ecology-tablet').popup({inline:true});
    $('#category-travel-tablet').popup({inline:true});
    $('#category-water-tablet').popup({inline:true});
    $('#category-history-tablet').popup({inline:true});

    $('#category-general-mobile').popup({inline:true}).popup('show');
    $('#category-ecology-mobile').popup({inline:true});
    $('#category-travel-mobile').popup({inline:true});
    $('#category-water-mobile').popup({inline:true});
    $('#category-history-mobile').popup({inline:true});

    //    $('.ui.search')
//            .search({
//                apiSettings: {
//                    url: '//api.semantic-ui.com/search/{query}'
//                },
////                type: 'category'
//            })
//    ;
    $(document)
        .ready(function () {
            $('.ui.search')
                .search({
                    apiSettings: {
                        url: '//api.semantic-ui.com/search/{query}'
                    },
                    type: 'category'
//                    debug: true
//                    verbose: true
                });

//            $('.mobile.only.centered.low')
//                    .popup({
//                        popup : $('.fluid.popup')
//                    })
//                    .popup('show')
//            ;
        });
    $(document).foundation();
</script>

@yield('javascript')

</body>
</html>