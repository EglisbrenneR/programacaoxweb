<?php

$ms = $_POST['velocidade'];
$km = 3.6;

$resultado = $ms * $km;
      
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ATIVIDADE PHP</title>
  <?php
    include "_includes/header.php";
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php
    include "_includes/leftnav.php";
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Questão 4
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questâo 4</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <h2>4. Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.</h2>
                            <!-- Horizontal Form -->
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Calcule sua velocidade em km/h</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="">Velocidade</label>
                        <div class="col-sm-10">
                        <input type="text"  id="velocidade"name="velocidade" class="form-control">
                        </div>
                    </div>
                   
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    <button type="reset" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
                </div>

                    <?php

                    $ms = $_POST['velocidade'];
                    $km = 3.6;

                    $resultado = $ms * $km;
                        
                    ?>

        <div class="card-body pt-0">
        </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
  <!-- /.content-wrapper -->
 
  <?php
    include "_includes/footer.php";
  ?>