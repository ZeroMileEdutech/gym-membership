<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CostomersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CostomersTable Test Case
 */
class CostomersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CostomersTable
     */
    public $Costomers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.costomers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Costomers') ? [] : ['className' => 'App\Model\Table\CostomersTable'];
        $this->Costomers = TableRegistry::get('Costomers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Costomers);

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
