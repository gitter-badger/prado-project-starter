<?php
namespace App\Models;

/**
 * Auto generated by PRADO - WSAT on 2016-08-22 12:59:12.
 * @author
 */
class UserRecord extends \TActiveRecord {
	const TABLE = 'users';

	public $username;
	public $email;
	public $password;
	public $role;
	public $first_name;
	public $last_name;

	public static function finder( $className = __CLASS__ ) {
		return parent::finder( $className );
	}

	public static $RELATIONS = array();

	public function __toString() {
		return (string) $this->email;
	}

	public function getFullname() {
		return $this->first_name . ' ' . $this->last_name;
	}
}