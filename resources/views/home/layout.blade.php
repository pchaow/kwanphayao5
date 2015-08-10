<!DOCTYPE html`>
<html>
<head>
    <title>สารานุกรมกว๊านพะเยา</title>

    <link rel="stylesheet" href="components/semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="./css/style.css">
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
        <div class="two wide column">
            <h2 class="ui icon header">
                <img class="ui image" src="/images/KwanEncyclopaedia.png">

                <div class="content kunla-font">
                    สารานุกรม<br/>กว๊านพะเยา
                </div>
            </h2>
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
                    <div class="four wide column">
                        @if(Auth::user())
                            <div class="right aligned three wide column middle-align">
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
                            </div>
                        @else
                            <div class="right aligned four wide column middle-align">
                                <a href="/register">ลงทะเบียน</a>
                                <a href="/login">เข้าสู่ระบบ</a>
                            </div>
                        @endif
                    </div>

                </div>
                <div class="ui five columns row" style="padding-top: 7px;">
                    <div class="column nopadding" style="padding-left: 14px !important;" >
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
            <div class="ui center aligned menu">
                <a class="active item">Editorials</a>
                <a class="item">Reviews</a>
                <a class="item">Upcoming Events</a>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="column">
            @yield('content')
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