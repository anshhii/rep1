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

</head>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Autores</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit">Autores</i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" id="frmAutor" action="http://localhost/cakephp-1.3.20/administrador/save_autor" method="POST">

                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="data[nombre]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input name="data[apellidos]" class="form-control"></input>
                            </div>
                            <div class="form-group">
                                <label>Correo Electronico</label>
                                <input name="data[email]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Imagen</label>
                                <input name="data[imagen]" class="form-control">
                            </div>
                            <a onclick="Autor.guardar()" class="btn btn-default">Guardar</a>
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