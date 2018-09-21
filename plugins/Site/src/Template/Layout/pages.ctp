<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <?= $this->Html->css('Site.main.css'); ?>
 <title>
      CCRJ<?php echo isset($title)?' | '.$title:''; ?>
  </title>
  </head>
  <body class="internal white_header">
    <?=$this->element('white_header');?>
    <?= $this->fetch('content'); ?>
    <?= $this->Html->script('Site.main.js'); ?>
  </body>
</html>