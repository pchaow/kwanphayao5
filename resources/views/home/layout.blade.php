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
                        <div class="ui icon fluid input">
                            <input type="text" placeholder="Search...">
                            <i class="circular search link icon"></i>
                        </div>
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
                                        <a class=" <% Request::is("$role->key/*") ? 'active' : '' %> item"
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
                        <h2 class="ui icon header">
                            <img class="ui image" src="/images/general_over.svg">

                            <div class="content small kunla-font">
                                ข้อมูลทั่วไปกว๊านพะเยา
                            </div>
                        </h2>
                    </div>
                    <div class="column nopadding">
                        <h2 class="ui icon header">
                            <img class="ui image" src="/images/ecology_over.svg">

                            <div class="content small kunla-font">
                                นิเวศวิทยาและสิ่งแวดล้อม
                            </div>
                        </h2>
                    </div>
                    <div class="column nopadding">
                        <h2 class="ui icon header">
                            <img class="ui image" src="/images/travel_over.svg">

                            <div class="content small kunla-font">
                                เศรษฐกิจและการท่องเที่ยว
                            </div>
                        </h2>
                    </div>
                    <div class="column nopadding">
                        <h2 class="ui icon header">
                            <img class="ui image" src="/images/water%20resources_over.svg">

                            <div class="content small kunla-font">
                                การจัดการทรัพยากรธรรมชาติ
                            </div>
                        </h2>
                    </div>
                    <div class="column nopadding">
                        <h2 class="ui icon header">
                            <img class="ui image" src="/images/history_over.svg">

                            <div class="content small kunla-font">
                                ประวัติศาสตร์และวัฒนธรรม
                            </div>
                        </h2>
                    </div>
                </div>


            </div>

        </div>


    </div>

    <div class="row" style="padding-top: 0px;">
        <div class="column">
            <div class="ui center inverted aligned secondary pointing  menu">
                <a class="active item kunla-font-menu larger">หน้าแรก</a>
                <a class="item kunla-font-menu larger">เกี่ยวกับสารานุกรมกว๊านพะเยา</a>
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
                                ข้อเสนอแนะ
                            </div>
                        </div>
                        <div class="item">
                            <i class="edit icon"></i>

                            <div class="content">
                                แบบสอบถาม
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="components/jquery/dist/jquery.min.js"></script>
<script src="components/semantic/dist/semantic.min.js"></script>

@yield('js')

<script>
    $("#user_dropdown").dropdown();
</script>


</body>
</html>