@extends('admins.layout')

@section('content')

    <div ng-app="ContentApp">

        <div ui-view></div>

    </div>

@stop

@section('javascript')

    <script type="text/javascript" src="/app/admin/content/app.js"></script>

@stop

