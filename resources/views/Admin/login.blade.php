<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
body{
    margin: 0;
    padding: 0;
    background-color: #ffffff;
    height: 100vh;
    background-image: url('{{url('img/event.jpg')}}');
    background-size:cover;
  }
  #login .container #login-row #login-column #login-box {
    margin-top: 100px;
    max-width: 500px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #000000e0;
    
  }
  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
  }
</style>
<body>
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('admin.dologin.store')}}" method="POST">
                         @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div style="display:flex;">
                             
                                <div class="form-group" style="padding: 10px;">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="container-login100-form-btn" style="padding:10px;">
                                    <a href="{{route('login.facebook')}}" class="btn btn-primary">
                                        <i class="fa-brands fa-facebook"></i>
                                        Login With Facebook</a>
                                </div>

                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>