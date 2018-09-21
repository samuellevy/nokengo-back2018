<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Media Entity
 *
 * @property int $id
 * @property int $media_type
 * @property string $url
 * @property int $work_id
 *
 * @property \App\Model\Entity\Work $work
 * @property \App\Model\Entity\Post[] $posts
 * @property \App\Model\Entity\Team[] $team
 * @property \App\Model\Entity\Testimonial[] $testimonials
 */
class Media extends Entity
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
