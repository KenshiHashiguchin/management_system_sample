<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * Subjects Model
 *
 * @property \App\Model\Table\TeacherSubjectsTable|\Cake\ORM\Association\HasMany $TeacherSubjects
 *
 * @method \App\Model\Entity\Subject get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subject|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subject|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subject findOrCreate($search, callable $callback = null, $options = [])
 */
class SubjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('subjects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('TeachersSubjects', [
            'foreignKey' => 'subject_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('subject_name')
            ->maxLength('subject_name', 255)
            ->requirePresence('subject_name', 'create')
            ->allowEmptyString('subject_name', false);

        return $validator;
    }

	public function getSubjectOption()
	{
		$Subjects = TableRegistry::get('Subjects');
		//build query
		$entities = $Subjects->find();
		//make options
		$options = [];
		foreach ($entities as $entity) {
				$options    += [$entity->id=> $entity->subject_name];
		}
		return $options;
	}
}
