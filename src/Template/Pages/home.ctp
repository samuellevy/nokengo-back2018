<div class="webdoor">
	<div class="wrapper">
	<div class="item">
	<?php
	$rand = rand(0,9);
	while(!isset($randombanner[$rand]['files'][0])){
		$rand = rand(0,9);
	}
	echo $this->Html->image('../uploads/files/'.$randombanner[$rand]['files'][0]['filename']);
	?>
	</div>
	<div class="webdoor_mask"></div>
	<div class="webdoor_footer"><a class="arrow" href="#"><?=$this->Html->image('Site.../images/arrow_wd.png');?></a></div>
	</div>
</div>
<section class="gallery_featured">
	<div class="wrapper"><a class="close_gallery" href="#"></a>
		<div class="section_title">
			<h2 class="title"> <span>Galeria</span></h2><a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "gallery"]);?>">VEJA MAIS <span>[+]</span></a>
		</div>
		<?php foreach($works as $key=>$work):?>
			<div class="gallery_item item-<?=$key+1?>">
				<a href="<?=$this->Url->build(["controller" => "pages","action" => "galleryread", $work->slug]);?>">
					<div class="media">
						<?php if(isset($work['files'][0])):?>
							<?php echo $this->Html->image('../uploads/files/'.$work['files'][0]['filename']);?>

						<?php elseif(isset($work['medias'][0])):
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
						endif;?>
					</div>
					<div class="text">
						<p class="name"><?=$work->sheet->production_company?></p>
						<p class="description"><?=substr($work->description,0,100);?>...</p>
					</div>
				</a>
			</div>
		<?php endforeach;?>
	</div>
</section>
<section class="new_publications">
	<div class="wrapper">
		<div class="section_title">
			<h2 class="title"><span>novi <br> dades</span></h2>
			<a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "news"]);?>">VEJA MAIS <span>[+]</span></a>
		</div>
		<div class="main_post">
			<div class="media">
				<?php echo $this->Html->image('../uploads/files/'.$posts[0]['files'][0]['filename']);?>
			</div>
		</div>
		<div class="publications">
			<div class="wrapper">
				<a href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$posts[0]->slug]);?>">
					<div class="featured_new">
						<h4 class="title"><?=$posts[0]->title;?></h4>
						<p><?=$posts[0]->description;?></p>
					</div>
				</a>
				<ul class="list">
					<?php foreach($posts as $key=>$post):?>
					<?php if($key!=0):?>
					<li class="item"> 
					<a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$post->slug]);?>"><p><strong>DESTAQUE // </strong><span> <?=$post->title;?></span></p></a>
						<a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "newsread",$post->slug]);?>">VEJA MAIS [+]</a>
					</li>
					<?php endif;?>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php foreach($testimonials as $testimonial):?>
<section class="opinion_featured">
	<div class="media">
		<div class="writer">
			<?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename']);?>
		</div>
		<div class="mask_opiniao"></div>
	</div>
	<div class="wrapper">
		<div class="section_title">
			<div class="wrap">
				<h2 class="title"> <span>opinião</span></h2><a class="view_more" href="<?=$this->Url->build(["controller" => "pages","action" => "opinion",$testimonial->slug]);?>">VEJA MAIS <span>[+]</span></a>
				<a href="<?=$this->Url->build(["controller" => "pages","action" => "opinion",$testimonial->slug]);?>">
					<p class="name"><strong class="name"><?=$testimonial->name;?></strong><small class="info"><?=$testimonial->subtitle?></small></p>
					<p class="desc">"<?=substr(strip_tags($testimonial->quote),0,100)?>..."</p>
				</a>
			</div>
		</div>
	</div>
</section>
<?php endforeach;?>