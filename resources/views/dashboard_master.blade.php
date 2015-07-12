<!DOCTYPE HTML>
<html>
<head>
    <meta name="csrf_token" value="<?php echo csrf_token(); ?>">
    <link rel="stylesheet" href="/components/semantic-ui/dist/semantic.min.css"/>
    <link rel="stylesheet" href="/components/semantic-ui/dist/components/dropdown.min.css"/>


    <style>
        .avatar-menu {
            height: 2em !important;
            width: 2em !important;
            margin-top: -0.5em;
            margin-bottom: -0.5em;
        }
    </style>

    @yield('header')


</head>

<body>

<div class="ui" style="background-color: #4c1d6e">

    <h2 class="ui header inverted" style="padding: 10px;">
        <img src="/images/KwanEncyclopaedia.png">

        <div class="content">
            Kwanphayao Encyclopedia
            <div class="sub header">ระบบฐานข้อมูลสารานุกรมกว๊านพะเยา</div>
        </div>
    </h2>

</div>

<div class="ui">
    <div class="row">
        <div class="ui large menu " id="MainMenu">
            <div class="left purple inverted menu">
                <a class="item active">
                    Main Menu
                </a>
                <a class="item">
                    About Us
                </a>
            </div>

            <div class="right menu">


                <div class="item">
                    Support
                </div>
                <a class="item">
                    FAQ
                </a>
                <a class="item">
                    E-mail Support
                </a>
            </div>
        </div>
    </div>

</div>


<div class="ui padded stackable grid">
    <div class="ui row">
        <div class="ui three wide column">
            @yield('sidemenu')
        </div>
        <div class="ui thirteen wide column">
            @yield('content')
        </div>
    </div>
</div>

@include('admins.js')

@yield('javascript')

<script type="text/javascript">
    $('.ui.dropdown').dropdown();
</script>

<script type="text/javascript">
    angular.module("MainMenuApp", ['AppConfig'])
            .controller("UserCtrl", function ($scope, $http) {
                $scope.current_user = {};
                console.log("UserCtrl MainMenuApp Start...")

//                $http.get('/api/auth/user').success(function (response) {
//                    $scope.current_user = response;
//                })

                $scope.logout = function () {
                    var logout = $http.get('/api/auth/user');

                    logout.success(function () {
                        window.location = '/auth/login';
                    })
                }
            })

    angular.bootstrap($("#MainMenu"), ['MainMenuApp']);

</script>



</body>
</html>