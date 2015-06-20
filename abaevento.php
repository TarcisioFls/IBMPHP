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
  <h2>Nossos Eventos!</h2>
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
      <h3>evento janeiro</h3>

<?php include_once 'buscaevento.php' ?>

    </div>

    <div id="fevereiro" class="tab-pane fade">
      <h3>evento fevereiro</h3>
      <?php include_once 'buscaeventofev.php' ?>

    </div>

    <div id="março" class="tab-pane fade">
      <h3>evento março</h3>
            <?php include_once 'buscaeventomar.php' ?>
    </div>

   <div id="abril" class="tab-pane fade">
      <h3>evento abril</h3>
 <?php include_once 'buscaeventoabr.php' ?>
    </div>

    <div id="maio" class="tab-pane fade">
      <h3>evento maio</h3>
<?php include_once 'buscaeventomai.php' ?>
</script>
    </div>

    <div id="junho" class="tab-pane fade in active">
      <h3>evento junho</h3>
<?php include_once 'buscaeventojun.php' ?>"
    </div>
    <div id="julho" class="tab-pane fade">
      <h3>evento julho</h3>
<?php include_once 'buscaeventojul.php' ?>
    </div>
    

    <div id="agosto" class="tab-pane fade">
      <h3>evento agosto</h3>
<?php include_once 'buscaeventoago.php' ?>

    </div>

    <div id="setembro" class="tab-pane fade">
      <h3>evento setembro</h3>
<?php include_once 'buscaeventoset.php' ?>"
    </div>
      
    <div id="outubro" class="tab-pane fade">
      <h3>evento outubro</h3>
<?php include_once 'buscaeventoout.php' ?>
    </div>

    <div id="novembro" class="tab-pane fade">
      <h3>evento novembro</h3>
<?php include_once 'buscaeventonov.php' ?>
    </div>

    <div id="dezembro" class="tab-pane fade">
      <h3>evento dezembro</h3>
<?php include_once 'buscaeventodez.php' ?>
    </div>

    </div>
  </div>
</div>

</body>
</html>