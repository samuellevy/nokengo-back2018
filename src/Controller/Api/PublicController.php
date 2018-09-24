<?php
namespace App\Controller\Api;

use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Firebase\JWT\JWT;

class PublicController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['contact']);
    }

    public function index(){
        throw new UnauthorizedException('Rota desconhecida');
    }

    public function contact(){
        $this->loadModel('Messages');
        $messages = $this->Messages->newEntity();

        if($this->request->is('post')){
            $data = $this->request->data();
            $messages = $this->Messages->patchEntity($messages, $data);
            $this->Messages->save($messages);
            die(debug($data));
        }
    }
}