<?php

namespace App\Model\Table;

use App\Model\Entity\Feed;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feeds Model
 */
class FeedsTable extends Table {
	
	/**
	 * Initialize method
	 *
	 * @param array $config
	 *        	The configuration for the Table.
	 * @return void
	 */
	public function initialize(array $config) {
		parent::initialize ( $config );
		
		$this->table ( 'feeds' );
		$this->displayField ( 'name' );
		$this->primaryKey ( 'id' );
	}
	
	/**
	 * Default validation rules.
	 *
	 * @param \Cake\Validation\Validator $validator
	 *        	Validator instance.
	 * @return \Cake\Validation\Validator
	 */
	public function validationDefault(Validator $validator) {
		$validator->add ( 'id', 'valid', [ 
				'rule' => 'numeric' 
		] )->allowEmpty ( 'id', 'create' );
		
		$validator->requirePresence ( 'name', 'create' )->notEmpty ( 'name' );
		
		$validator->requirePresence ( 'location', 'create' )->notEmpty ( 'location' );
		
		$validator->requirePresence ( 'city', 'create' )->notEmpty ( 'city' );
		
		$validator->allowEmpty ( 'url' );
		
		return $validator;
	}
}