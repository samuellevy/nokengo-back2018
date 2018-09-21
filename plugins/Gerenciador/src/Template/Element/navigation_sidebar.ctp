<ul class="nav">
  <li>
    <a href="<?= $this->Url->build(["controller" => "Menu","action" => "index"]);?>" <?=$params['controller']=='Menu'?"class='active'":""?>>
      <i class="pe-7s-menu"></i>
      <p>Menu</p>
    </a>
  </li>

  <li class="sidebar-dropdown" data-id="1">
    <a <?=$params['controller']=='Posts'||$params['controller']=='BlogCategories'||$params['controller']=='BlogTags'?"class='active'":""?>>
      <i class="pe-7s-news-paper"></i>
      <p>Novidades</p>
      <i class="i-absolute pe-7s-angle-right"></i>
    </a>
    <ul <?=$params['controller']=='Posts'||$params['controller']=='BlogCategories'||$params['controller']=='BlogTags'?"class='show-sidebar-dropdown'":""?>>
      <li>
        <a href="<?= $this->Url->build(["controller" => "Posts","action" => "index"]);?>" <?=$params['controller']=='Posts'?"class='active'":""?>>
          <i class="pe-7s-angle-right"></i>
          <p>Posts</p>
        </a>
      </li>
      <!-- <li>
        <a href="<?= $this->Url->build(["controller" => "BlogCategories","action" => "index"]);?>" <?=$params['controller']=='BlogCategories'?"class='active'":""?>>
          <i class="pe-7s-angle-right"></i>
          <p>Categorias</p>
        </a>
      </li> -->
    </ul>
  </li>

  <li>
    <a href="<?= $this->Url->build(["controller" => "pages","action" => "index"]);?>" <?=$params['controller']=='Pages'?"class='active'":""?>>
      <i class="pe-7s-photo-gallery"></i>
      <p>Páginas</p>
    </a>
  </li>

  <li>
    <a href="<?= $this->Url->build(["controller" => "testimonials","action" => "index"]);?>" <?=$params['controller']=='Testimonials'?"class='active'":""?>>
      <i class="pe-7s-speaker"></i>
      <p>Opiniões</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "Works","action" => "index"]);?>" <?=$params['controller']=='Works'?"class='active'":""?>>
      <i class="pe-7s-file"></i>
      <p>Peças</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "contacts","action" => "index"]);?>" <?=$params['controller']=='Contacts'?"class='active'":""?>>
      <i class="pe-7s-mail"></i>
      <p>E-mails de contato</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "team","action" => "index"]);?>" <?=$params['controller']=='Team'?"class='active'":""?>>
      <i class="pe-7s-users"></i>
      <p>Time</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "documents","action" => "index"]);?>" <?=$params['controller']=='Documents'?"class='active'":""?>>
      <i class="pe-7s-users"></i>
      <p>Documentos</p>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(["controller" => "Users","action" => "index"]);?>" <?=$params['controller']=='Users'?"class='active'":""?>>
      <i class="pe-7s-user"></i>
      <p>Usuários</p>
    </a>
  </li>
</ul>
