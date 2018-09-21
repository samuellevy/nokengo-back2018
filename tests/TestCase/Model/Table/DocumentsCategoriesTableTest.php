<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsCategoriesTable Test Case
 */
class DocumentsCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsCategoriesTable
     */
    public $DocumentsCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.documents_categories',
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
        $config = TableRegistry::exists('DocumentsCategories') ? [] : ['className' => 'App\Model\Table\DocumentsCategoriesTable'];
        $this->DocumentsCategories = TableRegistry::get('DocumentsCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocumentsCategories);

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
