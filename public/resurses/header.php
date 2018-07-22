<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resurses/stails.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/basket">Basket</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li data-toggle="modal" data-target="#myModal"><a href="#">Login</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<form class="form-horizontal" method="post" action="login">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Enter your data</h4>
            </div>

<!--            <div class="modal-body">-->
<!---->
<!--                <div class="input-group">-->
<!--                    <span class="input-group-addon" id="sizing-addon2">@</span>-->
<!--                    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">-->
<!---->
<!--                </div>-->
<!---->
<!--                <br>-->
<!---->
<!--                <div class="input-group">-->
<!--                    <span class="input-group-addon" id="sizing-addon2"></span>-->
<!--                    <input type="text" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">-->
<!--                </div>-->
<!---->
<!--            </div>-->



<br>
            <br>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
            <br>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" name="pass" class="form-control" id="inputPassword3" placeholder="Password" value=""">
                    </div>
                </div>

<br>
            <br>




            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
</form>
<!--  888888888888888888888888888888888888888888888888 -->







