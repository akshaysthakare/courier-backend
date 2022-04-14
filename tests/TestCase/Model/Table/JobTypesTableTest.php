<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobTypesTable Test Case
 */
class JobTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobTypesTable
     */
    protected $JobTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.JobTypes',
        'app.Jobs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('JobTypes') ? [] : ['className' => JobTypesTable::class];
        $this->JobTypes = $this->getTableLocator()->get('JobTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->JobTypes);

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
