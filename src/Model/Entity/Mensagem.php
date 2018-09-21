<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mensagen Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $captacao_id
 * @property int $title
 * @property int $body
 * @property string $direcao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Captacao $captacao
 */
class Mensagem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
