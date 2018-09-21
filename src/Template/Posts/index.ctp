<?php //$this->FormatDate->load();?>
<div class="ui-view">
	<!-- <div class="loading">Carregando&#8230;</div> -->
	<!--Banner-->
	<section class="banner">
		<picture>
			<img src="<?=$this->Url->image('Site.../images/comunicacao.png');?>" width="1920" class="img-responsive" alt="Jusprev"/>
		</picture>
	</section>

	<!--Blog-->
	<section class="blog">

		<div class="container no-padding">

			<!--Sidebar-->
			<?= $this->element('Site.blog-sidebar');?>

			<!--Noticias-->
			<div class="col-md-8">
				<?php if ($type != null):?>
					<p class="category"><?= $categories[0]['category'] ?></p>
				<?php endif; ?>
				<div class="posts">
					<!--div class="boxNoticias">
					<h1>Nenhum post encontrado</h1>
				</div-->
				<?php foreach ($posts as $post): ?>
					<div class="boxNoticias">
						<?php if(isset($post['capas'][0])):?>
							<?php echo $this->Html->image('../uploads/files/'.$post['capas'][0]['filename'], ['class'=>'img-responsive"', 'data-uid'=>$post['files'][0]['id']]);?>
						<?php else:?>
							<?php echo $this->Html->image('Site.../images/jusprev-default-blog.png', ['class'=>'img-responsive']);?>
						<?php endif;?>
						<div class="col-md-2">
							<div class="data">
								<div class="dia"><span><?= $this->FormatDate->formatDate($post->created,'just_day');?></span></div>
								<div class="mesAno"><?= $this->FormatDate->formatDate($post->created,'de_mes_ano');?></div> <!--manter esse padrão-->
							</div>
						</div>
						<div class="col-md-9 bordaLeft">
							<h4>
								<?php echo $this->Html->link(
									$post->title,
									['controller' => 'posts', 'action' => 'view', $post->id, '_full' => true]
								); ?>
							</h4>
							<p><?=$post->description?></p>
							<?php echo $this->Html->link(
								'LER MATÉRIA COMPLETA',
								['controller' => 'posts', 'action' => 'view', $post->id, '_full' => true],
								['class' => 'btn btn-primary', 'escape' => false]
							); ?>
						</div>
						<!-- <div class="post-tag">
							<p>Tags: </p>
							<?php foreach($post->blog_post_tags as $post_tag): ?>
								<a href="#"><?=$post_tag->blog_tag->name;?></a>
							<?php endforeach; ?>
						</div> -->
					</div>

				<?php endforeach;?>

				<div class="col-md-12 no-padding">
					<div class="paginator" style="text-align: center;">
						<ul class="pagination">
							<?= $this->Paginator->first('<< ' . __('primeiro')) ?>
							<?= $this->Paginator->prev('< ' . __('anterior')) ?>
							<?= $this->Paginator->numbers() ?>
							<?= $this->Paginator->next(__('próximo') . ' >') ?>
							<?= $this->Paginator->last(__('último') . ' >>') ?>
							<br/>
							<?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')]) ?>
						</ul>
					</div>
					<!-- <button class="btn btn-info btn-lg" type="button">CARREGAR MAIS</button> -->
				</div>
			</div>
		</div>

	</div>

</section>

</div>
