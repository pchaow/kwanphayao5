<!DOCTYPE html`>
<html>
<head>
    <title>สารานุกรมกว๊านพะเยา</title>

    <link rel="stylesheet" href="/components/semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .middle-align {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

    </style>
</head>
<body>

<div class="ui container grid">

    <div class="ui row" style="margin-top:14px; padding-bottom: 0px;">
        <div class="centered aligned two wide column">
            <a href="/">
                <h2 class="ui icon header" style="margin:0px !important; padding-left:14px;">
                    <img class="ui image" src="/images/KwanEncyclopaedia.png">

                    <div class="content kunla-font" style="padding: 0px;">
                        สารานุกรม<br/>กว๊านพะเยา
                    </div>
                </h2>
            </a>
        </div>

        <div class="fourteen wide column">
            <div class="ui grid">
                <div class="ui sixteen columns row" style="padding-bottom: 0px;">
                    <div class="center aligned twelve wide column">
                        <form class="ui form" method="get" action="/search">
                            <div class="ui fluid icon input">
                                <input type="text" name="keyword" placeholder="ค้นหา">
                                <i class="search icon"></i>
                            </div>
                        </form>
                    </div>
                    <div class="right aligned four wide column">
                        @if(Auth::user())
                            <div id="user_dropdown" class="item ui dropdown">
                                @if(Auth::user()->logo)
                                    <img class="ui avatar avatar-menu image"
                                         src="<%Auth::user()->logo->url%>?h=200">
                                @else
                                    <img class="ui avatar avatar-menu image" src="/images/square-image.png">
                                @endif
                                @if(Auth::user())
                                    <span><%Auth::user()->email%></span>
                                @endif
                                <i class="dropdown icon"></i>

                                <div class="menu">
                                    <div class="header">
                                        <i class="tags icon"></i>
                                        เลือกสิทธิ์การใช้งาน
                                    </div>
                                    @foreach( Auth::user()->roles as $role)
                                        <a class=" <% Request::is(" $role->key/*") ? 'active' : '' %> item"
                                            href="/<%$role->key%>">
                                            <% $role->name %>
                                        </a>
                                    @endforeach
                                    <div class="divider"></div>
                                    <a class="item">Change Profile</a>
                                    <a class="item" href="/logout">Logout</a>

                                </div>
                            </div>
                        @else
                            <a href="/register">ลงทะเบียน</a> |
                            <a href="/login">เข้าสู่ระบบ</a>
                        @endif
                    </div>

                </div>
                <div class="ui five columns row" style="padding-top: 7px;">
                    <div class="column nopadding" style="padding-left: 14px !important;">
                        <a href="/category/ข้อมูลทั่วไป">
                            <h2 class="ui icon header">
                                <?php if (Request::is('category/ข้อมูลทั่วไป')) : ?>
                                <img class="ui image" src="/images/general_over.svg">
                                <?php else : ?>
                                <img class="ui image" src="/images/general_up.svg">
                                <?php endif?>
                                <div class="content small kunla-font">
                                    ข้อมูลทั่วไปกว๊านพะเยา
                                </div>

                            </h2>
                        </a>
                    </div>
                    <div class="column nopadding">
                        <a href="/category/นิเวศวิทยาและสิ่งแวดล้อม">
                            <h2 class="ui icon header">
                                <?php if (Request::is('category/นิเวศวิทยาและสิ่งแวดล้อม')) : ?>
                                <img class="ui image" src="/images/ecology_over.svg">
                                <?php else : ?>
                                <img class="ui image" src="/images/ecology_up.svg">
                                <?php endif?>


                                <div class="content small kunla-font">
                                    นิเวศวิทยาและสิ่งแวดล้อม
                                </div>
                            </h2>
                        </a>
                    </div>
                    <div class="column nopadding">
                        <a href="/category/เศรษฐกิจและการท่องเที่ยว">
                            <h2 class="ui icon header">
                                <?php if (Request::is('category/เศรษฐกิจและการท่องเที่ยว')) : ?>
                                    <img class="ui image" src="/images/travel_over.svg">
                                <?php else : ?>
                                    <img class="ui image" src="/images/travel_up.svg">
                                <?php endif?>

                                <div class="content small kunla-font">
                                    เศรษฐกิจและการท่องเที่ยว
                                </div>
                            </h2>
                        </a>
                    </div>
                    <div class="column nopadding">
                        <a href="/category/การจัดการทรัพยากรธรรมชาติ">
                            <h2 class="ui icon header">
                                <?php if (Request::is('category/การจัดการทรัพยากรธรรมชาติ')) : ?>
                                    <img class="ui image" src="/images/water%20resources_over.svg">
                                <?php else : ?>
                                    <img class="ui image" src="/images/water%20resources_up.svg">
                                <?php endif?>

                                <div class="content small kunla-font">
                                    การจัดการทรัพยากรธรรมชาติ
                                </div>
                            </h2>
                        </a>
                    </div>
                    <div class="column nopadding">
                        <a href="/category/ประวัติศาสตร์และวัฒนธรรม">
                            <h2 class="ui icon header">
                                <?php if (Request::is('category/ประวัติศาสตร์และวัฒนธรรม')) : ?>
                                    <img class="ui image" src="/images/history_over.svg">
                                <?php else : ?>
                                    <img class="ui image" src="/images/history_up.svg">
                                <?php endif?>

                                <div class="content small kunla-font">
                                    ประวัติศาสตร์และวัฒนธรรม
                                </div>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 0px;">
        <div class="column">
            <div class="ui center inverted aligned secondary pointing  menu">
                <a href="/" class="<% Request::is('/') ? 'active' : '' %> item kunla-font-menu larger">หน้าแรก</a>
                <a href="/page/เกี่ยวกับสารานุกรมกว๊านพะเยา"
                   class="<% Request::is('page/เกี่ยวกับสารานุกรมกว๊านพะเยา') ? 'active' : '' %>  item kunla-font-menu larger">เกี่ยวกับสารานุกรมกว๊านพะเยา</a>
            </div>
        </div>

    </div>

    <div class="row" style="">
        <div class="column">
            @yield('content')
        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="ui inverted segment footer" style="border-top:4px red solid;">
                <div class="ui container">
                    <div class="ui horizontal list">
                        <div class="item">
                            <i class="mail outline icon"></i>

                            <div class="content">
                                ติดต่อสอบถาม
                            </div>
                        </div>
                        <div class="item">
                            <i class="comment outline icon"></i>

                            <div class="content">
                                <a style="color: rgba(255,255,255,.9);" target="_blank" href="https://docs.google.com/forms/d/16dTRa-RZLyU1nBr-0OVjVcNSS0-_wTQL8Y4QhTe61QY/viewform">ข้อเสนอแนะ</a>
                            </div>
                        </div>
                        <div class="item">
                            <i class="edit icon"></i>

                            <div class="content">
                                <a style="color: rgba(255,255,255,.9);" target="_blank" href="http://goo.gl/forms/FuhFdOxdlM">แบบสอบถาม</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="/components/jquery/dist/jquery.min.js"></script>
<script src="/components/semantic/dist/semantic.min.js"></script>

@yield('js')

<script>
    $("#user_dropdown").dropdown();
</script>


</body>
</html>