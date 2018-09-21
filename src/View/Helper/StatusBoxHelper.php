<?php
namespace App\View\Helper;

use Cake\View\Helper;

class StatusBoxHelper extends Helper {
  public function new($status=null){
    /*$return = '<div class=" alert-info">';
    $return .= '<span>This is a plain notification</span>';
    $return .= '</div>';*/

    switch($status){
      case "iniciou_captacao":
        $smallClass = "label label-primary";
        $class = "fa fa-arrow-circle-down bg-blue";
        $action = "iniciou captação";
      break;

      case "enviou_proposta":
        $smallClass = "label label-info";
        $class="fa fa-folder-open bg-blue";
        $action="enviou proposta";
      break;

      case "adicionou_comentario":
        $smallClass = "label label-primary";
        $class="fa fa-comment bg-blue";
        $action="adicionou comentário";
      break;

      case "cliente_respondeu":
        $smallClass = "label label-warning";
        $class="fa fa-envelope bg-blue";
        $action="recebeu resposta do cliente";
      break;

      case "cliente_aceitou_proposta":
        $smallClass = "label label-success";
        $class="fa fa-check bg-blue";
        $action="conseguiu fechar proposta com o cliente";
      break;

      case "cliente_cancelou":
        $smallClass = "label label-default";
        $class="fa fa-close bg-blue";
        $action="marcou como cancelado";
      break;
    }

    $return = "<small class='$smallClass'><i class='$class'></i> $action</small>";
    return $return;
  }
}
?>
