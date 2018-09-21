<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Novo Post</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($work, ['type'=>'file']) ?>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <?=$this->Form->control('sender_name', ['class'=>'form-control ckeditor', 'label'=>'Nome Completo']);?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <?=$this->Form->control('sender_email', ['class'=>'form-control ckeditor', 'label'=>'E-mail']);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <?php echo $this->Form->control('category_id', ['class'=>'form-control', 'label'=>'Categoria', 'options'=>$categories]);?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="input text"><label for="publish-date">Data de publicação</label><input type="date" name="publish_date" class="form-control" id="publish-date" value="<?= date("Y-m-d")?>"></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo $this->Form->control('description', ['class'=>'form-control', 'label'=>'Descrição', 'maxlength'=>'200']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo $this->Form->control('content', ['class'=>'form-control ckeditor', 'label'=>'Conteúdo']);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Miniatura</label><br/>
                <figure class="form-box-img">
                  <img class="img-rounded form-img" src="http://via.placeholder.com/234x234">
                  <?php echo $this->Form->file('files.0.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.0.entity', ['class'=>'form-file', 'value'=>'Post']);?>
                  <?php echo $this->Form->hidden('files.0.obs', ['class'=>'form-file', 'value'=>'Miniatura']);?>
                </figure>
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label>Capa</label><br/>
                <figure class="form-box-img">
                  <img class="img-rounded form-img" src="http://via.placeholder.com/750x220">
                  <?php echo $this->Form->file('files.1.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('files.1.entity', ['class'=>'form-file', 'value'=>'Post']);?>
                  <?php echo $this->Form->hidden('files.1.obs', ['class'=>'form-file', 'value'=>'Capa']);?>
                </figure>
              </div>
            </div>
          </div>

          <div class="row">

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
