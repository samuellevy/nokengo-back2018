<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutoCaptacaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdutoCaptacaoTable Test Case
 */
class ProdutoCaptacaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdutoCaptacaoTable
     */
    public $ProdutoCaptacao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.produto_captacao',
        'app.captacaos',
        'app.produtos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProdutoCaptacao') ? [] : ['className' => 'App\Model\Table\ProdutoCaptacaoTable'];
        $this->ProdutoCaptacao = TableRegistry::get('ProdutoCaptacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProdutoCaptacao);

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
