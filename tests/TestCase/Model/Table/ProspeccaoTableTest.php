<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProspeccaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProspeccaoTable Test Case
 */
class ProspeccaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProspeccaoTable
     */
    public $Prospeccao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prospeccao',
        'app.users',
        'app.roles',
        'app.clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prospeccao') ? [] : ['className' => 'App\Model\Table\ProspeccaoTable'];
        $this->Prospeccao = TableRegistry::get('Prospeccao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prospeccao);

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
