@extends('admins.layout')

@section('content')

    <div ng-app="MainCategoryApp">

        <div ui-view></div>

    </div>

@stop

@section('javascript')

    <script type="text/javascript" src="/app/admin/mainCategory/app.js"></script>
    <script type="text/javascript" src="/app/admin/mainCategory/services.js"></script>
    <script type="text/javascript" src="/app/admin/category/services.js"></script>
    <script type="text/javascript" src="/app/admin/mainCategory/controllers.js"></script>
    <script type="text/javascript" src="/app/admin/services/contentTypeService.js"></script>

@stop

