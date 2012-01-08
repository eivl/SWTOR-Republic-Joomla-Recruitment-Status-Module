<?php
/**
 * Guild Recruitment Status! Module Entry Point
 * 
 *
 *
 * 
 * @license        GNU/GPL, see LICENSE.php
 * mod_recruitment is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$recruit = modRecruitmentHelper::getRecruit( $params );
require( JModuleHelper::getLayoutPath( 'mod_recruitment' ) );

?>