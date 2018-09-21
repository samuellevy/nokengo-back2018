<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CaptacaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CaptacaoTable Test Case
 */
class CaptacaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CaptacaoTable
     */
    public $Captacao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.captacao',
        'app.clientes',
        'app.mensagens',
        'app.produto_captacao'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Captacao') ? [] : ['className' => 'App\Model\Table\CaptacaoTable'];
        $this->Captacao = TableRegistry::get('Captacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Captacao);

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
