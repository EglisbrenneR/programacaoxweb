<?php 


$a01 = filter_input(INPUT_POST, "txtNumero1");
$b02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = $a01 + $b02 + $opera;
 
if($a01  && $b02){
  switch($opera){
    case "+":
      $resul = ($a01 + $b02);
    break;
    case "-":
      $resul = ($a01 - $b02);
    break;
    case "*":
      $resul = ($a01 * $b02);
    break;
    case "/":
      $resul = ($a01 / $b02);
    break;
  }
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
            <h1 class="m-0 text-dark">Questão 8
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questâo 8</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <h2>8. Crie um algoritmo em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão).  Crie  duas  caixas  de  texto  para  receber  2  números.  Realize  a  operação  escolhida  em  cada um dos números.</h2>
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
                        <label for="numero 1" class="col-sm-2 col-form-label">Numero 1</label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="numero 1"name="numero 1" placeholder="Primeiro Numero" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numero 2" class="col-sm-2 col-form-label">Numero 2</label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="numero2"name="numero2" placeholder="Segundo Numero" required>
                        </div>
                    </div>
                    </div>
                    <p>  Selecione a operação desejada:</p><br>

                        <div>
                                <input type="radio" id="+" name="+">
                                <label for="+">Adição</label>
                            </div>

                            <div>
                                <input type="radio" id="-" name="-">
                                <label for="-">Subtração</label>
                            </div>

                            <div>
                                <input type="radio" id="/" name="/">
                                <label for="/">Divisão</label>
                            </div>

                            <div>
                                <input type="radio" id="*" name="*">
                                <label for="*">Multiplicação</label>
                            </div>



                        </div>

                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    <button type="text" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
                </div>

                        <?php
                            echo "O Resultado é: "; 

                            echo $resul; 
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
       