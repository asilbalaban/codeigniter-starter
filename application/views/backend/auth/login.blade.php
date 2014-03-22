<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{base_url('public/assets/sbadmin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{base_url('public/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{base_url('public/assets/sbadmin/css/sb-admin.css')}}" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{base_url('auth/login')}}" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input name="username" class="form-control" placeholder="Kullanıcı Adı"  type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input name="password" class="form-control" placeholder="Parola"type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="remember">Beni Hatırla
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Giriş">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="{{base_url('public/assets/sbadmin')}}/js/jquery-1.10.2.js"></script>
    <script src="{{base_url('public/assets/sbadmin')}}/js/bootstrap.min.js"></script>
    <script src="{{base_url('public/assets/sbadmin')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{base_url('public/assets/sbadmin')}}/js/sb-admin.js"></script>

</body>
</html>