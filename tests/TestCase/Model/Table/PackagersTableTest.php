<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackagersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackagersTable Test Case
 */
class PackagersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackagersTable
     */
    protected $Packagers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Packagers',
        'app.PackagerStatuses',
        'app.PaymentTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Packagers') ? [] : ['className' => PackagersTable::class];
        $this->Packagers = $this->getTableLocator()->get('Packagers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Packagers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
