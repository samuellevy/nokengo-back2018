<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlogTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogTagsTable Test Case
 */
class BlogTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BlogTagsTable
     */
    public $BlogTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.blog_tags',
        'app.authors',
        'app.update_authors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BlogTags') ? [] : ['className' => 'App\Model\Table\BlogTagsTable'];
        $this->BlogTags = TableRegistry::get('BlogTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlogTags);

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
