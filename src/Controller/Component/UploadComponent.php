<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;

class UploadComponent extends Component{
    public $max_files = 3;

    public function send($data){
        if(!empty($data['uploadfiles'])){
            if (count($data['uploadfiles'])>$this->max_files){
                throw new InternalErrorException("Erro de processamento. O número máximo de arquivos é {$this->max_files}", 1);
            }

            
            foreach($data['uploadfiles'] as $file){
                
                $filename = $file['name'];
                $file_tmp_name = $file['tmp_name'];
                $dir = WWW_ROOT.'img'.DS.'uploads';
                $allowed = array('.png', '.jpg', '.jpeg');
                
                //if(!in_array(substr(strchr($filename, '.'),1), $allowed)){
                if(!in_array(substr($filename, strripos($filename, '.')), $allowed)){
                    throw new InternalErrorException("Erro.", 1);
                }elseif(is_uploaded_file($file_tmp_name)){
                    //$filename = Text::uuid().'-'.$filename;
                    
                    $filedb = TableRegistry::get('Files');
                    $entity = $filedb->newEntity();
                    $entity->type = substr($filename, strripos($filename, '.'));
                    $entity->filename = Text::uuid().'.'.$entity->type;
                    $entity->entity = $data['ModelName'];
                    $entity->model_id = $data['ModelId'];
                    $filedb->save($entity);
                    
                    move_uploaded_file($file_tmp_name, $dir.DS.$entity->filename);
                }
            }
        }
    }
}