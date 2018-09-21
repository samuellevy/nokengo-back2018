<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkCategoriesTable Test Case
 */
class WorkCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkCategoriesTable
     */
    public $WorkCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.work_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WorkCategories') ? [] : ['className' => 'App\Model\Table\WorkCategoriesTable'];
        $this->WorkCategories = TableRegistry::get('WorkCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WorkCategories);

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
}
