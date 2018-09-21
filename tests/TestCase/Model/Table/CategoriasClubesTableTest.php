<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasClubesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasClubesTable Test Case
 */
class CategoriasClubesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasClubesTable
     */
    public $CategoriasClubes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorias_clubes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriasClubes') ? [] : ['className' => 'App\Model\Table\CategoriasClubesTable'];
        $this->CategoriasClubes = TableRegistry::get('CategoriasClubes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasClubes);

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
