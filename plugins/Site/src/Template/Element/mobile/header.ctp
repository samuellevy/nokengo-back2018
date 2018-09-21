<?php
if($configs['action']!='home'){
    $logo = 'logo-mobile.png';
    $logohome = '';
}else{
    $logo = 'logo.png';
    $logohome = 'logohome';
}
?>
<div class="menuMob">
    <section class="inforTop">
    <div class="wrapper">
        <a href="<?=$this->Url->build(["controller" => "pages","action" => "home"]);?>">
            <?=$this->Html->image('Site.../mobile/images/logo-mobile.png');?>
        </a>
        <div class="clouseLightBox"><i class="icon-clouse"></i></div>
    </div>
    </section>
    <section class="search">
    <div class="wrapper">
        <input type="search" placeholder="Oque você está procurando?"><i class="icon-search"></i>
    </div>
    </section>
    <ul class="list">
        <?=$this->element('navigation');?>
    </ul>
    <div class="social">
    <ul>
        <li><a href="https://www.facebook.com/ClubeDeCriacaoRJ/" target="_blank" alt="Facebook"> <i class="icon-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/ccrj/" target="_blank" alt="Instagram"> <i class="icon-instagram"></i></a></li>
        <li><a href="https://twitter.com/redeccrj" target="_blank" alt="twitter"> <i class="icon-twitter"></i></a></li>
    </ul>
    </div>
</div>
<header id="header">
    <div class="wrapper">
    <div class="logo"><a href="<?=$this->Url->build(["controller" => "pages","action" => "home"]);?>"><?=$this->Html->image('Site.../mobile/images/'.$logo, ['class'=>$logohome]);?></a></div>
    <nav id="main_nav">
        <div class="viewMob"><i class="icon-menu"></i></div>
    </nav>
</header>