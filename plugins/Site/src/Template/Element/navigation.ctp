<?php foreach($menu as $item):?>
    <li class="list-item"><a class="link <?=$configs['url']==$item->url?'active':''?>" href="<?= $this->Url->build($item->url);?>"><span><?=$item->title?></span></a></li>
<?php endforeach;?>