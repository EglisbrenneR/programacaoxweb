<?php
                    //Número informados pelo usuário
                    $num1 = $_POST['n1']; //Valor do usuario
                    $num2 = $_POST['n2']; //Valor do usuario
                    $j  = 0;
                    $soma = 0;
                    //Alimentar o vetor A com 100 posições
                    for($i=1;$i<=100;$i++){
                        $a[$i-1] = rand($num1,$num2);
                    }

                    //Identificar os numeros pares e armazenar no vetor B com no maximo 10 posições
                    for($i=1;$i<=100;$i++){

                        //Verificando se o numero é PAR
                        if(($a[$i-1]%2) == 0){
                        //Controlando quantidade de 10 valores no vetor B
                        if($j <= 9){
                            $b[$j] = $a[$i-1];
                            //Soma dos numeros pares
                            $soma = $soma + $b[$j];
                        }
                            $j++;

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
            <h1 class="m-0 text-dark">Questão 7
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questâo 7</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <h2>7. Faça  um  algoritmo leia  100  números  randômicos, calcule e  mostre  a  soma  dos  10  primeiros  números pares.</h2>
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
                        <label for="primeiro numero" class="col-sm-2 col-form-label">Primeiro Numero</label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="primeiro numero"name="primeiro numero" placeholder="Digite o Primeiro Numero" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="segundo numero" class="col-sm-2 col-form-label">Segundo Numero</label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="segundo numero"name="segundo numero" placeholder="Digite Segundo Numero" required>
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

                <?php echo $soma;
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