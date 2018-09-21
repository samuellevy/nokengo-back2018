<div class="sendPeca internal ">
    <div class="viewMob">
      <section class="contentMob">
        <h2 class="titlePrimary">Envie sua peça</h2>
        <h3>Contato</h3>
        <?= $this->Form->create($work, ['type'=>'file', 'class'=>'form_area send']) ?>
        
        <div class="form_item">
          <?=$this->Form->control('sender_name', ['class'=>'input_text', 'placeholder'=>'Nome Completo', 'label'=>false]);?>
        </div>
        <div class="form_item">
        <?=$this->Form->control('sender_email', ['class'=>'input_text', 'placeholder'=>'E-mail', 'label'=>false]);?>
        </div>
          <h3>Ficha técnica</h3>
          <div class="form_item">
          <?=$this->Form->control('sheet.advertiser', ['class'=>'input_text', 'placeholder'=>'Cliente', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.project_title', ['class'=>'input_text', 'placeholder'=>'Título', 'label'=>false, 'required'=>true]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.production_company', ['class'=>'input_text', 'placeholder'=>'Agência', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.creative_director', ['class'=>'input_text', 'placeholder'=>'Direção de criação', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.art_director', ['class'=>'input_text', 'placeholder'=>'Direção de arte', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.writer', ['class'=>'input_text', 'placeholder'=>'Redação', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.illustrator', ['class'=>'input_text', 'placeholder'=>'Ilustração', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.photographer', ['class'=>'input_text', 'placeholder'=>'Fotografia', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.music_producer', ['class'=>'input_text', 'placeholder'=>'Produtora de áudio', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.video_producer', ['class'=>'input_text', 'placeholder'=>'Produtora de vídeo', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.post_production_company', ['class'=>'input_text', 'placeholder'=>'Estúdio', 'label'=>false]);?>
          </div>
          <div class="form_item">
          <?=$this->Form->control('sheet.category_id', ['class'=>'input_text', 'label'=>false, 'options'=>$categories]);?>
          </div>
          <h3>Descrição</h3>
          <div class="decription">
            <?=$this->Form->control('description', ['class'=>'input_text', 'placeholder'=>'', 'label'=>false, 'required'=>true]);?>
          </div>
          <div class="wrap">
            <div class="boxAnexo">
              <div class="anexo"><i class="icon-document"></i><span>Envie seu arquivo</span>
              <input name="files[0][filename]" class="file-upload" type="file">
              </div>
              <p>O arquivo deve ter no máximo 500kb e estar no formato jpeg.</p>
              <p> <span>ou</span></p>
              <div class="link">
                <div class="link__box">
                  <input name="medias[0][url]" class="input_link" type="text" placeholder="Link do Youtube"><i class="icon-attachment"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="row_action">
            <a class="add_file" style="background: #DBEBEF; color: #1C1C1C; margin-top:30px; padding: 15px 20px; width: 30%; text-align: center; width: 100%; display: block;" href="#">Adicionar mais arquivos</a>
          </div>
          <input type="submit" value="Enviar">
        </form>
      </section>
</div>