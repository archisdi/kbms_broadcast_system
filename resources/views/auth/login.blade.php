<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>    Admin Login
    </title>

    <link rel="icon" href="{{asset('/img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/font-awesome/css/font-awesome.min.css')}}">


    <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/skins/skin-red.min.css')}}">
</head>
<body class="hold-transition skin-red sidebar-mini layout-top-nav">

<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="" class="navbar-brand"><b>KBMS</b>
                        Broadcaster
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>


            </div>

        </nav>
    </header>
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <br><br>
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 text-center">
                            <img class="center-block img img-responsive" src="/img/logo.png"
                                 style="width: 50%;height: 50%">
                            <h3>
                                <b>
                                    KBMS Broadcaster
                                </b>
                            </h3>
                            <form action="/login" method="post">
                                <input type="hidden" name="_token" value="peWApyguBQTU6Oqh37BS1hG7uBGJZ11xGbXb8ixe">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <button type="submit" class="btn btn-danger btn-flat btn-block btn-flat">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.1
            </div>
            <strong>Copyright &copy; 2016-2017 Internal KBMS.</strong>
        </div>
        <!-- /.container -->
    </footer></div>


<script src="{{asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('/dist/js/app.min.js')}}"></script>

</body>
</html>
