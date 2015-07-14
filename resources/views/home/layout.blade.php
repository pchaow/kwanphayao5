<!DOCTYPE html`>
<html>
<head>
    <title>สารานุกรมกว๊านพะเยา</title>

    <link rel="stylesheet" href="components/semantic/dist/semantic.min.css">
    <style>
        .middle-align {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }
    </style>
</head>
<body>

<div class="ui container grid">

    <div class="ui row" style="margin-top:14px;">
        <div class="five wide column">
            <h2 class="ui header">
                <img class="ui image" src="/images/KwanEncyclopaedia.png">

                <div class="content">
                    สารานุกรมกว๊านพะเยา
                </div>
            </h2>
        </div>

        <div class="center aligned seven wide column middle-align">
            <div class="ui icon fluid input">
                <input type="text" placeholder="Search...">
                <i class="circular search link icon"></i>
            </div>
        </div>
        @if(Auth::user())
            <div class="right aligned four wide column middle-align">
                <div id="user_dropdown" class="item ui dropdown">
                    @if(Auth::user()->logo)
                        <img class="ui avatar avatar-menu image" src="<%Auth::user()->logo->url%>?h=200">
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

    <div class="row">
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