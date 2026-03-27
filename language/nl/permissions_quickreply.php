<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2021 Татьяна5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_QUICKREPLY'          => 'Quick Reply',
	'ACP_QUICKREPLY_EXPLAIN'  => 'Quick Reply instellingen',
	//
	'ACL_A_QUICKREPLY'        => 'Kan de instellingen van Quick Reply wijzigen',
	'ACL_F_QR_CHANGE_SUBJECT' => 'Kan het berichtonderwerp wijzigen',
	'ACL_F_QR_FULL_QUOTE'     => 'Kan volledig citeren gebruiken in onderwerpen<br /><em>Als de gebruiker deze toestemming niet heeft en de snel citeren functie is ingeschakeld, wordt snel citeren voorgesteld.</em>',
]);
