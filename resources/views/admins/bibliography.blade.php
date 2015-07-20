@extends('admins.layout')

@section('content')

    <div ng-app="app">

        <div ui-view></div>

    </div>

@stop

@section('javascript')
<script src="/app/admin/BibliographyService.js"></script>
<script src="/app/admin/bibliography/app.js"></script>
@stop

