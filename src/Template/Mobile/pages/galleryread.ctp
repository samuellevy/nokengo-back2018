

<section class="galery information internal">


    <div class="wrapper">
        <h2 class="titlePrimary">Galeria</h2>
        <h3><?=$work->sheet->project_title;?></h3>
        <div class="featuredGalery">
        <p> <span>Cliente:</span><?=$work->sheet->advertiser;?></p>
        <p> <span>Agência:</span><?=$work->sheet->production_company;?></p>
        <!-- <p> <span>Publicado em:</span>00/00/0000</p> -->
        <ul class="featuredGalery__carousel">
            <?php if(isset($work->files)):?>
              <?php foreach($work->files as $file):?>
                <div><?php echo $this->Html->image('../uploads/files/'.$file['filename']);?></div>
              <?php endforeach;?>
            <?php endif;?>
            <?php if(isset($work->medias)):?>
              <?php foreach($work->medias as $media):
                $pos = strpos($media['url'], 'youtube');
                if($pos==true){
                  $url_exploded = explode('watch?v=',$media['url']);
                  $videoURL = 'https://www.youtube.com/embed/'.$url_exploded[1];
                }else{
                  $url_exploded = explode('/',$media['url']);
                  $videoURL = 'https://player.vimeo.com/video/'.end($url_exploded).'?title=0&byline=0&portrait=0';
                }?>
                <iframe src="<?=$videoURL;?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

              <?php endforeach;?>
            <?php endif;?>
        </ul>
        <div class="description">
            <h4>Descrição</h4>
            <?=$work->description;?>
            <h4>Ficha técnica</h4>
            <ul>
            <li>
                <p class="title">Direção de Criação:</p>
                <p class="info"><?=$work->sheet->creative_director;?></p>
            </li>
            <li>
                <p class="title">Direção de Arte:</p>
                <p class="info"><?=$work->sheet->art_director;?></p>
            </li>
            <li>
                <p class="title">Redação:</p>
                <p class="info"><?=$work->sheet->writer;?></p>
            </li>
            <li>
                <p class="title">Ilustração:</p>
                <p class="info"><?=$work->sheet->illustrator;?></p>
            </li>
            <li>
                <p class="title">Fotografia:</p>
                <p class="info"><?=$work->sheet->photographer;?></p>
            </li>
            <li>
                <p class="title">Direção de Áudio:</p>
                <p class="info"><?=$work->sheet->music_producer;?></p>
            </li>
            <li>
                <p class="title">Produtora de Vídeo:</p>
                <p class="info"><?=$work->sheet->video_producer;?></p>
            </li>
            <li>
                <p class="title">Estúdio:</p>
                <p class="info"><?=$work->sheet->post_production_company;?></p>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </section>
</html>