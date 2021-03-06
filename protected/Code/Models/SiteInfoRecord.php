<?php

using( 'App.Code.Data.ActiveRecord.NActiveRecord' );
using( 'System.Data.ActiveRecord.TActiveRecordCriteria' );

/**
 * Auto generated by PRADO - WSAT on 2016-08-22 12:59:12.
 * @author
 */
class SiteInfoRecord extends NActiveRecord {
	const TABLE = 'site_infos';

	private $_name;
	public $value;
	public $deletable;
	public $editable;
	public $readable;

	public static function finder( $className = __CLASS__ ) {
		return parent::finder( $className );
	}

	public static $RELATIONS = array();

	public function __toString() {
		return '';
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->_name;
	}

	/**
	 * @param mixed $_name
	 */
	public function setName( $_name ) {
		$this->_name = preg_replace( "#[^a-z_0-9]#", '_', trim( strtolower( $_name ) ) );
	}

	/**
	 * @return bool
	 */
	protected function canHandleOnUpdate() {
		return true;
	}

	/**
	 * @param TActiveRecordChangeEventParameter $param
	 */
	public function onUpdate( $param ) {
		$param->IsValid = user()->IsSuperAdmin || ( user()->IsAdmin && $this->CanEdit );

		parent::onUpdate( $param );
	}


	/**
	 * @return mixed
	 */
	public function getCanDelete() {
		return $this->deletable;
	}

	/**
	 * @return mixed
	 */
	public function getCanEdit() {
		return $this->editable;
	}

	/**
	 * @return mixed
	 */
	public function getCanRead() {
		return $this->readable;
	}
}