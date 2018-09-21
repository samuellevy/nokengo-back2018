<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Clube Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $website
 * @property string $advantage
 * @property string $reserve
 * @property string $conditions
 * @property string $local
 * @property string $media_id
 * @property int $category_id
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 *
 * @property \App\Model\Entity\Media $media
 * @property \App\Model\Entity\Category $category
 */
class Clube extends Entity
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
