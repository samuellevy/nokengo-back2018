  <section class="clube">
    <div class="contentClube">
      <div class="wrapper">
        <h2 class="titlePrimary"><?=$page->title;?></h2><?php echo $this->Html->image('Site.../mobile/images/logo-clube.png')?>
        <div class="text">
          <?=$page->pages_components[0]->content;?>
        </div>
      </div>
    </div>
    <div class="contentBoard">
      <div class="wrapper">
        <h2 class="titlePrimary">Diretoria</h2>
        <ul>
          <?php foreach($team_top as $item):?>
            <li>
              <p><?=$item->name?></p><span><?=$item->role?></span>
            </li>
          <?php endforeach;?>  
        </ul>
        <h2 class="titlePrimary">CONSELHEIROS</h2>
        <?php foreach($team_bottom as $item):?>
          <p><?=$item->name?></p>
        <?php endforeach;?>
        <h2 class="titlePrimary">ARQUIVOS</h2>
        <?php foreach($documents as $document):?>
            <div class="item"><span><?=$document->name?></span><a class="dwn_link" download href="<?=$this->Url->build('/documents/'.$document['file']['filename'])?>">DOWNLOAD</a></div>
        <?php endforeach;?>
      </div>
    </div>
  </section>