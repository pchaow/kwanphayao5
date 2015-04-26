@extends('admins.layout')

@section('content')

    <div ng-app="ContentApp">

        <div ui-view></div>

    </div>

@stop

@section('javascript')

    <script type="text/javascript" src="/app/admin/content/app.js"></script>
    <script type="text/javascript" src="/app/admin/content/services.js"></script>
    <script type="text/javascript" src="/app/admin/content/controllers.js"></script>

    <script type="text/javascript" src="/app/admin/category/services.js"></script>
    <script type="text/javascript" src="/app/admin/mainCategory/services.js"></script>
    <script type="text/javascript" src="/app/admin/services/contentTypeService.js"></script>
@stop

