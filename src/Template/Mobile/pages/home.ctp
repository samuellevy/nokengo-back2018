<section class="home">
    <div class="webdoor">
        <div class="webdoor_front">
        </div>
        <div class="webdoor_pager">
        <?php
        $rand = rand(0,9);
        while(!isset($randombanner[$rand]['files'][0])){
            $rand = rand(0,9);
        }
        echo $this->Html->image('../uploads/files/'.$randombanner[$rand]['files'][0]['filename']);
        ?>
        </div>
        <i class="iconArrowHome">
            <img src="/ccrj-cake3/site/img/../mobile/images/arrowHome.png" alt=""/>
        </i>
    </div>
    <section class="galleryMob">
        <div class="titleContent">
            <h2>Galeria</h2><a href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>">Veja mais <span>[+]</span></a>
        </div>

        <?php foreach($works as $key=>$work):?>
            <?php if(isset($work['files'][0])): ?>
                <a href="<?=$this->Url->build(["controller" => "pages", "action" => "galleryread", $work->id]);?>">
                    <?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>
                    <div class="textInfo">
                        <h3><?=$work->sheet->production_company?></h3>
                        <p><?=substr($work->description,0,115)?></p>
                    </div>
                </a>
                <?php break;?>
            <?php endif;?>

            <?php if(isset($work['medias'][0])):?>
                <a href="<?=$this->Url->build(["controller" => "pages", "action" => "galleryread", $work->id]);?>">
                    <?php 
                    $pos = strpos($work['medias'][0]['url'], 'youtube');
                    if($pos==true){
                        $url_exploded = explode('watch?v=',$work['medias'][0]['url']);
                        $thumbURL = 'http://img.youtube.com/vi/'.$url_exploded[1].'/hqdefault.jpg';
                        echo $this->Html->image($thumbURL);
                    }else{
                        $url_exploded = explode('/',$work['medias'][0]['url']);
                        $data = file_get_contents("http://vimeo.com/api/v2/video/".end($url_exploded).".json");
                        $data = json_decode($data);
                        $thumbURL = $data[0]->thumbnail_large;
                        echo $this->Html->image($thumbURL);
                    }
                    ?>
                    <div class="textInfo">
                        <h3><?=$work->sheet->production_company?></h3>
                        <p><?=substr($work->description,0,115)?></p>
                    </div>
                </a>
                <?php break;?>
            <?php endif;?>

        <?php endforeach;?>
    </section>
    <div class="viewMob"> 
        <section class="publicationsMob">
            <div class="contentPublic">
                <div class="wrapper">
                    <h2>Novidades</h2><a href="<?=$this->Url->build(["controller" => "pages","action" => "news"]);?>">Veja mais <span>[+]</span></a>
                </div>
                <?php foreach($posts as $key=>$post):?>
                    <?php if($key==0):?>
                        <a href="<?=$this->Url->build(["controller" => "pages", "action" => "newsread", $post->id]);?>">
                            <div class="bgNovidades">
                                <?php echo $this->Html->image('../uploads/files/'.$post['files'][0]['filename'], ['class'=>'image']);?>
                                <?php echo $this->Html->image('Site.../mobile/images/home_vazado.png', ['class'=>'mask']);?>
                            </div>
                            <div class="wrapper">
                                <div class="item"> 
                                    <h3><?=$post->title;?></h3>
                                    <p><?=substr($post->description,0,115)?></p>
                                </div>
                            </div>
                        </a>
                    <?php endif;?>
                <?php endforeach;?> 
            </div>
        </section>
    </div>
    <div class="viewMob"> 
        <section class="publicationsMob">
            <div class="contentPublic">
                <div class="wrapper">
                    <h2>Opinião</h2><a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion"]);?>">Veja mais <span>[+]</span></a>
                </div>
                <?php foreach($testimonials as $key=>$testimonial):?>
                    <?php if($key==0):?>
                        <div class="bgNovidades">
                            <?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][1]['filename'], ['class'=>'image']);?>
                            <?php echo $this->Html->image('Site.../mobile/images/home_vazado.png', ['class'=>'mask']);?>
                        </div>
                        <a href="<?=$this->Url->build(["controller" => "pages", "action" => "opinion", $testimonial->slug]);?>">
                            <div class="wrapper">
                                <div class="item"> 
                                    <h3><?=$testimonial->name;?><span><?=$testimonial->subtitle;?></span></h3>
                                    <p><?=substr($testimonial->quote,0,115)?></p>
                                </div>
                            </div>
                        </a>
                    <?php endif;?>
                <?php endforeach;?> 
            </div>
        </section>
    </div>
</section>