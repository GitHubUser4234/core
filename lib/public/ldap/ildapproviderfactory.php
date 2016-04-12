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
namespace OCP\LDAP;

/**
 * Interface ILDAPProviderFactory
 *
 * This class is responsible for instantiating and returning an ILDAPProvider
 * instance.
 *
 * @package OCP\LDAP
 * @since 9.1.0
 */
interface ILDAPProviderFactory {

	/**
	 * creates and returns an instance of the ILDAPProvider
	 *
	 * @return ILDAPProvider
	 * @since 9.1.0
	 */
	public function getLDAPProvider();
}
