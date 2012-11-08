<?php
App::uses('TransactionAddress', 'Model');

/**
 * TransactionAddress Test Case
 *
 */
class TransactionAddressTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transaction_address',
		'app.transaction',
		'app.user',
		'app.transaction_item',
		'app.catalog_item',
		'app.transaction_shipment',
		'app.customer', 
		'app.contact',
		'app.assignee',
		'app.creator',
		'app.modifier'
		);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TransactionAddress = ClassRegistry::init('TransactionAddress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TransactionAddress);

		parent::tearDown();
	}

}
