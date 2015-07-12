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

        <div class="right aligned four wide column middle-align">
            <a href="/register">ลงทะเบียน</a>
            <a href="/login">เข้าสู่ระบบ</a>
        </div>
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


@yield('js')

</body>
</html>