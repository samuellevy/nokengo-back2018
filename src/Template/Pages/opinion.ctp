<section class="internal">
  <section class="opinion">
    <?php if(isset($testimonials)):?>
      <div class="wrapper">
        <div class="writer">
          <div class="media"><?=$this->Html->image('../uploads/files/'.$testimonials[0]['files'][2]['filename']);?></div>
          <div class="text">
            <p><?=$testimonials[0]['quote']?></p>
          </div>
        </div>
        <article class="article">
          <h2 class="name"><?=$testimonials[0]['name'];?></h2>
          <p class="helper"><?=$testimonials[0]['subtitle'];?></p>
          <div class="social_media">
            <!-- <span>Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a> -->
          </div>
          <div class="content_area">
            <?=$testimonials[0]['testimony'];?>
          </div>
          <div class="social_media right">
            <!-- <span>Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a> -->
          </div>
        </article>
      </div>
    <?php else: ?>
      <div class="wrapper">
        <div class="writer">
          <div class="media"><?=$this->Html->image('../uploads/files/'.$opinion->files[2]['filename']);?></div>
          <div class="text">
            <p><?=$opinion->quote;?></p>
          </div>
        </div>
        <article class="article">
          <h2 class="name"><?=$opinion->name;?></h2>
          <p class="helper"><?=$opinion->subtitle;?></p>
          <div class="social_media">
            <!-- <span>Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a> -->
          </div>
          <div class="content_area">
            <?=$opinion->testimony;?>
          </div>
          <div class="social_media right">
            <!-- <span>Compartilhe:</span><a href="#"><?=$this->Html->image('Site.../images/fb.png', ['alt'=>'']);?></a><a href="#"><?=$this->Html->image('Site.../images/tw.png', ['alt'=>'']);?></a> -->
          </div>
        </article>
      </div>
    <?php endif; ?>
  </section>
  <?php if(isset($testimonials)):?>
    <section class="others_opinions">
      <div class="wrapper">
        <div class="cards">
          <?php foreach($testimonials as $key=>$testimonial):?>
            <?php if($key>0):?>
              <div class="card_item">
                <div class="media"><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $testimonial->slug]);?>"><?=$this->Html->image('../uploads/files/'.$testimonial['files'][1]['filename']);?></a></div>
                <h4 class="title"><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $testimonial->slug]);?>"><?=$testimonial->name;?></a></h4>
                <p class="desc"><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $testimonial->slug]);?>"><?=$testimonial->subtitle?></a></p><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $testimonial->slug]);?>" class="view_more">VEJA MAIS [+]</a>
              </div>
            <?php endif;?>
          <?php endforeach;?>
        </div>
      </div>
    </section>
  <?php else: ?>
    <section class="others_opinions">
      <div class="wrapper">
        <div class="cards">
          <?php foreach($opinions as $key=>$opinion):?>
            <div class="card_item">
              <div class="media"><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $opinion->slug]);?>"><?=$this->Html->image('../uploads/files/'.$opinion['files'][1]['filename']);?></a></div>
              <h4 class="title"><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $opinion->slug]);?>"><?=$opinion->name;?></a></h4>
              <p class="desc"><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $opinion->slug]);?>"><?=$opinion->subtitle?></a></p><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $opinion->slug]);?>" class="view_more">VEJA MAIS [+]</a>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</section>