<?php
App::uses('TransactionItem', 'Transactions.Model');   
/**
 * Transaction Test Case
 *
 */
class TransactionItemTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
  public $fixtures = array('app.Condition','plugin.Transactions.TransactionItem');   
	/*public $fixtures = array(
	    'plugin.transactions.transaction',
	    'plugin.transactions.transaction_payment',
	    'plugin.users.user',
	    'plugin.transactions.transaction_item',
	    'plugin.transactions.transaction_shipment',
	    'plugin.users.customer',
	    'plugin.contacts.contact',
	    'plugin.users.assignee',
	    'plugin.users.creator',
	    'plugin.users.modifier',
	    'plugin.transactions.transaction_coupon'
	    );   */

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TransactionItem = ClassRegistry::init('Transactions.TransactionItem');
        
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TransactionItem);

		parent::tearDown();
	}

	
	public function testSetCartId() {
	 // $result = $this->TransactionItem->setCartId(String::uuid());
//	  debug($result);break;
	  //$this->assertTrue(is_string($result));
	}
	
}
