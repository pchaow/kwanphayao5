<!DOCTYPE HTML5>
<html>
<head>
    <meta name="csrf_token" value="<?php echo csrf_token(); ?>">
    <link rel="stylesheet" href="/components/semantic-ui/dist/semantic.min.css"/>
    <link rel="stylesheet" href="/components/semantic-ui/dist/components/dropdown.min.css"/>

    <script src="/components/jquery/dist/jquery.min.js"></script>
    <script src="/components/semantic-ui/dist/semantic.min.js" type="text/javascript"></script>
    <script src="/components/semantic-ui/dist/components/dropdown.min.js" type="text/javascript"></script>
    <style>
        .avatar-menu {
            height: 2em !important;
            width: 2em !important;
            margin-top: -0.5em;
            margin-bottom: -0.5em;
        }
    </style>
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


                <div class="item ui dropdown " ng-controller="UserCtrl">

                    <div ng-controller="loadCtrl" ng-class="{active:active}" class="ui inverted dimmer ">
                        <div class="ui small text loader">
                            Loading
                        </div>
                    </div>

                    <img ng-if="!current_user.logo" class="ui avatar avatar-menu image" src="/images/square-image.png">
                    <img ng-if="current_user.logo" class="ui avatar avatar-menu image" ng-src="{{current_user.logo.url}}?h=200">
                    <span ng-if="!current_user.email">UserName</span>
                    <span ng-if="current_user.email" ng-bind="current_user.email"></span>

                    <div class="menu">
                        <a class="item">Change Profile</a>
                        <a class="item" ng-click="logout()">Logout</a>
                    </div>


                </div>

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
            <div class="ui fluid vertical menu">
                <div class="header item">
                    Administrator
                </div>
                <a class=" <% Request::is('admin/dashboard') ? 'active' : '' %> item" href="/admin">
                    <i class="home icon"></i>
                    Dashboard
                </a>

                <a class=" <% Request::is('admin/user') ? 'active' : '' %> item" href="/admin/user">
                    Users
                </a>

                <a class=" <% Request::is('admin/role') ? 'active' : '' %> item" href="/admin/role">
                    Roles
                </a>

            </div>
            <div class="ui fluid vertical menu">
                <div class="header item">
                    Contents
                </div>
                <a class=" <% Request::is('admin/contents') ? 'active' : '' %> item" href="/admin/content">
                    <i class="book icon"></i>
                    Content
                </a>
                <a class=" <% Request::is('admin/category') ? 'active' : '' %> item" href="/admin/category">
                    Category
                </a>


                <div class="ui dropdown item">
                    More
                    <i class="dropdown icon"></i>

                    <div class="menu">
                        <a class="item"><i class="edit icon"></i> Edit Profile</a>
                        <a class="item"><i class="globe icon"></i> Choose Language</a>
                        <a class="item"><i class="settings icon"></i> Account Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui thirteen wide column">
            @yield('content')
        </div>
    </div>
</div>



@include('admins.js')

<script type="text/javascript">
    angular.module("MainMenuApp", ['AppConfig'])
            .controller("UserCtrl", function ($scope, $http) {
                $scope.current_user = {};
                console.log("UserCtrl MainMenuApp Start...")

                $http.get('/api/auth/user').success(function (response) {
                    $scope.current_user = response;
                })

                $scope.logout = function () {
                    var logout = $http.get('/api/auth/user');

                    logout.success(function () {
                        window.location = '/auth/login';
                    })
                }
            })

    angular.bootstrap($("#MainMenu"), ['MainMenuApp']);

</script>

@yield('javascript')




<script type="text/javascript">
    $(document).ready(function(){
        $('.ui.dropdown').dropdown();
    })
</script>

</body>
</html>