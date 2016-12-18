<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/media/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/media/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/media/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/media/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

         
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
						<li>
                            <a href="/admin/editslider"><i class="fa fa-dashboard fa-fw"></i> Изменить слайдер</a>
                        </li>
						<li>
                            <a href="/admin/editgalerey"><i class="fa fa-dashboard fa-fw"></i> Изменить слайдер фотоальбома 1</a>
                        </li>
						<li>
                            <a href="/admin/editgalerey2"><i class="fa fa-dashboard fa-fw"></i> Изменить слайдер фотоальбома 2</a>
                        </li>
						
						<li>
                            <a href="/admin/news"><i class="fa fa-dashboard fa-fw"></i>Все новости</a>
                        </li>
						
						<li>
                            <a href="/admin/aboutme"><i class="fa fa-dashboard fa-fw"></i>Изменить "О себе"</a>
                        </li>
						<li>
                            <a href="/admin/exit"><i class="fa fa-dashboard fa-fw"></i>Выйти"</a>
                        </li>
						<!-- [f[ff[f[[f[[f[[f[[f[f[f[[f[f[[f[f[[f[f -->
						
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Изменение главного слайдера</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="/admin/editslider" enctype="multipart/form-data" method="POST">
                                        
                                        <div class="form-group">
                                            <label>Заголовок 1 картинки</label>
                                            <input class="form-control" placeholder="Текст" name="title1" value="<?php echo $slider[0]->title?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Картинка 1</label>
                                            <input type="file" name="slider1">
                                        </div>
										<div class="form-group">
                                            <label>Заголовок 2 картинки</label>
                                            <input class="form-control" placeholder="Текст" name="title2" value="<?php echo $slider[1]->title?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Картинка 1</label>
                                            <input type="file" name="slider2">
                                        </div>
										<div class="form-group">
                                            <label>Заголовок 3 картинки</label>
                                            <input class="form-control" placeholder="Текст" name="title3" value="<?php echo $slider[2]->title?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Картинка 1</label>
                                            <input type="file" name="slider3">
                                        </div>
										
                                        
                                        <button type="submit" class="btn btn-default">Сохранить</button>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/media/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/media/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/media/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/media/dist/js/sb-admin-2.js"></script>

</body>

</html>
