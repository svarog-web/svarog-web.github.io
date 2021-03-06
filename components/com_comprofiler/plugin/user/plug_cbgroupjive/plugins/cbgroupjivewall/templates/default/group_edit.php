<?php
/**
* Community Builder (TM)
* @version $Id: $
* @package CommunityBuilder
* @copyright (C) 2004-2014 www.joomlapolis.com / Lightning MultiCom SA - and its licensors, all rights reserved
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2
*/

use CBLib\Language\CBTxt;
use CB\Database\Table\UserTable;
use CB\Plugin\GroupJive\Table\CategoryTable;
use CB\Plugin\GroupJive\Table\GroupTable;

if ( ! ( defined( '_VALID_CB' ) || defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

class HTML_groupjiveWallParams
{

	/**
	 * render frontend group edit wall params
	 *
	 * @param GroupTable      $row
	 * @param array           $input
	 * @param CategoryTable   $category
	 * @param UserTable       $user
	 * @param cbPluginHandler $plugin
	 * @return string
	 */
	static function showWallParams( $row, $input, $category, $user, $plugin )
	{
		$return		=	'<div class="cbft_select cbtt_select form-group cb_form_line clearfix">'
					.		'<label for="params__wall" class="col-sm-3 control-label">' . CBTxt::T( 'Wall' ) . '</label>'
					.		'<div class="cb_field col-sm-9">'
					.			$input['wall']
					.			getFieldIcons( null, 0, null, CBTxt::T( 'Optionally enable or disable usage of the wall. Group owner and group administrators are exempt from this configuration and can always post. Note existing posts will still be accessible.' ) )
					.		'</div>'
					.	'</div>';

		return $return;
	}
}