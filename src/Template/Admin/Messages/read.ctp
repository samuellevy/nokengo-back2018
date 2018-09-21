<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title"><strong><?=$message->subject?></strong></h4>
          <h5><?=$message->created?></h5>
          <div class="email-options">
            <?= $this->Form->postLink(__('Marcar como Não Lida'), ['action' => 'naolida', $message->id], ['class'=>'button-default']) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id), 'class'=>'button-default']) ?>
          </div>
          <p class="category">De: <?=$message->name?> (<strong><?=$message->email?></strong>)</p>
          <p class="category">Telefone: <?=$message->phone?></p>
          <p class="category">Instituidora:
            <?php foreach($institutes as $institute):?>
              <?php if ($institute->id == $message->institute_id):?>
                <td><?= $institute->name ?></td>
              <?php endif ?>
            <?php endforeach ?>
          </p>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <p><?=$message->message?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <?= $this->Form->postLink(__('Voltar'), ['action' => 'return'], ['class'=>'button-default']) ?>
</div>
