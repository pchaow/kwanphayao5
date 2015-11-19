@extends('admins.layout')

@section('content')

    <div ng-app="PageAdmin">

        <div ui-view></div>

    </div>

@stop

@section('javascript')
    <script type="text/javascript" src="/app/admin/PageService.js"></script>
    <script type="text/javascript" src="/app/admin/page/app.js"></script>

@stop

