<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Works</h4>
          <p class="category">Lista de todos os itens</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sender_name', ['label'=>'Título']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label'=>'Status']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('feature', ['label'=>'Destaque']) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php //die(debug($works));?>
              <?php foreach ($works as $work): ?>
                <tr>
                  <td><?= $this->Number->format($work->id) ?></td>
                  <td><?= $work->sender_name ?></td>
                  <td>
                    <div class="switch__container">
                      <input id="switch-flat-s-<?=$work->id?>" class="switch switch--flat" type="checkbox" <?=$work->status==1?"checked":""?> onclick="changeStatus('works','status',<?=$work->id?>);">
                      <label for="switch-flat-s-<?=$work->id?>" class="general-switch"></label>
                    </div>
                  </td>
                  <td>
                    <div class="switch__container">
                      <input id="switch-flat-f-<?=$work->id?>" class="switch switch--flat" type="checkbox" <?=$work->feature==1?"checked":""?> onclick="changeStatus('works','feature',<?=$work->id?>);">
                      <label for="switch-flat-f-<?=$work->id?>" class="general-switch"></label>
                    </div>
                  </td>
                  <td class="actions">
                    <!-- <?= $this->Html->link(__('Editar'), ['action' => 'edit', $work->id]) ?> -->
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $work->id]) ?> | 
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $work->id], ['confirm' => __('Are you sure you want to delete # {0}?', $work->id)]) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <div class="paginator">
            <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
              <?= $this->Paginator->prev('< ' . __('anterior')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('próximo') . ' >') ?>
              <?= $this->Paginator->last(__('último') . ' >>') ?>
              <!-- <li><a href="<?= $this->Url->build(["controller" => "Works", "action" => "add"]);?>">Novo</a></li> -->
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
