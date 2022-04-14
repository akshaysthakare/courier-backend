<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentTypesTable Test Case
 */
class PaymentTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentTypesTable
     */
    protected $PaymentTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PaymentTypes',
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
        $config = $this->getTableLocator()->exists('PaymentTypes') ? [] : ['className' => PaymentTypesTable::class];
        $this->PaymentTypes = $this->getTableLocator()->get('PaymentTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PaymentTypes);

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
