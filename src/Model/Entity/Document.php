<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property string $title
 * @property string $file_path
 * @property string $file_name
 * @property string $content_type
 * @property string $download_category_id
 * @property string $download_subcategory_id
 * @property string $year
 * @property int $author_id
 * @property int $update_author_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 *
 * @property \App\Model\Entity\DownloadCategory $download_category
 * @property \App\Model\Entity\DownloadSubcategory $download_subcategory
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\UpdateAuthor $update_author
 */
class Document extends Entity
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
