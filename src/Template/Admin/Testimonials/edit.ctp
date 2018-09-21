<?php //die(debug($testimonial));?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Registro de novo depoimento</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($testimonial, ['type'=>'file']) ?>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nome']);?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <?php echo $this->Form->control('subtitle', ['class'=>'form-control', 'label'=>'Subtítulo']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?php echo $this->Form->control('quote', ['class'=>'form-control', 'label'=>'Citação']);?>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label>Imagem Home Desktop</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($testimonial['files'][0])):?>
                    <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$testimonial['files'][0]['id'];?>">Remover</button>
                    <?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$testimonial['files'][0]['id']]);?>
                  <?php else:?>
                    <img class="img-rounded form-img" src="http://via.placeholder.com/1920x1080">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Testimonial']);?>
                  <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Marca']);?>
                  <?php echo $this->Form->hidden('files.0.model_id', ['class'=>'form-file', 'value'=>$testimonial->id]);?>
                </figure>
              </div>
            </div>
          </div>
          <div class="row">            
            <div class="col-md-4">
              <div class="form-group">
                <label>Imagem Home Mobile</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($testimonial['files'][1])):?>
                    <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$testimonial['files'][1]['id'];?>">Remover</button>
                    <?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][1]['filename'], ['class'=>'form-img', 'data-uid'=>$testimonial['files'][1]['id']]);?>
                  <?php else:?>
                    <img class="img-rounded form-img" src="http://via.placeholder.com/414x400">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.1.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.1.entity', ['class'=>'form-file', 'value'=>'Testimonial']);?>
                  <?php echo $this->Form->hidden('files.1.obs', ['class'=>'form-file', 'value'=>'Marca']);?>
                  <?php echo $this->Form->hidden('files.1.model_id', ['class'=>'form-file', 'value'=>$testimonial->id]);?>
                </figure>
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <label>Imagem Interna</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($testimonial['files'][2])):?>
                    <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$testimonial['files'][2]['id'];?>">Remover</button>
                    <?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][2]['filename'], ['class'=>'form-img', 'data-uid'=>$testimonial['files'][2]['id']]);?>
                  <?php else:?>
                    <img class="img-rounded form-img" src="http://via.placeholder.com/550x310">
                  <?php endif;?>
                  <?php echo $this->Form->file('files.2.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.2.entity', ['class'=>'form-file', 'value'=>'Testimonial']);?>
                  <?php echo $this->Form->hidden('files.2.obs', ['class'=>'form-file', 'value'=>'Marca']);?>
                  <?php echo $this->Form->hidden('files.2.model_id', ['class'=>'form-file', 'value'=>$testimonial->id]);?>
                </figure>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?php echo $this->Form->control('testimony', ['class'=>'form-control ckeditor', 'label'=>'Depoimento']); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?= $this->Form->button(__('Send'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>
