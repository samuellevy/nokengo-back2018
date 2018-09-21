<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Routing\Router;

class MenuHelper extends Helper {
  public function build($item){
    if(!empty($item->page)):
      $url = '/page/'.$item->page.$item->url;
    else:
      $url = $item->url;
    endif;
      $url = Router::url($url);
    return $url;
  }
}
?>
