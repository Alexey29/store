<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li data-toggle="modal" data-target="#myModal"><a href="#">Login</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">

                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">

                </div>

                <br>

                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2"></span>
                    <input type="text" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-xs-12 col-sm-3">
        <p align="center"><img src="img/img.GP" alt="img" height="700" width="350" class="img-thumbnail"></p>
        <p align="center"><b>Гарри Потерр</b> (часть1)</p>
        <div class="btn-group btn-group-justified" role="group" >
            <div class="btn-group" role="group">
                <a href="more.php" type="button" class="btn btn-default">More</a>
            </div>
            <div class="btn-group" role="group">
                <a href="#" type="button" class="btn btn-default" class="btn btn-success" ><b>Buy</b></a>
            </div>
        </div>
    </div>



    <div class="col-xs-12 col-sm-3">
        <p align="center"> <img src="img/img.2" alt="img"  height="700" width="350" class="img-thumbnail"></p>
        <p align="center"><b>Гарри Потерр</b> (часть2)</p>
        <div class="btn-group btn-group-justified" role="group" >
            <div class="btn-group" role="group">
                <a href="#" type="button" class="btn btn-default">More</a>
            </div>
            <div class="btn-group" role="group">
                <a href="#" type="button" class="btn btn-default" class="btn btn-success" ><b>Buy</b></a>
            </div>
        </div>
    </div>

    <div class="clearfix visible-xs-block"></div>

    <div class="col-xs-12 col-sm-3">
        <p align="center"> <img src="img/img.GP" alt="img" height="700" width="350" class="img-thumbnail"></p>
        <p align="center"><b>Гарри Потерр</b>(часть3)</p>
        <div class="btn-group btn-group-justified" role="group" >
            <div class="btn-group" role="group">
                <a href="#" type="button" class="btn btn-default">More</a>
            </div>
            <div class="btn-group" role="group">
                <a href="#" type="button" class="btn btn-default" class="btn btn-success" ><b>Buy</b></a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <p align="center">  <img src="img/img.2" alt="img"  height="700" width="350" class="img-thumbnail"></p>
        <p align="center"><b>Гарри Потерр</b> (часть4)</p>
        <div class="btn-group btn-group-justified" role="group" >
            <div class="btn-group" role="group">
                <a href="#" type="button" class="btn btn-default">More</a>
            </div>
            <div class="btn-group" role="group">
                <a href="#" type="button" class="btn btn-default" class="btn btn-success" ><b>Buy</b></a>
            </div>
        </div>
    </div>
</div>






