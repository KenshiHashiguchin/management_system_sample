<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\ORM\Query;
use Cake\Log\Log;

class TeacherSearchForm extends Form
{

	/**
	 * Builds the schema for the modelless form
	 *
	 * @param \Cake\Form\Schema $schema From schema
	 *
	 * @return \Cake\Form\Schema
	 */
	protected function _buildSchema(Schema $schema)
	{
		$schema
			->addField('subjects._ids', 'array')
			->addField('keyword', 'string');

		return $schema;
	}

	/**
	 * Form validation builder
	 *
	 * @param \Cake\Validation\Validator $validator to use against the form
	 *
	 * @return \Cake\Validation\Validator
	 */
	protected function _buildValidator(Validator $validator)
	{

		$validator
			->isArray('subjects._ids')
			->allowEmpty('subject_ids');

		$validator
			->utf8Extended('keyword')
			->maxLength('keyword', 255)
			->allowEmpty('keyword');

		return $validator;
	}

	/**
	 * Defines what to execute once the From is being processed
	 *
	 * @param array $data Form data.
	 *
	 * @return bool
	 */
	protected function _execute(array $data)
	{
		//load data
		$subjectIds  = $data['subjects']['_ids'] ?? [];
		$keyword           = $data['keyword'] ?? '';

		//build query
		$query = $this->_makeInitialQuery();

		$query = $this->_addSubjectCondition($query, $subjectIds);
//
		$query = $this->_addKeywordCondition($query, $keyword);

		return $query;

	}

	protected function _makeInitialQuery()
	{
		$query = TableRegistry::get('Teachers')->find()
			->contain([
				'Subjects' => function ($q) {
					return $q->order(['Subjects.id' => 'ASC']);
				},
			]);

		return $query;
	}

	protected function _addSubjectCondition($query, $subjectIds)
	{
		if (empty($subjectIds)) return $query;

		$query->innerJoinWith('Subjects', function (Query $q) use ($subjectIds) {
			return $q->where(['Subjects.id IN' => $subjectIds]);
		})
			->distinct(['Teachers.id']);

		return $query;
	}

	protected function _addKeywordCondition($query, $keyword)
	{
		if (empty($keyword)) {
			return $query;
		}

		$query->andWhere([
			'OR' => ['first_name like' => "%$keyword%", 'last_name like' => "%$keyword%"],
		]);

		return $query;
	}
}
