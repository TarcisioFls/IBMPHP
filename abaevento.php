<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="tababble">
<div class="container">
    <img src="img/nossoseventos.jpg" alt="Smiley face" height="70" width="83%">

  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#janeiro">janeiro</a></li>
    <li><a data-toggle="tab" href="#fevereiro">fevereiro</a></li>
    <li><a data-toggle="tab" href="#março">março</a></li>
    <li><a data-toggle="tab" href="#abril">abril</a></li>
    <li><a data-toggle="tab" href="#maio">maio</a></li>
    <li class="active"><a data-toggle="tab" href="#junho">junho</a></li>
    <li><a data-toggle="tab" href="#julho">junho</a></li>
    <li><a data-toggle="tab" href="#agosto">agosto</a></li>
    <li><a data-toggle="tab" href="#setembro">setembro</a></li>
    <li><a data-toggle="tab" href="#outubro">outubro</a></li>
    <li><a data-toggle="tab" href="#novembroi">novembro</a></li>
    <li><a data-toggle="tab" href="#dezembro">dezembro</a></li>
  </ul>

  <div class="tab-content">
    <div id="janeiro" class="tab-pane fade">
      <h3>Mês de Janeiro</h3>

<?php include_once 'buscaevento.php' ?>

    </div>

    <div id="fevereiro" class="tab-pane fade">
      <h3>Mês de Fevereiro</h3>
      <?php include_once 'buscaeventofev.php' ?>

    </div>

    <div id="março" class="tab-pane fade">
      <h3>Mês de Março</h3>
            <?php include_once 'buscaeventomar.php' ?>
    </div>

   <div id="abril" class="tab-pane fade">
      <h3>Mês de Abril</h3>
 <?php include_once 'buscaeventoabr.php' ?>
    </div>

    <div id="maio" class="tab-pane fade">
      <h3>Mês de Maio</h3>
<?php include_once 'buscaeventomai.php' ?>
</script>
    </div>

    <div id="junho" class="tab-pane fade in active">
      <h3>Mês de Junho</h3>
<?php include_once 'buscaeventojun.php' ?>"
    </div>
    <div id="julho" class="tab-pane fade">
      <h3>Mês de Julho</h3>
<?php include_once 'buscaeventojul.php' ?>
    </div>
    

    <div id="agosto" class="tab-pane fade">
      <h3>Mês de Agosto</h3>
<?php include_once 'buscaeventoago.php' ?>

    </div>

    <div id="setembro" class="tab-pane fade">
      <h3>Mes de Setembro</h3>
<?php include_once 'buscaeventoset.php' ?>"
    </div>
      
    <div id="outubro" class="tab-pane fade">
      <h3>Mês de Outubro</h3>
<?php include_once 'buscaeventoout.php' ?>
    </div>

    <div id="novembro" class="tab-pane fade">
      <h3>MÊs de Novembro</h3>
<?php include_once 'buscaeventonov.php' ?>
    </div>

    <div id="dezembro" class="tab-pane fade">
      <h3>Mês de Dezembro</h3>
<?php include_once 'buscaeventodez.php' ?>
    </div>

    </div>
  </div>
</div>

</body>
</html>