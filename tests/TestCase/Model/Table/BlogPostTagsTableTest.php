<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlogPostTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogPostTagsTable Test Case
 */
class BlogPostTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BlogPostTagsTable
     */
    public $BlogPostTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.blog_post_tags',
        'app.posts',
        'app.blog_categories',
        'app.authors',
        'app.update_authors',
        'app.media',
        'app.cover_media',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BlogPostTags') ? [] : ['className' => 'App\Model\Table\BlogPostTagsTable'];
        $this->BlogPostTags = TableRegistry::get('BlogPostTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlogPostTags);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
