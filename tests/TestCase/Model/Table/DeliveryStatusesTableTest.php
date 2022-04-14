<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliveryStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliveryStatusesTable Test Case
 */
class DeliveryStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliveryStatusesTable
     */
    protected $DeliveryStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.DeliveryStatuses',
        'app.Bookings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DeliveryStatuses') ? [] : ['className' => DeliveryStatusesTable::class];
        $this->DeliveryStatuses = $this->getTableLocator()->get('DeliveryStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->DeliveryStatuses);

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
