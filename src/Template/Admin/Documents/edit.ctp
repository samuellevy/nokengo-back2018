<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Editar Documento</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($document, ['type'=>'file']) ?>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('name', ['class'=>'form-control', 'label'=>'Nome']);?>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Arquivo</label><br/>
                <figure class="form-box-img">
                  <?php if(isset($document['file'])):?>
                    <button type="button" class="btn btn-danger btn-fill remove" data-uid="<?=$document['file']['id'];?>">Remover</button>
                    <iframe src="<?=$this->Url->build('/documents/'.$document['file']['filename'])?>"></iframe>
                  <?php else:?>
                    <img alt="270x270" data-src="holder.js/270x270" class="img-rounded form-img" src="http://via.placeholder.com/270x270">
                  <?php endif;?>
                  <?php echo $this->Form->file('file.filename', ['class'=>'form-file']);?>
                  <?php echo $this->Form->hidden('file.entity', ['class'=>'form-file', 'value'=>'Document']);?>
                  <?php echo $this->Form->hidden('file.obs', ['class'=>'form-file', 'value'=>'Pdf']);?>
                </figure>
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
