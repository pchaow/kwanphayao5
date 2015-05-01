<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/components/FroalaWysiwygEditor/css/font-awesome.min.css" rel="stylesheet">
    <link href="/components/FroalaWysiwygEditor/css/froala_content.min.css" rel="stylesheet">
    <link href="/components/FroalaWysiwygEditor/css/froala_style.min.css" rel="stylesheet">
    <link href="/components/FroalaWysiwygEditor/css/froala_editor.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet" type="text/css" charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-brand">สารานุกรมกว๊านพะเยา</div>
</nav>

<div class="container-fluid">

    <div class="row">


    <div class="col-sm-3 col-md-2 sidebar">

        <ul class="nav nav-sidebar">
            <li class="{{Request::path() == 'admin' ? 'active' : ''}}"><a href="/admin">Overview</a></li>
        </ul>

        <ul class="nav nav-sidebar">
            <li class="{{Request::path() == 'admin/main-category' ? 'active' : ''}}"><a href="/admin/main-category">Main Category</a></li>
            <!--li class="{{Request::path() == 'admin/category' ? 'active' : ''}}"><a href="/admin/category">Category</a></li-->
            <li class="{{Request::path() == 'admin/content' ? 'active' : ''}}"><a href="/admin/content">Content</a></li>

        </ul>

        <ul class="nav nav-sidebar">
            <li class="{{Request::path() == 'admin/user' ? 'active' : ''}}"><a href="/admin/user">User</a></li>
            <li class="{{Request::path() == 'admin/role' ? 'active' : ''}}"><a href="/admin/role">Role</a></li>
        </ul>

    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        @yield('content')
    </div>

    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/components/jquery/dist/jquery.min.js"></script>
<script src="/components/jquery-ui/jquery-ui.min.js"></script>
<script src="/components/FroalaWysiwygEditor/js/froala_editor.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="/components/angular/angular.js"></script>
<script src="/components/angular-bootstrap/ui-bootstrap.min.js"></script>
<script src="/components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
<script src="/components/angular-resource/angular-resource.min.js"></script>
<script src="/components/angular-messages/angular-messages.min.js"></script>
<script src="/components/angular-ui-router/release/angular-ui-router.min.js"></script>
<script src="/components/angular-ui-sortable/sortable.min.js"></script>
<script src="/components/angular-froala/src/angular-froala.js"></script>
<script src="/components/angular-froala/src/froala-sanitize.js"></script>
@yield('javascript')


</body>
</html>