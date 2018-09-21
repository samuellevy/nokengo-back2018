<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class PublicController extends AppController
{
  
  /* AJAX methods */
  public function delete_file($file_id = null){
    $this->loadModel('Files');
    $this->autoRender = false;
    $entity = $this->Files->get($file_id);
    
    if($this->Files->delete($entity)){
      
    }
  }
  
}
