<?php
/**
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

namespace OC\LDAP;

use OCP\LDAP\ILDAPProvider;

/**
 * Dummy LDAP provider that only throws exceptions. 
 * Real implementation is done in the user_ldap app.
 */
class LDAPProvider implements ILDAPProvider {
	/**
	 * Dummy function
	 * @param string $uid
	 * @throws Exception
	 */
	public function getUserDN($uid) {
		throw new \Exception("Dummy function \"getUserDN\" called");
	}
	
	/**
	 * Dummy function
	 * @param string $uid
	 * @throws Exception
	 */
	public function getLDAPAccess($uid) {
		throw new \Exception("Dummy function \"getLDAPAccess\" called");
	}
}
