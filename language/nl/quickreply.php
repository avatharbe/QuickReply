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
	'QR_ATTACH_NOTICE'                 => 'Dit antwoord bevat ten minste één bijlage.',
	'QR_BBCODE'                        => 'BBCode',
	'QR_CANCEL_SUBMISSION'             => 'Verzending annuleren',
	'QR_CTRL_ENTER'                    => 'Je kunt je antwoord ook verzenden door tegelijkertijd op Ctrl en Enter te drukken.',
	'QR_FORM_HIDE'                     => 'Snelle antwoordformulier inklappen',
	'QR_FULLSCREEN'                    => 'Volledig scherm editor',
	'QR_FULLSCREEN_EXIT'               => 'Volledig scherm sluiten',
	'QR_INSERT_TEXT'                   => 'Citaat invoegen in het Quick Reply formulier',
	'QR_QUICKQUOTE'                    => 'Snel citeren',
	'QR_QUICKQUOTE_TITLE'              => 'Beantwoorden met snel citaat',
	'QR_LOADING'                       => 'Laden',
	'QR_LOADING_ATTACHMENTS'           => 'Wachten tot het uploaden van bijlagen is voltooid...',
	'QR_LOADING_NEW_FORM_TOKEN'        => 'Het formuliertoken was verlopen en is bijgewerkt.<br />Formulier wordt opnieuw verzonden...',
	'QR_LOADING_NEW_POSTS'             => 'Er is ten minste één nieuw bericht aan het onderwerp toegevoegd.<br />Je antwoord is niet verzonden omdat je het waarschijnlijk wilt bijwerken.<br />Nieuwe berichten worden opgehaald...',
	'QR_LOADING_PREVIEW'               => 'Voorbeeld wordt opgehaald...',
	'QR_LOADING_SUBMITTED'             => 'Je bericht is succesvol verzonden.<br />Resultaat wordt opgehaald...',
	'QR_LOADING_SUBMITTING'            => 'Je antwoord wordt verzonden...',
	'QR_LOADING_WAIT'                  => 'Wachten op serverreactie...',
	'QR_MORE'                          => 'Meer acties',
	'QR_NO_FULL_QUOTE'                 => 'Selecteer een deel van het bericht om het te kunnen citeren.',
	'QR_PREVIEW_CLOSE'                 => 'Voorbeeldblok sluiten',
	'QR_PROFILE'                       => 'Ga naar profiel',
	'QR_QUICKNICK'                     => 'Verwijzen via gebruikersnaam',
	'QR_QUICKNICK_TITLE'               => 'Gebruikersnaam invoegen in het Quick Reply formulier',
	'QR_REPLY_IN_PM'                   => 'Beantwoorden via PB',
	'QR_TYPE_REPLY'                    => 'Typ hier je antwoord...',
	'QR_WARN_BEFORE_UNLOAD'            => 'Je ingevoerde antwoord is niet verzonden en kan verloren gaan!',
	'QR_READ_NEXT'                     => 'Volgende lezen',
	// begin mod Translit
	'QR_TRANSLIT_TEXT'                 => 'Transliteratie',
	'QR_TRANSLIT_TEXT_TO_RU'           => 'naar Russisch',
	'QR_TRANSLIT_TEXT_TOOLTIP'         => 'Klik op de knop om direct in het Russisch weer te geven',
	'QR_TRANSLIT_FROM'                 => 'je,jo,ayu,ay,aj,oju,oje,oja,oj,uj,yi,ya,ja,ju,yu,ja,y,zh,i\',shch,sch,ch,sh,ea,a,b,v,w,g,d,e,z,i,k,l,m,n,o,p,r,s,t,u,f,x,c,\'e,\',`,j,h',
	'QR_TRANSLIT_TO'                   => 'э,ё,aю,ай,ай,ою,ое,оя,ой,уй,ый,я,я,ю,ю,я,ы,ж,й,щ,щ,ч,ш,э,а,б,в,в,г,д,е,з,и,к,л,м,н,о,п,р,с,т,у,ф,х,ц,э,ь,ъ,й,х',
	'QR_TRANSLIT_FROM_CAPS'            => 'Yo,Jo,Ey,Je,Ay,Oy,Oj,Uy,Uj,Ya,Ja,Ju,Yu,Ja,Y,Zh,I\',Sch,Ch,Sh,Ea,Tz,A,B,V,W,G,D,E,Z,I,K,L,M,N,O,P,R,S,T,U,F,X,C,EA,J,H',
	'QR_TRANSLIT_TO_CAPS'              => 'Ё,Ё,Ей,Э,Ай,Ой,Ой,Уй,Уй,Я,Я,Ю,Ю,Я,Ы,Ж,Й,Щ,Ч,Ш,Э,Ц,А,Б,В,В,Г,Д,Е,З,И,К,Л,М,Н,О,П,Р,С,Т,У,Ф,Х,Ц,Э,Й,Х',
	// end mod Translit
	// begin mod CapsLock Transform
	'QR_TRANSFORM_TEXT'                => 'Hoofdlettergebruik wijzigen',
	'QR_TRANSFORM_TEXT_TOOLTIP'        => 'Klik op een knop om het hoofdlettergebruik van de geselecteerde tekst te wijzigen',
	'QR_TRANSFORM_TEXT_LOWER'          => '&#9660; abc',
	'QR_TRANSFORM_TEXT_UPPER'          => '&#9650; ABC',
	'QR_TRANSFORM_TEXT_INVERS'         => '&#9660;&#9650; aBC',
	'QR_TRANSFORM_TEXT_LOWER_TOOLTIP'  => 'kleine letters',
	'QR_TRANSFORM_TEXT_UPPER_TOOLTIP'  => 'HOOFDLETTERS',
	'QR_TRANSFORM_TEXT_INVERS_TOOLTIP' => 'hOOFDLETTERS oMKEREN',
	// end mod CapsLock Transform
]);
