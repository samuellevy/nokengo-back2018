<section class="news">
    <div class="wrapper">
        <h2 class="titlePrimary">Novidades</h2>
        <?php foreach($posts as $key=>$post):?>
        <div class="news__blog">
            <!-- <p> <span>12/05/2018 </span>ás <strong>00h00</strong></p> -->
            <h2><?=$post->title;?> </h2>
            <h3><?=$post->description;?></h3>
            <?php echo $this->Html->image('../uploads/files/'.$post['files'][0]['filename']);?>
            <a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread", $post->slug]);?>" alt="title news">Veja mais [+]</a>
        </div>
        <?php endforeach;?>
        <!-- <div class="loading__post"><a href="#" alt="Carregar mais post">Carregar mais notícias</a></div> -->
    </div>
</section>