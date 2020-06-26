<?php

          $valororiginal = $_POST['valororiginal'];
          $taxajuros = 16;
          $taxaporc = 100;
          $numparcelas = 10;
          $resultado1 = $valororiginal * $taxajuros / $taxaporc;
          $resultado2 = $resultado1 + $valororiginal;
          $valorparcela = $resultado2 / $numparcelas; 
          $valortotal = $valororiginal + $resultado2
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
            <h1 class="m-0 text-dark">Questão 9
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questâo 9</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <h2>9. Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, dívida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.</h2>
                            <!-- Horizontal Form -->
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="valor original1" class="col-sm-2 col-form-label">Valor Original do Produto</label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="valor original"name="Valor Original"  required>
                        </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular Desconto</button>
                    <button type="text" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
                </div>
                <?php 
                  
                  echo "O valor da parcela é: " ;
                  echo $valorparcela; 

                  echo"  , ";

                  echo"E o Valor total do produto é:";
                  echo  $valortotal;
                  
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