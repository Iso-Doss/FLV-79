<!DOCTYPE html>
<html>
	<head>
            <title>Phalcon PHP Test</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="" rel="stylesheet">
            <link href="<?php $base; ?>public/css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
            <link href="<?php $base; ?>public/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?php $base; ?>public/css/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
            <link href="<?php $base; ?>public/css/Style.css" rel="stylesheet">
            <link href="<?php $base; ?>public/css/bootstrap/js/bootstrap.min.js" rel="stylesheet">
            <script href="<?php $base; ?>public/jquery/dist/jquery.js" ></script>
            <script src="<?php $base; ?>public/css/bootstrap/js/jquery.js"></script>
            <script src="<?php $base; ?>public/css/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php $base; ?>public/css/bootstrap/js/bootstrap.js"></script>
        </head>
	<body  data-spy="scroll" data-target=".navbar">
	
	<nav class="navbar navbar-inverse navbar-fixed-top" style="back">

            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= $this->url->get('');?>">FLV#79</a></li>
                <li><a href="#page-top"></a></li>
                <li><a href="#noscours">Cours</a></li>
                <li><a href="#lesplussuivis">Les plus suivis</a></li>
                <li><a href="<?= $this->url->get('formateurs/index');?>">Formateurs</a></li>
            </ul>
            <form class="navbar-form navbar-right inline-form">
                <div class="form-group">
                    <input type="search" class="input-sm form-control" placeholder="Recherche">
                    <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span>Chercher</button>
                </div>
            </form>

        </nav>
	
		{{ content() }}
		<div class="col-lg-12 col-md-12 col-xs-12 navbar navbar-inverse navbar-bottom" style="back">
    <div class="col-lg-6 col-md-12 col-xs-12 navbar-form navbar-left inline-form">
        <h4> COPYRGHT 2016 KARTHS_SOLUTION/FVL#79</h4>
    </div>
    
    <!--div class="col-lg-1 col-md-0 col-xs-0 navbar-form inline-form"> 
        <h1 style="color: white; margin-left: 50px;">|</h1>
    </div-->
    
    <div class=" navbar-form navbar-right inline-form">
        <form class="col-lg-6 col-md-12 col-xs-12 navbar-form navbar-right inline-form">
            <div class="form-group">
                <a class="btn btn-primary" href="#"><i class="fa fa-twitter fa-2x "></i></a>
                <a class="btn btn-primary " href="#"><i class="fa fa-facebook fa-2x "></i></a>
                <a class="btn btn-danger"href="#"><i class="fa fa-google-plus fa-2x "></i></a>
                <a class="btn btn-primary " href="#"><i class="fa fa-youtube fa-2x "></i></a>
                <a class="btn btn-success" href="#"><i class="fa fa-linkedin fa-2x "></i></a>
                <a class="btn btn-danger"href="#"><i class="fa fa-github fa-2x "></i></a>
            </div>
        </form>
    </div>
</div>

                <script src="<?php $base; ?>public/css/bootstrap/dist/js/jquery.js"></script>
                <script src="<?php $base; ?>public/css/bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="<?php $base; ?>public/css/bootstrap/dist/js/jquery.min.js"></script>

	</body>
</html>