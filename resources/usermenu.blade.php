<div class="item ui dropdown" ng-controller="UserCtrl">
    @if(Auth::user()->logo)
        <img class="ui avatar avatar-menu image" src="<%Auth::user()->logo->url%>?h=200">
    @else
        <img class="ui avatar avatar-menu image" src="/images/square-image.png">
    @endif
    @if(Auth::user())
        <span><%Auth::user()->email%></span>
    @endif
    <div class="menu">
        <div class="header">
            <i class="tags icon"></i>
            เลือกสิทธิ์การใช้งาน
        </div>
        @foreach( Auth::user()->roles as $role)
            <a class=" <% Request::is("$role->key/*") ? 'active' : '' %> item" href="/<%$role->key%>">
                <% $role->name %>
            </a>
        @endforeach
        <div class="divider"></div>
        <a class="item">Change Profile</a>
        <a class="item" ng-click="logout()">Logout</a>
    </div>
</div>