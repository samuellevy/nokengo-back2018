<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <?= $this->Html->css('Site.../mobile/css/main.css'); ?>
    
    <title>
      CCRJ<?php echo isset($title)?' | '.$title:''; ?>
  </title>
  </head>
  <body>
    <?=$this->element('mobile/header');?>
    <?= $this->fetch('content'); ?>
    <?=$this->element('mobile/footer');?>
    <?= $this->Html->script('Site.../mobile/js/main.js'); ?>
  </body>
</html>