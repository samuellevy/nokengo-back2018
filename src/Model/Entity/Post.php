<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property int $category_id
 * @property int $media_id
 * @property int $cover_media_id
 * @property bool $important
 * @property int $author_id
 * @property int $update_author_id
 * @property \Cake\I18n\Time $publish_date
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Media $media
 * @property \App\Model\Entity\CoverMedia $cover_media
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\UpdateAuthor $update_author
 */
class Post extends Entity
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
