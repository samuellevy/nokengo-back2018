<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocumentsCategory Entity
 *
 * @property int $id
 * @property string $title
 * @property int $author_id
 * @property int $update_author_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 *
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\UpdateAuthor $update_author
 */
class DocumentsCategory extends Entity
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
