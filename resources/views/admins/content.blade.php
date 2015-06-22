@extends('admins.layout')

@section('content')

    <div ng-app="ContentAdmin">

        <div ui-view></div>

    </div>

@stop

@section('javascript')
    <script type="text/javascript" src="/app/admin/CategoryService.js"></script>
    <script type="text/javascript" src="/app/admin/ContentService.js"></script>
    <script type="text/javascript" src="/app/admin/content/app.js"></script>

@stop

