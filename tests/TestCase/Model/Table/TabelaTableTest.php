<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelaTable Test Case
 */
class TabelaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelaTable
     */
    public $Tabela;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabela',
        'app.dentro'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tabela') ? [] : ['className' => 'App\Model\Table\TabelaTable'];
        $this->Tabela = TableRegistry::get('Tabela', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tabela);

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
