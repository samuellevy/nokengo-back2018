<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsYearsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsYearsTable Test Case
 */
class DocumentsYearsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsYearsTable
     */
    public $DocumentsYears;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.documents_years'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DocumentsYears') ? [] : ['className' => 'App\Model\Table\DocumentsYearsTable'];
        $this->DocumentsYears = TableRegistry::get('DocumentsYears', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocumentsYears);

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
