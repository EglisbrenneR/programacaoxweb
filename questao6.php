<?php

          $valorproduto = $_POST['valorproduto'];
          $ab = 7;
          $ad = 100;
          $resultado1 = $valorproduto * $ab / $ad;
          $resultado2 = $valorproduto - $resultado1;
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
            <h1 class="m-0 text-dark">Questão 6
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questâo 6</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <h2>6. Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.</h2>
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
                        <label for="valorproduto" class="col-sm-2 col-form-label">Valor do Produto</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="valorproduto" name="valorproduto" placeholder="Ex.: 3" required>
                        </div>
                    </div>
                  
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

                    echo "O valor original do produto é: "; 

                    echo $valorproduto; 

                    echo ",   ";


                    echo "O valor do desconto é:    ";
                    echo $resultado1;
                    echo ",   ";
                    
                    echo "E o Valor do produto com desconto  é ";          
                    echo $resultado2;
                    
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
       