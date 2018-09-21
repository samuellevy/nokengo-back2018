<section class="internal clube">
  <section class="about">
    <div class="wrapper full">
      <h1 class="page_title"><?=$page->title;?></h1>
      <div class="content_area">
        <div class="text">
          <?=$page->pages_components[0]->content;?>
        </div>
        <div class="staff">
          <div class="directors">
            <h3 class="help_title">DIRETORIA</h3>
            <ul class="list">
              <?php foreach($team_top as $item):?>
              <li class="item">
                <p><?=$item->name?></p><span><?=$item->role?></span>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="counselors">
            <h3 class="help_title">CONSELHEIROS</h3>
            <p>
            <?php foreach($team_bottom as $item):?>
              <?=$item->name?>
            <?php endforeach;?>
            </p>
          </div>
        </div>
      </div>
      <div class="media"><?=$this->Html->image('Site.../images/image_clube.png', ['alt'=>'Image clube']);?>
        <div class="wrap">
          <h2 class="help_title">ARQUIVOS</h2>
          <?php foreach($documents as $document):?>
            <div class="item"><span><?=$document->name?></span><a class="dwn_link" download href="<?=$this->Url->build('/documents/'.$document['file']['filename'])?>">DOWNLOAD</a></div>
          <?php endforeach;?>

        </div>
      </div>
    </div>
  </section>
</section>
