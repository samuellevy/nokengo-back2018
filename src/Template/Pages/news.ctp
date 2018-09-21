<section class="internal clubnews fix_header">
  <section class="featured_news">
    <div class="info_news">
      <h1 class="page_title">NOVIDADES</h1>
      <div class="slider_news">
        <?php foreach($posts as $key=>$post):?>
          <div class="item">
            <div class="head">
              <span><?= $post->created; ?></span>
              <!-- <a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a> -->
            </div>
            <h3 class="title"><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread", $post->slug]);?>"><?=$post->title;?> </a></h3>
            <p class="desc"><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread", $post->slug]);?>"><?=$post->description;?> </a></p><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread", $post->slug]);?>" class="view_more">VEJA MAIS [+]</a>
          </div>
          <?php if($key==2) break; ?>
        <?php endforeach;?>
      </div>
    </div>
    <div class="media">
      <div class="slider">
        <?php foreach($lastposts as $key=>$lastpost):?>
        <a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$lastpost->slug]);?>">
          <?php echo $this->Html->image('../uploads/files/'.$lastpost['capas'][0]['filename']);?>
        </a>
        <?php endforeach;?>
      </div>
    </div>
  </section>
  <section class="news">
    <div class="wrapper">
      <div class="cards type2">
        <?php foreach($posts as $key=>$post):?>
          <?php if($key > 2):?>
            <div class="card_item"><span class="date"><?= $post->created; ?></span>
              <h4 class="title"><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$post->slug]);?>"><?=$post->title;?></a></h4>
              <p class="desc"><a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$post->slug]);?>"><?=$post->description;?></a></p>
              <div class="media">
                <a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$post->slug]);?>"><?php echo $this->Html->image('../uploads/files/'.$post['miniaturas'][0]['filename']);?></a>
              </div>
              <a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$post->slug]);?>">VEJA MAIS [+]</a>
            </div>
          <?php endif;?>
        <?php endforeach;?>
      </div>
    </div>
  </section>
</section>