<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Bootstrap Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/cakephp-1.3.20/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/cakephp-1.3.20/css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/cakephp-1.3.20/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Publicacion</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit">Publicacion</i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" id="frmPublicacion" action="http://localhost/cakephp-1.3.20/administrador/save_post" method="POST">

                            <div class="form-group">
                                <label>Titulo</label>
                                <input name="data[titulo]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Contenido</label>
                                <input name="data[contenido]" class="form-control"></input>
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input name="data[autor]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Imagen</label>
                                <input name="data[imagen]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Categoria</label><br>
                                <input name="data[categoria]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Created</label>
                                <input name="data[created]" class="form-control">
                            </div>
                            <a onclick="Publicacion.guardar()" class="btn btn-default">Guardar</a>
                        </form>
                   <div class="col-lg-6">
                    </div> 
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <!-- jQuery -->
    <script src="/cakephp-1.3.20/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/cakephp-1.3.20/js/bootstrap.min.js"></script>
    <script src="/cakephp-1.3.20/js/publicaciones.js"></script>
</body>
</html>