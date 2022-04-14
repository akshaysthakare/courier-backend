<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackagerStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackagerStatusesTable Test Case
 */
class PackagerStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackagerStatusesTable
     */
    protected $PackagerStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PackagerStatuses',
        'app.Packagers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PackagerStatuses') ? [] : ['className' => PackagerStatusesTable::class];
        $this->PackagerStatuses = $this->getTableLocator()->get('PackagerStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PackagerStatuses);

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
}
