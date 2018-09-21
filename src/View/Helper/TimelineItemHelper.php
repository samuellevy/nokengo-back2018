<?php
namespace App\View\Helper;

use Cake\View\Helper;

class TimelineItemHelper extends Helper {
  public $helpers = array('FormatDate');

    public function putItem($id, $case, $datetime, $user_id, $user_name, $message)
    {
      switch($case){
        case "iniciou_captacao":
          $class = "fa fa-arrow-circle-down bg-blue";
          $action = "iniciou captação";
        break;

        case "enviou_proposta":
          $class="fa fa-folder-open bg-blue";
          $action="enviou proposta";
        break;

        case "adicionou_comentario":
          $class="fa fa-comment bg-blue";
          $action="adicionou comentário";
        break;

        case "cliente_respondeu":
          $class="fa fa-envelope bg-blue";
          $action="recebeu resposta do cliente";
        break;

        case "cliente_aceitou_proposta":
          $class="fa fa-check bg-blue";
          $action="conseguiu fechar proposta com o cliente";
        break;

        case "cliente_cancelou":
          $class="fa fa-close bg-blue";
          $action="marcou como cancelado";
        break;
      }

      //$datetime = $this->FormatDate->formatDate($datetime, 'pt-numbers-hours');

      echo ("
      <li>
        <i class='$class'></i>
        <div class='timeline-item'>
          <span class='time'><i class='fa fa-clock-o'></i> $datetime</span>
          <h3 class='timeline-header'><a href='#$user_id'>$user_name</a> $action</h3>
          <div class='timeline-body'>
            $message
          </div>
        </div>
      </li>");
    }
}
?>
