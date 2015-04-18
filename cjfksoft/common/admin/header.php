<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="K SOFT SOLUTIONS - Kwaye Kant">

    <title>CleanKakos :: Administration | Le 1er pressing 3.0 au Cameroun</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=  base_url()?>cjfksoft/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?=  base_url()?>cjfksoft/css/upload/jquery.fileupload.css">
    <link rel="stylesheet" href="<?=  base_url()?>cjfksoft/css/upload/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="<?=  base_url()?>cjfksoft/css/upload/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="<?=  base_url()?>cjfksoft/css/upload/jquery.fileupload-ui-noscript.css"></noscript>

    <!-- Custom CSS -->
    <link href="<?=  base_url()?>cjfksoft/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!--<link href="<?=  base_url()?>cjfksoft/css/plugins/morris.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="<?=  base_url()?>cjfksoft/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="<?=  base_url()?>cjfksoft/css/ksoft.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?=  base_url()?>cjfksoft/images/logo_front.png" class="img-responsive" alt="" width="80" height="80" /></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$this->session->userdata("username");?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=""><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?=base_url();?>auth/logout"><i class="fa fa-fw fa-power-off"></i> Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="margin: 0 25%; width: 100%">
                <ul class="nav navbar-nav side-nav2">
                    <li class="active">
                        <a href="<?=base_url()?>webpage/"><i class="fa fa-fw fa-2x fa-home"></i></a>
                    </li>
                    <li>
                        <a href="<?=  base_url()?>webpage/"><i class="fa fa-fw"></i> Commande</a>
                    </li>
                    <li>
                        <a href="<?=  base_url()?>webpage/user"><i class="fa fa-fw"></i> Utilisateur</a>
                    </li>
                    <li>
                        <a href="<?=  base_url()?>webpage/category"><i class="fa fa-fw"></i> Cat&eacute;gories</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>webpage/service"><i class="fa fa-fw"></i> Services</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">