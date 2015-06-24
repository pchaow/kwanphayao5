@extends('dashboard_master')


@section('sidemenu')

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
        <a class=" <% Request::is('admin/content') ? 'active' : '' %> item" href="/admin/content">
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

@stop


@section('javascript')

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
        $(document).ready(function () {
            $('.ui.dropdown').dropdown();
        })
    </script>


@stop

