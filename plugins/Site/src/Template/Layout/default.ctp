<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nokengo</title>
    <link rel="icon" type="image/png" href="images/nokengo_logo_ciano.png">
    <?= $this->Html->css('Site.style.css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?= $this->Html->script('Site.main'); ?>
  </head>
  <body>
    <?= $this->fetch('content'); ?>
  </body>
</html>
