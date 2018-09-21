<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Menu</h4>
          <p class="category">Lista de todos os itens</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title', ['label'=>'Título']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id', ['label'=>'Menu Pai']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label'=>'status']) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($menu as $item): ?>
                <tr>
                  <td><?= $this->Number->format($item->id) ?></td>
                  <td><?= $item->title ?></td>
                  <td><?= isset($item->parent_menu->title)?$item->parent_menu->title:'Nenhum'; ?></td>
                  <td><?= $item->url ?></td>
                  <td>
                    <div class="switch__container">
                      <input id="switch-flat-<?=$item->id?>" class="switch switch--flat" uid="<?=$item->id?>" type="checkbox" <?=$item->status==1?"checked":""?> onclick="changeStatus('menu', 'status', $(this).attr('uid'));">
                      <label for="switch-flat-<?=$item->id?>" class="general-switch"></label>
                    </div>
                  </td>
                  <td class="actions">
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $item->id]) ?>
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
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
              <li><a href="<?= $this->Url->build(["controller" => "Menu", "action" => "add"]);?>">Novo</a></li>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
