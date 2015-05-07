@extends('admins.layout')

@section('content')

    <div ng-app="CategoryAdmin">

        <div ui-view></div>

    </div>

@stop

@section('javascript')

    <script type="text/javascript" src="/app/admin/category/app.js"></script>
    <script type="text/javascript" src="/app/admin/CategoryService.js"></script>

@stop

