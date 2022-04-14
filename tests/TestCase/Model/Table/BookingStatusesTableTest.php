<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookingStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookingStatusesTable Test Case
 */
class BookingStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookingStatusesTable
     */
    protected $BookingStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BookingStatuses',
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
        $config = $this->getTableLocator()->exists('BookingStatuses') ? [] : ['className' => BookingStatusesTable::class];
        $this->BookingStatuses = $this->getTableLocator()->get('BookingStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BookingStatuses);

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
