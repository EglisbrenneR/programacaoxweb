<?php

    $comb   =   $_POST['combustivel'];
    $dist   =   $_POST['distancia'];

    //$dist   =   500;
    //$comb   =   50;

    function consumo($dist_percorrida, $comb_gasto){
        $consumo_medio = ($dist_percorrida/$comb_gasto);
        return $consumo_medio;
    }
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
            <h1 class="m-0 text-dark">Questão 10
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questâo 10</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <h2>10. Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível. Fórmula: Consumo médio = Km / litros.</h2>
                            <!-- Horizontal Form -->
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Calcule sua distancia por km</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Distancia</label>
                        <div class="col-sm-10">
                        <input type="nomber" min="1" class="form-control" id="distancia"name="distancia" placeholder="ex 500 km" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">combustivel</label>
                        <div class="col-sm-10">
                        <input type="nomber" min="1" class="form-control" id="combustivel"name="combustivel" placeholder="ex 50 lts" required>
                        </div>
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
                    echo "Consumo médio do veiculo é: " .consumo($dist,$comb)."Km/lts.";
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