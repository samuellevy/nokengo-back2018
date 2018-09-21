<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReceitasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReceitasTable Test Case
 */
class ReceitasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReceitasTable
     */
    public $Receitas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.receitas',
        'app.files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Receitas') ? [] : ['className' => 'App\Model\Table\ReceitasTable'];
        $this->Receitas = TableRegistry::get('Receitas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Receitas);

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
