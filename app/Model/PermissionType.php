<?php
/**
 * PermissionType Model
 *
 * @copyright		Copyright 2012, Passbolt.com
 * @license			http://www.passbolt.com/license
 * @package			app.Model.PermissionDetail
 * @since			version 2.12.12
 */

class PermissionType extends AppModel {

/**
 * Custom database table name, or null/false if no table association is desired.
 *
 * @var string
 * @link http://book.cakephp.org/2.0/en/models/model-attributes.html#usetable
 */
	public $useTable = "permissions_types";

/**
 * The name of the primary key field for this model.
 *
 * @var string
 * @link http://book.cakephp.org/2.0/en/models/model-attributes.html#primaryKey
 */
	public $primaryKey = 'serial';

	const DENY = '0';
	const READ	= '1';
	const CREATE = '3';
	const UPDATE = '7';
	const ADMIN	= '15';

/**
 * Check if the given type is a valid permission type
 * @param string type The type to check
 * @return boolean
 */
	public function isValidSerial($type) {
		switch($type) {
			case self::DENY:
			case self::READ:
			case self::CREATE:
			case self::UPDATE:
			case self::ADMIN:
				return true;
			break;
			default:
				return false;
			break;
		}
	}
}