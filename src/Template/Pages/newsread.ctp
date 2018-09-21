<body class="internal clubnews white_header">  
  <section class="read_news">
    <div class="wrapper">
      <div class="wrap">
        <div class="media"><?php echo $this->Html->image('../uploads/files/'.$post['capas'][0]['filename']);?></div>
        <div class="text">
          <h2 class="title"><?=$post->title;?></h2>
          <p class="quote"><?=$post->description;?></p>
          <div class="content">
            <?=$post->content;?>
          </div>
          <div class="footer_news">
            <span><?= $post->created; ?></span>
            <!-- <span class="share">Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="news">
    <div class="wrapper">
      <div class="cards type2">
        <?php foreach($posts as $item):?>
        <div class="card_item"><span class="date"><?= $item->created; ?></span>
          <h4 class="title"><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$item->slug]);?>"><?=$item->title?></a></h4>
          <p class="desc"><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$item->slug]);?>"><?=$item->description?></a></p>
          <div class="media"><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$item->slug]);?>"><?php echo $this->Html->image('../uploads/files/'.$item['miniaturas'][0]['filename']);?></a></div><a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$item->slug]);?>">VEJA MAIS [+]</a>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </section></a>
</body>