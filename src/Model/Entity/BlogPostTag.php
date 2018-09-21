<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlogPostTag Entity
 *
 * @property int $post_id
 * @property int $tag_id
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 *
 * @property \App\Model\Entity\Post $post
 * @property \App\Model\Entity\BlogTag $tag
 */
class BlogPostTag extends Entity
{

}
