<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{asset('Css/login.css')}}">
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Application<br> Login Page</h2>
        <p>Login or register from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="post" action="">
                @csrf
                @if(session('status'))
                        <h2>{{session('message')}}</h2>
                @endif
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                </div>
                <button type="submit" class="btn btn-black">Login</button>
                <a href="{{route('register')}}"><button type="button" class="btn btn-secondary">Register</button></a>
            </form>
        </div>
    </div>
</div>
