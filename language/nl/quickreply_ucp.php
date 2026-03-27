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
	'QR_CHANGE_QUICKNICK_STRING' => 'Vervolgkeuzemenu bij klik op gebruikersnaam omschakelen naar link "Verwijzen via gebruikersnaam" onder avatar',
	'QR_ENABLE_AJAX_PAGINATION'  => 'Quick Reply formulier niet verversen bij navigeren door het onderwerp',
	'QR_ENABLE_SCROLL'           => 'Automatisch scrollen inschakelen bij navigeren door het onderwerp',
	'QR_ENABLE_SOFT_SCROLL'      => 'Vloeiend scrollen en animaties inschakelen bij navigeren door het onderwerp en na quick reply',
	'QR_ENABLE_WARNING'          => 'Waarschuwen als het ingevoerde snelle antwoord verloren kan gaan',
	'QR_FIX_EMPTY_FORM'          => 'Quick Reply formulier vastzetten wanneer het leeg is',
]);
