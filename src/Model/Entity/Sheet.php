<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sheet Entity
 *
 * @property int $id
 * @property string $advertiser
 * @property string $project_title
 * @property string $production_company
 * @property string $post_production_company
 * @property string $creative_director
 * @property string $art_director
 * @property string $writer
 * @property string $illustrator
 * @property string $photographer
 * @property string $music_producer
 * @property string $video_producer
 * @property int $work_id
 * @property int $category_id
 *
 * @property \App\Model\Entity\Work $work
 * @property \App\Model\Entity\Category $category
 */
class Sheet extends Entity
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
