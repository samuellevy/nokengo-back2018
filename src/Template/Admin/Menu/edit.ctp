<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Registrar item</h4>
        </div>
        <div class="content">
          <?= $this->Form->create($item) ?>
          
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <?php echo $this->Form->control('title', ['class'=>'form-control', 'label'=>'Título']);?>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-1">
              <div class="form-group">
                <?php $items_parent_id = $items->toArray(); $items_parent_id[0]='Nenhum'; ksort($items_parent_id);?>
                <?php echo $this->Form->control('parent_id', ['class'=>'form-control', 'label'=>'Menu Pai', 'options'=>$items_parent_id]);?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1">
              <div class="form-group">
                <label for="switch-flat"> Active</label>
                <div class="switch__container">
                  <input type="checkbox" name="status" id="switch-flat" class="switch switch--flat" <?=$item->status?'checked':''?>>
                  <label for="switch-flat"></label>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php $pages = $pages->toArray(); $pages[""]='Nenhuma'; ksort($pages); ?>
                <?php echo $this->Form->control('page', ['class'=>'form-control', 'label'=>'Página', 'options'=>$pages]);?>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <?php echo $this->Form->control('url', ['class'=>'form-control', 'label'=>'URL']);?>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-info btn-fill pull-right']) ?>
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
