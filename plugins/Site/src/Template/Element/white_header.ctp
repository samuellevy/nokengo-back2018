<header class="interna" id="header">
    <div class="wrapper">
    <div class="logo"><a href="<?= $this->Url->build('/');?>"><li><?=$this->Html->image('Site.../images/logo_small.png');?></a></div>
    <nav id="main_nav">
        <ul class="list">
            <?=$this->element('navigation');?>
        </ul>
        <form class="form_area search_header">
        <div class="form_item">
            <label class="label">
            <input class="input_text" type="text" placeholder="pesquisar">
            <button class="action" type="submit"></button>
            </label>
        </div>
        </form>
    </nav>
    </div>
</header>