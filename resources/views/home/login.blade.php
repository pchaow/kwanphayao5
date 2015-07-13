@extends('home.layout')

@section('content')

    <div class="ui middle aligned center aligned grid">
        <div class="column" style="max-width: 450px;">
@if(isset($loginError))
            <div class="ui negative message">
                <div class="header">
                    <% $loginError  %>
                </div>
            </div>
@endif
            <div class="ui top attached green inverted segment">
                <h4>เข้าใช้งานระบบ / Sign in</h4>
            </div>
            <div class="ui attached segment">
                <form class="ui form" method="post" action="/login">
                    <div class="ui field">
                        <label>Username or E-Mail</label>

                        <div class="ui left icon input">
                            <i class="mail icon"></i>
                            <input name="email" type="text" placeholder="Username & E-Mail">
                        </div>

                    </div>
                    <div class="ui field">
                        <label>Password</label>

                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input name="password" type="password" placeholder="Password">
                        </div>

                    </div>
                    <div class="ui grid">
                        <div class="row two column">
                            <div class="column">
                                <button type="submit" class="fluid ui primary button">User Login</button>
                            </div>
                            <div class="column">
                                <a href="#" class="fluid ui positive button">Register</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection