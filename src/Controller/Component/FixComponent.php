<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;

class FixComponent extends Component{
    public function initialize(array $config){
        parent::initialize($config);
        // $this->loadComponent('Fix');
    }
    public function toSlug($string) {
        if (is_string($string)) {
            $string = strtolower(trim(utf8_decode($string)));

            $before = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr';
            $after  = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';           
            $string = strtr($string, utf8_decode($before), $after);

            $replace = array(
                '/[^a-zA-Z0-9 -]/'	=> '-',
                '/[ -]+/'			=> '-',
                '/^-|-$/'		=> ''
            );
            $string = preg_replace(array_keys($replace), array_values($replace), $string);
        }
        return $string;
    }
}