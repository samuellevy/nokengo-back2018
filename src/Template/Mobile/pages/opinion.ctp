<section class="opniao">
    <section class="opinionTop">
            <?php if(isset($testimonials)):?>
                <div class="media"><?=$this->Html->image('../uploads/files/'.$testimonials[0]['files'][2]['filename']);?></div>
            <?php else: ?>
                <div class="media"><?=$this->Html->image('../uploads/files/'.$opinion->files[2]['filename']);?></div>
            <?php endif;?>
            <div class="wrapper">
                <h2 class="titlePrimary">Opnião</h2>
            </div>
        
        <div class="opinionTop__text">
        <div class="wrapper">
        <?php if(isset($testimonials)):?>
            <h2 class="titlePrimary"><?=$testimonials[0]['name']?></h2>
            <h3><?=$testimonials[0]['subtitle']?></h3>
            <p class="quote">"<?=$testimonials[0]['quote']?>"</p>
            <p><?=$testimonials[0]['testimony']?></p>
        <?php else: ?>
            <h2 class="titlePrimary"><?=$opinion->name;?></h2>
            <h3><?=$opinion->subtitle;?></h3>
            <p class="quote">"<?=$opinion->quote;?>"</p>
            <p><?=$opinion->testimony;?></p>
        <?php endif;?>

        </div>
        </div>
    </section>
    <div class="wrapper">
        <section class="moreOpinion">
            <?php if(isset($testimonials)):?>
                <?php foreach($testimonials as $key=>$testimonial):?>
                    <?php if($key>0):?>
                    <a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $testimonial->slug]);?>">
                    <div class="moreOpinion__box">
                        <div class="media"><?=$this->Html->image('../uploads/files/'.$testimonial->files[1]['filename']);?></div>
                        <h2><?=$testimonial->name;?></h2>
                        <h3><?=$testimonial->subtitle;?></h3>
                        <p><?=$testimonial->quote;?></p>
                        <a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $testimonial->slug]);?>" alt="Opnião de Bruno Oppido">Veja mais <span>[+]</span></a>
                    </div></a>
                    <?php endif;?>
                <?php endforeach;?>
            <?php else: ?>
                <?php foreach($opinions as $key=>$opinion):?>
                    <a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $opinion->id]);?>">
                    <div class="moreOpinion__box">
                        <div class="media"><?=$this->Html->image('../uploads/files/'.$opinion->files[1]['filename']);?></div>
                        <h2><?=$opinion->name;?></h2>
                        <h3><?=$opinion->subtitle;?></h3>
                        <p><?=$opinion->quote;?></p>
                        <a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion", $opinion->id]);?>" alt="Opnião de Bruno Oppido">Veja mais <span>[+]</span></a>
                    </div>
                    </a>
                <?php endforeach;?>
            <?php endif;?>
        </section>
    </div>
</section>