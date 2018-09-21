<div class="ui-view">
	<!-- <div class="loading" ng-show="hasRequest">Carregando&#8230;</div> -->
	<!--Banner-->
	<section class="banner">
		<picture>
			<img src="<?=$this->Url->image('Site.../images/comunicacao.png');?>" width="1920" class="img-responsive" alt="Jusprev"/>
		</picture>
	</section>

	<!--Blog Interna-->
	<section class="blogInterna">

		<div class="container no-padding">

			<!--Sidebar-->
			<?= $this->element('Site.blog-sidebar');?>

			<!--Post-->
			<div class="col-md-8">
				<div class="noticiaAberta">
					<div class="boxNoticias">

						<div class="col-md-12 border">
							<?php if(isset($post['capas'][0])):?>
							<?php echo $this->Html->image('../uploads/files/'.$post['capas'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$post['files'][0]['id']]);?>
							<?php else:?>
							<?php echo $this->Html->image('Site.../images/jusprev-default-blog.png', ['class'=>'img-responsive']);?>
							<?php endif;?>
							<div class="col-md-6 col-sm-6 no-padding">
								<div class="data">
									<div class="dia"><span><?=$this->FormatDate->formatDate($post->created, 'just_day');?></span></div>
									<div class="mesAno"><?=$this->FormatDate->formatDate($post->created, 'pt-numbers');?></div> <!--colocar sempre nesse padrão-->
								</div>
							</div>
							<div class="col-md-6 col-sm-6 no-padding">
							</div>
						</div>

						<div class="col-md-12 no-padding">
							<h4><?=$post->title?></h4>
							<div><?=$post->content?></div>
							<!-- <div class="post-tag">
								<p>Tags: </p>
								<?php foreach($post->blog_post_tags as $post_tag): ?>
								<a href="#"><?=$post_tag->blog_tag->name;?></a>
								<?php endforeach; ?>
							</div> -->
							<hr>
						</div>
						<?php echo $this->Html->link(
						'VOLTAR',
						['controller' => 'posts', 'action' => 'index', '_full' => true],
						['class' => 'btn btn-primary', 'escape' => false]
						); ?>
						<div class="col-md-12 compartilhar">
							<span>Share:</span>
							<?php echo $this->Html->link(
							$this->Html->image('Site.../images/twiiter-img.jpg'), 'http://www.twitter.com', array('escape' => false)
							); ?>
							<?php echo $this->Html->link(
							$this->Html->image('Site.../images/facebook.jpg'), 'http://www.facebook.com', array('escape' => false)
							); ?>
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>
</div>
