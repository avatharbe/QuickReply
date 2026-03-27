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
	'ACP_QUICKREPLY'                       => 'Quick Reply',
	'ACP_QUICKREPLY_EXPLAIN'               => 'Quick Reply instellingen',
	'ACP_QUICKREPLY_TITLE'                 => 'Quick Reply',
	'ACP_QUICKREPLY_TITLE_EXPLAIN'         => 'Hier kun je algemene en forumspecifieke instellingen voor het Quick Reply formulier instellen.<br />OPMERKING: "Quick Reply toestaan" en "Quick Reply inschakelen" zijn ingebouwde phpBB-instellingen die hier worden weergegeven voor het gemak. Andere instellingen hier zijn daarvan afhankelijk.',
	//
	'ACP_QUICKREPLY_QN'                    => 'Snel citeren en QuickNick instellingen',
	'ACP_QUICKREPLY_QN_EXPLAIN'            => 'Snel citeren en QuickNick instellingen',
	'ACP_QUICKREPLY_QN_TITLE'              => 'Quick Reply',
	'ACP_QUICKREPLY_QN_TITLE_EXPLAIN'      => 'Hier kun je de instellingen voor snel citeren en QuickNick instellen.<br />OPMERKING: deze instellingen hebben geen effect in forums waar Quick Reply is uitgeschakeld of niet is toegestaan.',
	//
	'ACP_QUICKREPLY_PLUGINS'               => 'Aanvullende instellingen',
	'ACP_QUICKREPLY_PLUGINS_EXPLAIN'       => 'Aanvullende instellingen',
	'ACP_QUICKREPLY_PLUGINS_TITLE'         => 'Quick Reply',
	'ACP_QUICKREPLY_PLUGINS_TITLE_EXPLAIN' => 'Hier kun je de instellingen voor speciale functies van de QuickReply extensie instellen.<br />OPMERKING: deze instellingen werken ongeacht of Quick Reply is ingeschakeld in een bepaald forum.',
	//
	'ACP_QR_AJAX_PAGINATION'               => 'Navigeren door onderwerpen toestaan zonder de pagina te herladen',
	'ACP_QR_AJAX_PAGINATION_EXPLAIN'       => 'Als deze instelling is ingeschakeld, wordt Ajax-paginering gebruikt in plaats van standaard formulierverzendingen wanneer gebruikers de optie "Quick Reply formulier niet verversen bij navigeren door het onderwerp" hebben ingeschakeld.',
	'ACP_QR_AJAX_SUBMIT'                   => 'Ajax-verzending toestaan',
	'ACP_QR_AJAX_SUBMIT_EXPLAIN'           => 'Berichten verzenden zonder de pagina te herladen toestaan.<br />Wanneer ingeschakeld, worden forumspecifieke instellingen gebruikt om te bepalen of Ajax-verzending wordt gebruikt in individuele forums.',
	'ACP_QR_ALLOW_FOR_GUESTS'              => 'Quick Reply toestaan voor gasten als het is ingeschakeld',
	'ACP_QR_ATTACH'                        => 'Bijlagen toestaan',
	'ACP_QR_ATTACH_EXPLAIN'                => 'Bijlagen toestaan in het Quick Reply formulier.',
	'ACP_QR_BBCODE'                        => 'BBCode-knoppen weergeven',
	'ACP_QR_BBCODE_EXPLAIN'                => 'BBCode-knoppen inschakelen in het Quick Reply formulier.',
	'ACP_QR_CAPSLOCK'                      => 'Hoofdlettertransformaties inschakelen',
	'ACP_QR_COLOUR_NICKNAME'               => 'Kleur toevoegen bij verwijzen via gebruikersnaam',
	'ACP_QR_COMMA'                         => 'Komma toevoegen na gebruikersnaam',
	'ACP_QR_COMMA_EXPLAIN'                 => 'Automatisch een komma toevoegen na de gebruikersnaam bij het gebruik van "Verwijzen via gebruikersnaam".',
	'ACP_QR_CTRLENTER_NOTICE'              => 'Tooltip "Ctrl+Enter" inschakelen in het Quick Reply formulier',
	'ACP_QR_CTRLENTER_NOTICE_EXPLAIN'      => 'De tooltip wordt weergegeven wanneer je met de cursor over de knop "Verzenden" in het Quick Reply formulier beweegt. Het uitschakelen van deze instelling schakelt de "Ctrl+Enter" functionaliteit niet uit.',
	'ACP_QR_ENABLE_AJAX_SUBMIT'            => 'Ajax-verzending inschakelen in alle forums',
	'ACP_QR_ENABLE_AJAX_SUBMIT_EXPLAIN'    => 'Ajax-verzending direct in alle forums toestaan.',
	'ACP_QR_ENABLE_RE'                     => '"Re:" inschakelen',
	'ACP_QR_ENABLE_RE_EXPLAIN'             => 'Automatisch het voorvoegsel "Re:" toevoegen in het "Berichtonderwerp" in het Quick Reply en het volledige antwoordformulier.',
	'ACP_QR_ENABLE_QUICK_REPLY'            => 'Quick Reply inschakelen in alle forums',
	'ACP_QR_ENABLE_QUICK_REPLY_EXPLAIN'    => 'Quick Reply direct in alle forums toestaan.',
	'ACP_QR_FORM_TYPE'                     => 'Type Quick Reply formulier',
	'ACP_QR_FORM_TYPE_EXPLAIN'             => 'Als de optie "Vast met bericht herladen" is geselecteerd, wordt de mogelijkheid om berichten op de huidige pagina te laden via de knoppen "volgende/vorige berichten tonen" toegevoegd aan de standaard paginering.',
	'ACP_QR_FORM_TYPE_FIXED'               => 'Vast',
	'ACP_QR_FORM_TYPE_SCROLL'              => 'Vast met bericht herladen',
	'ACP_QR_FORM_TYPE_STANDARD'            => 'Standaard',
	'ACP_QR_FORUM_AJAX_SUBMIT'             => 'Ajax-verzending inschakelen',
	'ACP_QR_FORUM_AJAX_SUBMIT_EXPLAIN'     => 'Berichten verzenden zonder de pagina te herladen toestaan.',
	'ACP_QR_FULL_QUOTE'                    => 'Volledige citaten invoegen in het Quick Reply formulier',
	'ACP_QR_FULL_QUOTE_EXPLAIN'            => 'Het standaardgedrag van de knop "Beantwoorden met citaat" vervangen.',
	'ACP_QR_HIDE_SUBJECT_BOX'              => 'Onderwerpveld verbergen als onderwerpwijziging is uitgeschakeld',
	'ACP_QR_HIDE_SUBJECT_BOX_EXPLAIN'      => 'Als een gebruiker geen toestemming heeft om het berichtonderwerp te wijzigen, wordt het onderwerpveld verborgen in plaats van uitgeschakeld.',
	'ACP_QR_LAST_QUOTE'                    => 'Volledig citeren inschakelen voor laatste berichten in onderwerpen',
	'ACP_QR_LAST_QUOTE_EXPLAIN'            => 'Volledig citeren toestaan via de standaard citeerknop.<br /><em>Merk op dat de citeerknop wordt verborgen als deze instelling samen met de instelling voor snel citeren is uitgeschakeld. Deze instelling overschrijft de gebruikerstoestemming voor volledig citeren.</em>',
	'ACP_QR_LEAVE_AS_IS'                   => 'Niet wijzigen',
	'ACP_QR_LEAVE_AS_IS_EXPLAIN'           => '<em>Als je "Niet wijzigen" selecteert, worden de foruminstellingen niet gewijzigd.</em>',
	'ACP_QR_LEGEND_AJAX'                   => 'Ajax-instellingen',
	'ACP_QR_LEGEND_DISPLAY'                => 'Weergave-instellingen',
	'ACP_QR_LEGEND_GENERAL'                => 'Algemene instellingen',
	'ACP_QR_LEGEND_QUICKNICK'              => 'QuickNick instellingen',
	'ACP_QR_LEGEND_QUICKQUOTE'             => 'Snel citeren instellingen',
	'ACP_QR_LEGEND_SPECIAL'                => 'Speciale functies',
	'ACP_QR_QUICKNICK'                     => 'QuickNick inschakelen (in het vervolgkeuzemenu)',
	'ACP_QR_QUICKNICK_EXPLAIN'             => 'Maakt een vervolgkeuzemenu met de link "Verwijzen via gebruikersnaam" die de gebruikersnaam van de berichtauteur invoegt in het Quick Reply formulier. Dit menu wordt geopend door te klikken op de gebruikersnaam van de berichtauteur en bevat ook links naar het profiel en "Beantwoorden via PB" (indien beschikbaar).<br />Als deze instelling is ingeschakeld en de instelling "QuickNick inschakelen (onder avatar)" is uitgeschakeld, kan de gebruiker in het Gebruikerspaneel overschakelen naar de versie van de link "Verwijzen via gebruikersnaam" onder de avatar.',
	'ACP_QR_QUICKNICK_STRING'              => 'QuickNick inschakelen (onder avatar)',
	'ACP_QR_QUICKNICK_STRING_EXPLAIN'      => 'Toont een link "Verwijzen via gebruikersnaam" in de berichtprofielen van gebruikers die de gebruikersnaam invoegt in het Quick Reply formulier.',
	'ACP_QR_QUICKNICK_PM'                  => 'Knop "Beantwoorden via PB" opnemen in het vervolgkeuzemenu van de functie "Verwijzen via gebruikersnaam"',
	'ACP_QR_QUICKNICK_REF'                 => 'Speciale tag voor gebruikersverwijzing inschakelen',
	'ACP_QR_QUICKNICK_REF_EXPLAIN'         => 'BBCode [ref] wordt gebruikt in plaats van [b] in de functie "Verwijzen via gebruikersnaam".<br /><em>Merk op dat als deze optie is uitgeschakeld, gebruikers alleen meldingen ontvangen over vermeldingen wanneer de [ref]-tag handmatig in een bericht wordt ingevoegd.</em>',
	'ACP_QR_QUICKQUOTE'                    => 'Snel citeren popup inschakelen',
	'ACP_QR_QUICKQUOTE_BUTTON'             => 'Snel citeren via knop inschakelen',
	'ACP_QR_QUICKQUOTE_BUTTON_EXPLAIN'     => 'Citeren toestaan via de standaard citeerknop.<br /><em>Merk op dat de citeerknop wordt verborgen als deze instelling is uitgeschakeld en de gebruiker geen toestemming heeft om volledig te citeren.</em>',
	'ACP_QR_QUICKQUOTE_EXPLAIN'            => 'Citeren toestaan via een "popup" die verschijnt wanneer je tekst selecteert in een bericht.',
	'ACP_QR_READ_NEXT'                     => 'Knop "Volgende lezen" weergeven',
	'ACP_QR_SCROLL_TIME'                   => 'Tijd voor een enkele scroll- en animatiegebeurtenis',
	'ACP_QR_SCROLL_TIME_EXPLAIN'           => 'Tijd in milliseconden voor de vloeiend scrollen functie. Voer 0 in voor standaard scrollen.',
	'ACP_QR_SHOW_BUTTON_TRANSLIT'          => 'Knop "Converteren" weergeven',
	'ACP_QR_SHOW_SUBJECTS'                 => 'Berichtonderwerpen weergeven in onderwerpen',
	'ACP_QR_SHOW_SUBJECTS_IN_SEARCH'       => 'Berichtonderwerpen weergeven in zoekresultaten',
	'ACP_QR_SMILIES'                       => 'Smileys weergeven',
	'ACP_QR_SMILIES_EXPLAIN'               => 'Weergave van smileys toestaan in het Quick Reply formulier.',
]);
