<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Institute Entity
 *
 * @property int $id
 * @property string $initials
 * @property string $name
 * @property int $media_id
 * @property string $address
 * @property int $address_number
 * @property string $address_complement
 * @property string $address_neighborhood
 * @property string $address_city
 * @property string $address_state
 * @property string $postal_code
 * @property string $website
 * @property string $responsible
 * @property string $president_final
 * @property string $president_init
 * @property string $president
 * @property int $author_id
 * @property int $update_author_id
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 *
 * @property \App\Model\Entity\Media $media
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\UpdateAuthor $update_author
 */
class Institute extends Entity
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
