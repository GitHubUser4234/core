<?php
/**
 * @author Arthur Schiwon <blizzz@owncloud.com>
 * @author Lukas Reschke <lukas@owncloud.com>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author GitHubUser4234 <i_feel_happy@yahoo.com>
 *
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCA\user_ldap\lib;


abstract class BackendUtility {
	protected $access;

	/**
	 * constructor, make sure the subclasses call this one!
	 * @param Access $access an instance of Access for LDAP interaction
	 */
	public function __construct(Access $access) {
		$this->access = $access;
	}
	
	/**
	 * Return a new LDAP connection resource from a deep-copied connection
	 * of the current access.
	 * @return resource of the LDAP connection
	 */
	public function getNewLDAPConnection() {
		return $this->access->getConnection()->getDeepCopy()->getConnectionResource();
	}
}
