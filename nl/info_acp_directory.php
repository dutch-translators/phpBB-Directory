<?php
/**
 *
 * info_acp_directory [Dutch]
 *
 * @package language
 * @version $Id$
 * @copyright (c) 2011 http://www.phpbb-services.com
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this when single placeholders are used, e.g. 'Message %d' is fine
// equally when a string contains only two placeholders which are used to wrap text
// in a url once again you do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_DIRECTORY'							=> 'phpBB Directory',
	'ACP_DIRECTORY_CATS'					=> 'Categorie-instellingen',
	'ACP_DIRECTORY_INDEX_TITLE'				=> 'phpBB Directory',
	'ACP_DIRECTORY_MAIN'					=> 'Informatie en Gereedschap',
	'ACP_DIRECTORY_SETTINGS'				=> 'Algemene instellingen',
	'ACP_DIRECTORY_SETTINGS_EXPLAIN'		=> 'Directory instellingen',
	'ACP_DIRECTORY_VAL'						=> 'Website autorisatie',
	'DIR_ACTIVE_CHECK'						=> 'De verstuurde websites-test inschakelen',
	'DIR_ACTIVE_CHECK_EXPLAIN'				=> 'Door dit in te stellen op <i>ja</i>, dan zullen de links getest worden wanneer ze verstuurd worden. Als er binnen één seconde geen antwoord komt, dan zullen ze beschouwd worden als niet bereikbaar.',
	'DIR_ACTIVE_THUMB'						=> 'WEbsite miniaturen inschakelen',
	'DIR_ACTIVE_THUMB_REMOTE'				=> 'De AscreeN compatibiliteit inschakelen',
	'DIR_ACTIVE_THUMB_REMOTE_EXPLAIN'		=> 'Door dit in te stellen op <i>ja</i>, dan zal tijdens een website-opgave, de mod controleren of er een AscreeN miniatuur bestaat.<br />Een AscreeN miniatuur wordt beheerd door de webmaster en is normaal een meer accurate versie van het uiterlijk van de website.',
	'DIR_ACTIV_BANNER'						=> 'Bannerlink inschakelen',
	'DIR_ACTIV_FLAG'						=> 'Taalselectie inschakelen',
	'DIR_ACTIV_PAGERANK'					=> 'Website-pagerank inschakelen',
	'DIR_ACTIV_PAGERANK_EXPLAIN'			=> 'De pagerank berekent tijdens de website-opgave zal worden weergegeven.',
	'DIR_ACTIV_REWRITE'						=> 'De directory url rewritting inschakelen',
	'DIR_ACTIV_REWRITE_EXPLAIN'				=> 'Als je deze optie inschakelt, dan zullen de URLs van de directory-categorieën alsmede de navbar’s directory link herschreven worden volgens de instellingen van de mod <a href="http://www.phpbb-seo.com/fr/mod-rewrite-phpbb/ultimate-seo-url-t4489.html" target="_blank">Ultimate SEO URL van dcz</a>.<br />Een update van het bestand .htaccess zal vereist zijn.',
	'DIR_ACTIV_RSS'							=> 'De specificatie van de RSS feed inschakelen',
	'DIR_ACTIV_RSS_EXPLAIN'					=> 'Het activeren van deze optie staat je toe om de URL van de geassocieerde RSS feed te specificeren tijdens de website-opgave.<br />Een icoon zal weergegeven worden wanneer de categorie wordt bekeken.',
	'DIR_ADD_GUEST'							=> 'Gast-instellingen',
	'DIR_ALLOW_BBCODE'						=> 'BBCodes toestaan in reacties',
	'DIR_ALLOW_COMMENTS'					=> 'Reacties toestaan',
	'DIR_ALLOW_LINKS'						=> 'Links toestaan in reacties',
	'DIR_ALLOW_SMILIES'						=> 'Smilies toestaan in reacties',
	'DIR_ALLOW_VOTES'						=> 'Stemmen toestaan',
	'DIR_ANNOUNCEMENT_TOPIC'				=> 'Aankondigingsonderwerp',
	'DIR_BANNERS_DIR_SIZE'					=> 'De grote van de banners directory',
	'DIR_BANN_PARAM'						=> 'Bannersinstellingen',
	'DIR_CAT_ADMIN'							=> 'Instellingen van de directory categorieën',
	'DIR_CAT_ADMIN_EXPLAIN'					=> 'Hier kan je individuele categorieën toevoegen, wijzigen of verwijderen. Als de statistieken van de links (reacties, aantal stemmen) of één van de categorieën niet correct lijken, dan kan je ook een categorie synchroniseren.',
	'DIR_CAT_CREATED'						=> 'De categorie is aangemaakt.',
	'DIR_CAT_DATA_NEGATIVE'					=> 'De automatische controle instellingen en het aantal controles voordat de site verwijderd wordt kan niet negatief zijn of niet bestaan.',
	'DIR_CAT_DELETE'						=> 'Verwijder de categorie',
	'DIR_CAT_DELETED'						=> 'De categorie is verwijderd',
	'DIR_CAT_DELETE_EXPLAIN'				=> 'Het volgende formulier staat je toe om een categorie te verwijderen en laat je besluiten waar je alle websites (of categorieën) dit het bevat naar toe wilt verplaatsen.',
	'DIR_CAT_DESC'							=> 'Beschrijving',
	'DIR_CAT_DESC_EXPLAIN'					=> 'De beschrijving van de categorie is optioneel. Als je een beschrijving wilt schrijven, dan zal het verschijnen boven de websites in de categorie.<br />Iedere HTML attribuut hier geschreven, zal weergegeven worden zoals het hier staat.',
	'DIR_CAT_GENERAL_SETTINGS'				=> 'Algemene instellingen van de categorie',
	'DIR_CAT_ICON'							=> 'Categorie-afbeelding',
	'DIR_CAT_NAME'							=> 'Categorienaam',
	'DIR_CAT_NAME_EMPTY'					=> 'Je moet een categorienaam invullen',
	'DIR_CAT_PARENT'						=> 'Categorie-hoofd',
	'DIR_CAT_RESYNCED'						=> 'De categorie “%s” is gesynchroniseerd',
	'DIR_CAT_SETTINGS'						=> 'Categorie-instellingen',
	'DIR_CAT_TOO_LONG'						=> 'De categoriebeschrijving is te lang. Het mag niet meer dan 4000 tekens bevatten.',
	'DIR_CAT_UPDATED'						=> 'De categorie-informatie is bijgewerkt.',
	'DIR_COMM_PARAM'						=> 'Reactie-instellingen',
	'DIR_COMM_PER_PAGE'						=> 'Aantal reacties per pagina',
	'DIR_CONFIG_SETTINGS'					=> 'De directory configuratie update',
	'DIR_COUNT_ALL'							=> 'Tel de subcategorieën websites',
	'DIR_COUNT_ALL_EXPLAIN'					=> 'Als je deze optie inschakelt, dan zal de teller, weergegeven naast iedere categorie, ook de websites in de subcategorieën tellen.',
	'DIR_CREATE_CAT'						=> 'Nieuwe categorie aanmaken',
	'DIR_CRON_ENABLE'						=> 'Backlink periodieke controle inschakelen',
	'DIR_CRON_ENABLE_EXPLAIN'				=> 'Wanneer ingeschakeld, dan zal deze optie periodiek de opgegeven backlinks controleren op hun geldigheid.',
	'DIR_CRON_EVERY'						=> 'Controleer elke',
	'DIR_CRON_SETTINGS'						=> 'Backlinks-instellingen',
	'DIR_DEFAULT_ORDER'						=> 'Rang standaard volgorde',
	'DIR_DELETE_ALL_LINKS'					=> 'Verwijder alle websites',
	'DIR_DELETE_ORPHANS'					=> 'Verwijder wees-banners',
	'DIR_DELETE_ORPHANS_CONFIRM'			=> 'Weet je zeker dat je alle wees-banners wilt verwijderen?',
	'DIR_DELETE_ORPHANS_EXPLAIN'			=> 'De wees-banners zijn banners die zijn gekopieerd op de server, maar voor een onbekende reden niet meer geassocieerd worden met een directory website.',
	'DIR_DELETE_ORPHANS_SUCCESS'			=> 'Wees-banners verwijderd',
	'DIR_DELETE_SUBCATS'					=> 'Verwijder de websites en de categorieën',
	'DIR_DOWNLOAD_LATEST'					=> 'Download laatste versie',
	'DIR_EDIT_CAT'							=> 'Wijzig categorie',
	'DIR_EDIT_EXPLAIN'						=> 'Het volgende formulier staat je toe om deze categorie te personaliseren.',
	'DIR_ERROR_AUTH_COMM'					=> 'Je bent niet toegestaan om een reactie te plaatsen.',
	'DIR_ERROR_CAT'							=> 'Het is niet mogelijk om de data van de categorie terug te krijgen.',
	'DIR_ERROR_COMM_LOGGED'					=> 'Je moet aangemeld zijn om een reactie te plaatsen.',
	'DIR_ERROR_KEYWORD'						=> 'Je moet sleutelwoorden invoeren om een zoekopdracht te kunnen uitvoeren.',
	'DIR_ERROR_NOT_AUTH'					=> 'Je bent niet toegestaan om deze operatie uit te voeren.',
	'DIR_ERROR_NO_LINK'						=> 'De website die je zoekt bestaat niet.',
	'DIR_ERROR_NO_LINKS'					=> 'Deze website bestaat niet.',
	'DIR_ERROR_SUBMIT_TYPE'					=> 'Verkeerde datatype in de functie “dir_submit_type”.',
	'DIR_ERROR_URL'							=> 'Je moet een geldige URL invoeren.',
	'DIR_ERROR_VOTE'						=> 'Je hebt al gestemd op deze website.',
	'DIR_ERROR_VOTE_LOGGED'					=> 'Je moet aangemeld zijn om te kunnen stemmen.',
	'DIR_INDEX'								=> 'Index van de Directory',
	'DIR_LENGTH_COMMENTS'					=> 'Maximal number of characters for a link commentary',
	'DIR_LINKS'								=> 'Links',
	'DIR_LINK_ACTIVATE'						=> 'Validate',
	'DIR_LINK_DELETE'						=> 'Delete',
	'DIR_LIST_INDEX'						=> 'Display the category in the legend of its parent category',
	'DIR_MAIL_NOTIFICATION'					=> 'A new website in the directory',
	'DIR_MAIL_VALIDATION'					=> 'Receive an email for a website pending authentication',
	'DIR_MAX_ADD_ATTEMPTS'					=> 'Attempts of website submission',
	'DIR_MAX_ADD_ATTEMPTS_EXPLAIN'			=> 'Number of attempts to enter the confirmation code before the end of their session.',
	'DIR_MAX_BANN'							=> 'Maximum banners size',
	'DIR_MAX_BANN_EXPLAIN'					=> 'Maximum sent banners size. Set the two values on 0px by 0px to disable the option of control.',
	'DIR_MAX_DESC'							=> 'Maximum characters  number for the website description.',
	'DIR_MAX_SIZE'							=> 'Maximum banner size',
	'DIR_MAX_SIZE_EXPLAIN'					=> 'For the  sent banners',
	'DIR_MOVE_LINKS_TO'						=> 'Move all websites to',
	'DIR_MOVE_SUBCATS_TO'					=> 'Move the sub-categories',
	'DIR_MUST_BACK'							=> 'Request a back link',
	'DIR_MUST_BACK_EXPLAIN'					=> 'If enabled, this option asks for a link back during the website submission.',
	'DIR_MUST_DESCRIBE'						=> 'Enable description request during a website submission',
	'DIR_NB_CHECK'							=> 'Number of chekings before removal',
	'DIR_NB_CHECK_EXPLAIN'					=> 'Enter  the number of checks after which a website will be removed because his backlink is not valid anymore; An email will be sent at every failed checking to warn the user of the missing backlink. Enter 0 if you want to remove the website after the first failed checking.',
	'DIR_NEW_TIME'							=> 'Number of days for the new websites.',
	'DIR_NEW_TIME_EXPLAIN'					=> 'Number of days to consider a website as new. If so, the icon "new" will be displayed. Enter 0 to disable this option.',
	'DIR_NEXT_CRON_ACTION'					=> 'Date of the next checking',
	'DIR_NO_CAT'							=> 'No category selected',
	'DIR_NO_DESTINATION_CAT'				=> 'A destination category is not specified',
	'DIR_NO_LINK'							=> 'There is no website waiting for approval',
	'DIR_NO_PARENT'							=> 'No parent',
	'DIR_NUMBER_CATS'						=> 'Categories number',
	'DIR_NUMBER_CLICKS'						=> 'Number of clicks',
	'DIR_NUMBER_COMMENTS'					=> 'Number of comments',
	'DIR_NUMBER_LINKS'						=> 'Number of Active links',
	'DIR_NUMBER_ORPHANS'					=> 'Number of Orphan banners',
	'DIR_NUMBER_VOTES'						=> 'Number of Votes',
	'DIR_ORDER_A_A'							=> '[Ascending] Author',
	'DIR_ORDER_A_D'							=> '[Descending] Author',
	'DIR_ORDER_R_A'							=> '[Ascending] Comments',
	'DIR_ORDER_R_D'							=> '[Descending] Comments',
	'DIR_ORDER_S_A'							=> '[Ascending] Name',
	'DIR_ORDER_S_D'							=> '[Descending] Name',
	'DIR_ORDER_T_A'							=> '[Ascending] Date',
	'DIR_ORDER_T_D'							=> '[Descending] Date',
	'DIR_ORDER_V_A'							=> '[Ascending] Cliks',
	'DIR_ORDER_V_D'							=> '[Descending] Cliks',
	'DIR_PARAM'								=> 'General Settings',
	'DIR_RECENT_COLUMNS'					=> 'Number of columns in the block',
	'DIR_RECENT_ENABLE'						=> 'Enable "last links added" block',
	'DIR_RECENT_ENABLE_EXPLAIN'				=> 'This option displays a block showing the latest websites added to the directory  at the bottom of the directory main page. <br />The number of displayed websites can be set in  the following settings.',
	'DIR_RECENT_EXCLUDE'					=> 'ID of the categories to exclude',
	'DIR_RECENT_EXCLUDE_EXPLAIN'			=> 'Enter here the IDs of the cateogories not to consider, separated with comma.<br />Ex: 1,4,12',
	'DIR_RECENT_GUEST'						=> 'Settings of the "Last links added" block',
	'DIR_RECENT_ROWS'						=> 'Number of lines in the block',
	'DIR_RELEASE_ANNOUNCEMENT'				=> 'Announcement',
	'DIR_RESET_CLICKS'						=> 'Reset clicks counter',
	'DIR_RESET_CLICKS_CONFIRM'				=> 'Are you sure you want to reset the clicks counter ?',
	'DIR_RESET_CLICKS_SUCCESS'				=> 'Clicks reseted',
	'DIR_RESET_COMMENTS'					=> 'Reset comments',
	'DIR_RESET_COMMENTS_CONFIRM'			=> 'Are you sure you want to reset the comments ?',
	'DIR_RESET_COMMENTS_EXPLAIN'			=> 'Delete all comments from the directory links',
	'DIR_RESET_COMMENTS_SUCCESS'			=> 'Comments deleted',
	'DIR_RESET_VOTES'						=> 'Reset votes',
	'DIR_RESET_VOTES_CONFIRM'				=> 'Are you sure you want to reset votes ?',
	'DIR_RESET_VOTES_EXPLAIN'				=> 'Delete all votes from the directory links',
	'DIR_RESET_VOTES_SUCCESS'				=> 'Votes reseted',
	'DIR_REWRITE_PARAM'						=> 'URL Rewriting Settings',
	'DIR_SELECT_CAT'						=> 'Select a category',
	'DIR_SHOW'								=> 'Number of websites per page',
	'DIR_STATS'								=> 'Directory statistiques',
	'DIR_STORAGE_BANNER'					=> 'Copy the banners on the server',
	'DIR_STORAGE_BANNER_EXPLAIN'			=> 'If you enable this option, the banners linked to the websites will be copied to this server.<br />Enabling this option makes page load faster.',
	'DIR_SUBCAT'							=> 'Sub-category',
	'DIR_THUMB_PARAM'						=> 'Thumbnails Settings',
	'DIR_THUMB_SERVICE'						=> 'Thumbnail Service to use',
	'DIR_THUMB_SERVICE_EXPLAIN'				=> 'Thumbnail Service to use when the Ascreen thumbnail does not exist. Unless enabling the option below, changing this setting will only affect the futur submitted websites',
	'DIR_THUMB_SERVICE_REVERSE'				=> 'Enable the retroactive change of service',
	'DIR_THUMB_SERVICE_REVERSE_EXPLAIN'		=> 'By checking <i>yes</i>, the existing links before the change of the service will use the new service selected. It requires a query for each website during the first display after the service change, in order to update the table.',
	'DIR_USER_PROP'							=> 'Submitted by %s in <i>%s</i> the %s',
	'DIR_VALIDATE'							=> 'Enable administrator validation',
	'DIR_VALIDATE_EXPLAIN'					=> 'By checking <i>yes</i>, the submitted links will  be authenticated before appearing in the directory. Otherwise, if you check <i>no</i> the links will be immediately displayed.',
	'DIR_VALIDATION'						=> 'Validation of the directory websites',
	'DIR_VALIDATION_EXPLAIN'				=> 'This option will work only if in the settings panel you choose that the website of the directory have to be approuved. If so, an email will be sent to the person who submitted the website and, as soon as you validate the website in the panel, it will appear in the directory.',
	'DIR_VERSION_NOT_UP_TO_DATE_ACP'		=> 'Your version of the phpBB Directory is not up to date.<br />Use the following link to go to the announcement of the latest version and follow the instructions to do the update.',
	'DIR_VERSION_UP_TO_DATE_ACP'			=> 'Your version of the phpBB Directory is updated, no new update available. You don’t need to update your installation.',
	'DIR_VISUAL_CONFIRM'					=> 'Enable the visual confirmation for guests',
	'DIR_VISUAL_CONFIRM_EXPLAIN'			=> 'By checking <i>yes</i>, the guests will have to enter a random code matching a picture to prevent them from mass submission.',
	'DIR_WAITING_LINKS'						=> 'Number of Pending links',

	'IMG_BUTTON_LINK_NEW'					=> 'Add a website in the directory',
	'IMG_ICON_LINK_NEW'						=> 'New link',

	'LOG_DIR_AUTO_PRUNE'					=> '<strong>Auto prune of a category of the directory</strong><br />» %s',
	'LOG_DIR_CAT_ADD'						=> '<strong>Creation of a new category in the directory</strong><br />» %s',
	'LOG_DIR_CAT_DEL_CAT'					=> '<strong>Removal of a category</strong><br />» %s',
	'LOG_DIR_CAT_DEL_CATS'					=> '<strong>Removal of a category and its sub-categories</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS'					=> '<strong>Removal of a category and its messages.</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS_CATS'			=> '<strong>Removal of a category, of its messages and of its sub-categories</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS_MOVE_CATS'		=> '<strong>Removal of a category and its messages, sub-categories moved</strong> to %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_CATS'				=> '<strong>Removal of a category and sub-categories moved</strong> to %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS'			=> '<strong>Removal of a category and messages moved</strong> to %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS_CATS'		=> '<strong>Removal of a category and its sub-categories, and messages moved</strong> vers %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS_MOVE_CATS'	=> '<strong>Removal of a category, messages moved </strong> to %1$s <strong>and sub-categories moved</strong> to<br />» %3$s',
	'LOG_DIR_CAT_EDIT'						=> '<strong>Modify a category of the directory</strong><br />» %s',
	'LOG_DIR_CAT_MOVE_DOWN'					=> '<strong>Move a category of the directory</strong> %1$s <strong>under</strong> %2$s',
	'LOG_DIR_CAT_MOVE_UP'					=> '<strong>Move a category of the directory</strong> %1$s <strong>above</strong> %2$s',
	'LOG_DIR_CAT_SYNC'						=> '<strong>Resynchronization of a category of the directory</strong><br />» %s',
	'LOG_LINK_ACTIVE'						=> 'Activation of websites waiting for approval:<br />» %s',
	'LOG_LINK_DELETE'						=> 'Removal of websites waiting for approval:<br />» %s',

	'SYNC_IN_PROGRESS'						=> 'Synchronization of the category',
	'SYNC_IN_PROGRESS_EXPLAIN'				=> 'Resynchronization of the links %1$d/%2$d in progress.',

	'TOO_LONG_DESCRIPTION'					=> 'Your description is too long',
	'TOO_SHORT_DESCRIPTION'					=> 'You must enter a description',
	'TOO_SHORT_REPLY'						=> 'Your comment is too short',
	'TOO_SHORT_SITE_NAME'					=> 'You must enter a name for the website',
	'TOO_SHORT_URL'							=> 'You must enter an URL',
	'TOO_SMALL_CAT'							=> 'You must select a category',
));
