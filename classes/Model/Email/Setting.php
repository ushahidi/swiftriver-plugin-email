<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model for Email Settings
 *
 * PHP version 5
 * LICENSE: This source file is subject to the AGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/agpl.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    SwiftRiver - http://github.com/ushahidi/Swiftriver_v2
 * @subpackage Models
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/licenses/agpl.html GNU Affero General Public License (AGPL) 
 */
class Model_Email_Setting extends ORM
{
	protected $_table_name = 'email_settings';
	/**
	 * Validation for email settings
	 * @param array $arr
	 * @return array
	 */
	public function validate($arr)
	{
		return Validation::factory($arr)
			->rule('username', 'not_empty')
			->rule('password', 'not_empty')
			->rule('server_host', 'not_empty')
			->rule('server_port', 'not_empty')
			->rule('server_host_type', 'not_empty')
			->rule('server_ssl', 'not_empty');
	}
}