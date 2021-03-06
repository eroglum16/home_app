<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lütfen Giriş Yapın </title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css");?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url("assets/vendor/metisMenu/metisMenu.min.css");?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/dist/css/sb-admin-2.css");?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url("assets/vendor/morrisjs/morris.css");?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-image: <?php echo base_url("assets/images/home2.png");?>">
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span><i class="fa fa-home"></i></span> Ev Uygulaması</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Ara...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i> Anasayfa</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Harcamalar<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> Ders Programları</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i> Ödev Planlayıcı</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Örnek Sayfalar<span class="fa arrow"></span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

	    <div id="page-wrapper">
            <div class=“row”>
                <h2 class=“page-header”> Opps! </h2>
      
                <p class=“text-danger”> Oturumunuzun süresi dolmuş! Lütfen <a href=<?php echo site_url(""); ?> > giriş yapın. </a> </p>
            </div>
        </div>
    </div>

	    <!-- jQuery -->
    <script src=<?php echo base_url("assets/vendor/jquery/jquery.min.js");?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo base_url("assets/vendor/metisMenu/metisMenu.min.js");?>></script>

    <!-- Morris Charts JavaScript -->
    <script src=<?php echo base_url("assets/vendor/raphael/raphael.min.js");?>></script>
    <script src=<?php echo base_url("assets/vendor/morrisjs/morris.min.js");?>></script>
    <script src=<?php echo base_url("assets/data/morris-data.js");?>></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo base_url("assets/dist/js/sb-admin-2.js");?>></script>

</body>

</html>
