<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
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
  <body>
    <?=$this->element('header');?>
    <?= $this->fetch('content'); ?>
    <?=$this->element('footer');?>
    <?= $this->Html->script('Site.main.js'); ?>
  </body>
</html>