<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>3a Worldwide - Global website</title>

  <!-- META -->
  <?= $this->Html->charset() ?><?= $this->Html->meta('favicon.png','/favicon.png',['type' => 'icon']);?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- CSS -->
  <?= $this->Html->css('Site.normalize.css') ?>
  <?= $this->Html->css('Site.main.css') ?>
  <?= $this->Html->css('Site.font-awesome.css') ?>

  <!-- SCRIPTS -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <?= $this->Html->script('Site.vendor/modernizr-2.7.1.min.js') ?>
  <?= $this->Html->script('Site.jquery.onepage-scroll.js') ?>
  <?= $this->Html->script('Site.main.js') ?>

  <script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>

  <?= $this->Html->css('Site.onepage-scroll.css') ?>

  <?= $this->Html->script('Site.slick.js') ?>
  <?= $this->Html->css('Site.slick.css') ?>
  <?= $this->Html->css('Site.slick-theme.css') ?>
</head>

<body>
  <div id="nav" class="sidenav">
    <div class="btnMenu"><span class="close">&times;</span></div>
    <div class="items">
      <a href="#" page_id="2">About us</a>
      <a href="#" page_id="3">Services</a>
      <a href="#" page_id="4">Clients</a>
      <a href="#" page_id="5">Headquarters</a>
      <a href="#" page_id="6">Network</a>
    </div>
  </div>
  <div class="btnMenuBox">
    <div class="btnMenu">
      <span class="open">&#9776;</span>
    </div>
  </div>
  <div class="main">
    <section id="Home">
      <div class="wrapper">
        <h2 class="title_home">brands <span>beyond</span> borders</h2>
        <div class="logo_home"><?=$this->Html->image('Site.../images/logo_home.png');?></div>
        <div class="esfera-mobile"><?=$this->Html->image('Site.../images/half_globe.png');?></div>
      </div>
      <div class="control_ball">
        <div class="bg-eclipse">
          <div class="circle_externo">
            <?=$this->Html->image('Site.../images/meiaesfera.png');?>
          </div>
        </div>
      </div>
    </section>

    <section id="About">
      <div class="vertical_text">BRANDS BEYOND BORDERS</div>
      <div class="wrapper">
        <div class="content">
          <!--h1 class="revealOnScroll" data-animation="fadeInUp">Trigger a CSS animation on scroll</h1-->
          <div class="tabled">
            <div class="element-side-text">
              <p>An international network with people from the most diverse nationalities, connected by knowledge, passion and commitment to your business: this is 3AWW.</p>
              <p>We believe that Communication is a global operation which reserves numerous possibilities to expand your brand beyond the borders. Therefore, our teams are specialized in the most diverse areas, including Public Relations, Marketing, Planning, Digital, Events and Creative, and are dedicated to adopt your culture and adapt it according to your objectives, applying effective solutions.</p>
              <p>Wherever you are, we will be ready to be your partner in the way to success.</p>
            </div>
          </div>
          <div class="tabled">

            <div class="element-aboutus">
              <div class="big_title">
                Ab<br />out<br />&nbsp;us
              </div>
            </div>

          </div>
          <div class="tabled"></div>
        </div>

        <div class="element-message"></div>
        <div class="element-globe"></div>
      </div>
    </section>

    <section id="Services">
      <div class="content">
        <div class="wrapper">
          <div class="big_title">
            Ser<br /><span class="hifen">-</span>vi<span class="hifen">-</span><br />ces
          </div>
          <div class="area-util">
            <div class="title-more-medium service-box1">+public relations</div>
            <div class="title-more-medium inverted service-box2">+media planning & buying</div>
            <div class="title-more-medium service-box3">+marketing</div>
            <div class="title-more-medium service-box4">+digital</div>
            <div class="text-service service-box5">Being global is having no borders to operate locally, offering services that make it possible to expand your brand. Being global is having teams with professionals from different areas, who face the challenges of finding effective and creative solutions. Being global is adopting cultures and adapting processes to achieve your goals.
            </div>
            <div class="title-more-medium inverted service-box6">+creative</div>
          </div>

        </div>
      </div>
    </section>

    <section id="Clients">
      <div class="vertical-title"><div class="big_title">clients</div></div>
      <div class="wrapper">
        <div class="content">
          <div class="box-list-clients">
            <ul class="clients-ul">
              <li><?=$this->Html->image('Site.../images/clientes/adidas.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/bmw.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/cocacola.png');?>

              <li><?=$this->Html->image('Site.../images/clientes/ford.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/google.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/gsk.png');?>

              <li><?=$this->Html->image('Site.../images/clientes/netshoes.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/quaker.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/samsung.png');?>

              <li><?=$this->Html->image('Site.../images/clientes/toyota.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/visa.png');?>
              <li><?=$this->Html->image('Site.../images/clientes/lg.png');?>
            </ul>
          </div>
          <div class="box-description-clients">
            <h2 class="title_default"></h2>
            <p class="text_default">We work with global accounts, always acting in a direct and creative way. We believe in ideas, which can be applied anywhere on the world. We focus our efforts to grasp client's culture so that we can develop effective solutions for each one of them.</p>
            <p class="image-box" style="text-align: center">
              <?=$this->Html->image('Site.../images/beyondborders.gif', ['style'=>'width: 100%']);?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="Headquarters">
      <div class="element-title"><div class="big_title">quarters</div></div>
      <div class="wrapper">
        <div class="content">
          <div class="map-image">
            <div class="countries">
              <div class="element-country country" data-id='0'>
                <div class="description">
                  <h3 class="title_country">BRAZIL</h3>
                  <a href="http://www.3aworldwide.com.br/" class="link_country brazil">View local website</a>
                  <span class="tel_country">+55 21 2271-1700</span>
                </div>
              </div>
              <div class="element-country country" data-id='1'>
                <div class="description">
                  <h3 class="title_country">EUA</h3>
                  <a href="http://3aww.com/usa/" class="link_country brazil">View local website</a>
                  <span class="tel_country">+1 (786) 329-7153</span>
                </div>
              </div>
              <div class="element-country country" data-id='2'>
                <div class="description">
                  <h3 class="title_country">MEXICO</h3>
                  <a href="http://3aww.com.mx/" class="link_country brazil">View local website</a>
                  <span class="tel_country">+52 55 1085 1730 /31</span>
                </div>
              </div>
              <div class="element-country country" data-id='3'>
                <div class="description">
                  <h3 class="title_country">SPAIN</h3>
                  <a href="http://3aww.com/es/" class="link_country brazil">View local website</a>
                  <span class="tel_country">+34 91 750-26-97</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="Network">
      <div class="element-title"><div class="big_title">Network</div></div>

      <div class="content">
        <div class="wrapper">
          <ul class="slider mobile-slider slider-for">
            <li data-country="brasil"> <span>Brasil</span> </li> <li data-country="eua"> <span>Estados Unidos</span> </li> <li data-country="mexico"> <span>México</span> </li> <li data-country="espanha"> <span>Espanha</span> </li> <li data-country="alemanha"> <span>Alemanha</span> </li> <li data-country="argentina"> <span>Argentina</span> </li><li data-country="chile"> <span>Chile</span> </li> <li data-country="chipre"> <span>Chipre</span> </li> <li data-country="colombia"> <span>Colômbia</span> </li> <li data-country="emirados"> <span>Emirados Árabes</span> </li> <li data-country="grecia"> <span>Grécia</span> </li> <li data-country="india"> <span>Índia</span> </li> <li data-country="italia"> <span>Itália</span> </li> <li data-country="marrocos"> <span>Marrocos</span> </li> <li data-country="mocambique"> <span>Moçambique</span> </li> <li data-country="panama"> <span>Panamá</span> </li> <li data-country="polonia"> <span>Polônia</span> </li> <li data-country="portugal"> <span>Portugal</span> </li> <li data-country="reino-unido"> <span>Reino Unido</span> </li> <li data-country="romenia"> <span>Romênia</span> </li> <li data-country="russia"> <span>Rússia</span> </li> <li data-country="suecia"> <span>Suécia</span> </li> <li data-country="suica"> <span>Suíça</span> </li> <li data-country="brasil"> <span>Brasil</span> </li> <li data-country="eua"> <span>Estados Unidos</span> </li> <li data-country="mexico"> <span>México</span> </li> <li data-country="espanha"> <span>Espanha</span> </li> <li data-country="alemanha"> <span>Alemanha</span> </li> <li data-country="argentina"> <span>Argentina</span> </li> <li data-country="chile"> <span>Chile</span> </li> <li data-country="chipre"> <span>Chipre</span> </li> <li data-country="colombia"> <span>Colômbia</span> </li> <li data-country="mocambique"> <span>Moçambique</span> </li> <li data-country="panama"> <span>Panamá</span> </li> <li data-country="polonia"> <span>Polônia</span> </li> <li data-country="portugal"> <span>Portugal</span> </li> <li data-country="reino-unido"> <span>Reino Unido</span> </li> <li data-country="romenia"> <span>Romênia</span> </li> <li data-country="russia"> <span>Rússia</span> </li> <li data-country="suecia"> <span>Suécia</span> </li> <li data-country="suica"> <span>Suíça</span> </li>
          </ul>


          <ul class="slider mobile-slider slider-nav">
            <li data-country="brasil"> <span>Brasil</span> </li> <li data-country="eua"> <span>Estados Unidos</span> </li> <li data-country="mexico"> <span>México</span> </li> <li data-country="espanha"> <span>Espanha</span> </li> <li data-country="alemanha"> <span>Alemanha</span> </li> <li data-country="argentina"> <span>Argentina</span> </li><li data-country="chile"> <span>Chile</span> </li> <li data-country="chipre"> <span>Chipre</span> </li> <li data-country="colombia"> <span>Colômbia</span> </li> <li data-country="emirados"> <span>Emirados Árabes</span> </li> <li data-country="grecia"> <span>Grécia</span> </li> <li data-country="india"> <span>Índia</span> </li> <li data-country="italia"> <span>Itália</span> </li> <li data-country="marrocos"> <span>Marrocos</span> </li> <li data-country="mocambique"> <span>Moçambique</span> </li> <li data-country="panama"> <span>Panamá</span> </li> <li data-country="polonia"> <span>Polônia</span> </li> <li data-country="portugal"> <span>Portugal</span> </li> <li data-country="reino-unido"> <span>Reino Unido</span> </li> <li data-country="romenia"> <span>Romênia</span> </li> <li data-country="russia"> <span>Rússia</span> </li> <li data-country="suecia"> <span>Suécia</span> </li> <li data-country="suica"> <span>Suíça</span> </li> <li data-country="brasil"> <span>Brasil</span> </li> <li data-country="eua"> <span>Estados Unidos</span> </li> <li data-country="mexico"> <span>México</span> </li> <li data-country="espanha"> <span>Espanha</span> </li> <li data-country="alemanha"> <span>Alemanha</span> </li> <li data-country="argentina"> <span>Argentina</span> </li> <li data-country="chile"> <span>Chile</span> </li> <li data-country="chipre"> <span>Chipre</span> </li> <li data-country="colombia"> <span>Colômbia</span> </li> <li data-country="mocambique"> <span>Moçambique</span> </li> <li data-country="panama"> <span>Panamá</span> </li> <li data-country="polonia"> <span>Polônia</span> </li> <li data-country="portugal"> <span>Portugal</span> </li> <li data-country="reino-unido"> <span>Reino Unido</span> </li> <li data-country="romenia"> <span>Romênia</span> </li> <li data-country="russia"> <span>Rússia</span> </li> <li data-country="suecia"> <span>Suécia</span> </li> <li data-country="suica"> <span>Suíça</span> </li>
          </ul>
        </div>
        <div class="wrapper-full">
          <div class="box-map">
            <div id="world-map"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?= $this->Html->script('Site.trigger.js') ?>
</body>
</html>
