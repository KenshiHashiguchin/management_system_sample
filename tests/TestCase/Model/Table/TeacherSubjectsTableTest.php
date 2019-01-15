<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeacherSubjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeacherSubjectsTable Test Case
 */
class TeacherSubjectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TeacherSubjectsTable
     */
    public $TeacherSubjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TeacherSubjects',
        'app.Teachers',
        'app.Subjects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TeacherSubjects') ? [] : ['className' => TeacherSubjectsTable::class];
        $this->TeacherSubjects = TableRegistry::getTableLocator()->get('TeacherSubjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeacherSubjects);

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
