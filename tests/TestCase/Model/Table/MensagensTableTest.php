<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MensagensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MensagensTable Test Case
 */
class MensagensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MensagensTable
     */
    public $Mensagens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mensagens',
        'app.users',
        'app.roles',
        'app.captacaos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Mensagens') ? [] : ['className' => 'App\Model\Table\MensagensTable'];
        $this->Mensagens = TableRegistry::get('Mensagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mensagens);

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
