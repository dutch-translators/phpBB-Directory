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
	'DIR_ACTIVE_THUMB'						=> 'Website miniaturen inschakelen',
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
	'DIR_LENGTH_COMMENTS'					=> 'Maximaal aantal tekens om te reageren op een link',
	'DIR_LINKS'								=> 'Links',
	'DIR_LINK_ACTIVATE'						=> 'Goedkeuren',
	'DIR_LINK_DELETE'						=> 'Afkeuren',
	'DIR_LIST_INDEX'						=> 'Geef te categorie weer in de legenda van zijn hoofdcategorie.',
	'DIR_MAIL_NOTIFICATION'					=> 'Een nieuwe website in de directory',
	'DIR_MAIL_VALIDATION'					=> 'Ontvang een email voor websites die wachten op goedkeuring',
	'DIR_MAX_ADD_ATTEMPTS'					=> 'Pogingen voor de bevestigingscode',
	'DIR_MAX_ADD_ATTEMPTS_EXPLAIN'			=> 'Aantal pogingen om de bevestigingscode in te voeren voor het einde van de sessie.',
	'DIR_MAX_BANN'							=> 'Maximale banner afmetingen',
	'DIR_MAX_BANN_EXPLAIN'					=> 'Maximale banner afmetingen. Zet deze twee waardes op 0px bij 0px om deze optie uit te schakelen.',
	'DIR_MAX_DESC'							=> 'Maximaal aantal tekens voor de website beschrijving.',
	'DIR_MAX_SIZE'							=> 'Maximale banner grootte',
	'DIR_MAX_SIZE_EXPLAIN'					=> 'Maximale banner bestandsgrootte',
	'DIR_MOVE_LINKS_TO'						=> 'Verplaats alle websites naar',
	'DIR_MOVE_SUBCATS_TO'					=> 'Verplaats de sub-categorieën',
	'DIR_MUST_BACK'							=> 'Verzoek een backlink',
	'DIR_MUST_BACK_EXPLAIN'					=> 'Als je deze optie inschakelt wordt er gevraagd naar een backlink tijdens het toevoegen van een website.',
	'DIR_MUST_DESCRIBE'						=> 'Een beschrijvingsaanvraag inschakelen tijdens een website opgave.',
	'DIR_NB_CHECK'							=> 'Aantal controles voor verwijdering',
	'DIR_NB_CHECK_EXPLAIN'					=> 'Voer het aantal controles in waarna een website verwijderd wordt, omdat zijn backlink niet meer geldig is; een e-mail zal verstuurd worden na elke mislukte controle om de gebruiker te waarschuwen over de missende backlink. Vul 0 in als je de website wilt verwijderen na de eerste mislukt controle.',
	'DIR_NEW_TIME'							=> 'Aantal dagen dat een website nieuw is.',
	'DIR_NEW_TIME_EXPLAIN'					=> 'Het aantal dagen dat een website als nieuw wordt weergegeven. Tijdens het aantal dagen dat is ingevuld wordt het icoontje "new" weergegeven. Een waarde van 0 zal deze functie uitschakelen.',
	'DIR_NEXT_CRON_ACTION'					=> 'Datum van de volgende controle',
	'DIR_NO_CAT'							=> 'Geen categorie geselecteerd',
	'DIR_NO_DESTINATION_CAT'				=> 'Er is geen bestemmingscategorie gespecificeerd',
	'DIR_NO_LINK'							=> 'Er zijn geen websites die wachten op goedkeuring',
	'DIR_NO_PARENT'							=> 'Geen hoofd',
	'DIR_NUMBER_CATS'						=> 'Aantal categorieën',
	'DIR_NUMBER_CLICKS'						=> 'Aantal klikken',
	'DIR_NUMBER_COMMENTS'					=> 'Aantal reacties',
	'DIR_NUMBER_LINKS'						=> 'Aantal actieve links',
	'DIR_NUMBER_ORPHANS'					=> 'Aantal banners',
	'DIR_NUMBER_VOTES'						=> 'Aantal stemmen',
	'DIR_ORDER_A_A'							=> '[Oplopend] Auteur',
	'DIR_ORDER_A_D'							=> '[Aflopend] Auteur',
	'DIR_ORDER_R_A'							=> '[Oplopend] Reacties',
	'DIR_ORDER_R_D'							=> '[Aflopend] Reacties',
	'DIR_ORDER_S_A'							=> '[Oplopend] Naam',
	'DIR_ORDER_S_D'							=> '[Aflopend] Naam',
	'DIR_ORDER_T_A'							=> '[Oplopend] Datum',
	'DIR_ORDER_T_D'							=> '[Aflopend] Datum',
	'DIR_ORDER_V_A'							=> '[Oplopend] Klikken',
	'DIR_ORDER_V_D'							=> '[Aflopend] Klikken',
	'DIR_PARAM'								=> 'Algemene Instellingen',
	'DIR_RECENT_COLUMNS'					=> 'Aantal links in een rij',
	'DIR_RECENT_ENABLE'						=> 'Inschakelen "Laatst toegevoegde links" blok',
	'DIR_RECENT_ENABLE_EXPLAIN'				=> 'Deze optie geeft een blok weer, wat de nieuwste websites weergeeft die zijn toegevoegd aan de directory, onderaan de directory hoofdpagina.<br />Het aantal weergegeven websites kan ingesteld worden in de volgende instelling.',
	'DIR_RECENT_EXCLUDE'					=> 'ID van de categorieën om uit te sluiten',
	'DIR_RECENT_EXCLUDE_EXPLAIN'			=> 'Vul hier het ID van de categorieën in die je niet in het "Laatst toegevoegde links" blok wilt zien, gescheiden met een komma.<br />Bijv: 1,4,12',
	'DIR_RECENT_GUEST'						=> 'Instellingen "Laatst toegevoegde links" blok',
	'DIR_RECENT_ROWS'						=> 'Aantal rijen in een blok',
	'DIR_RELEASE_ANNOUNCEMENT'				=> 'Mededeling',
	'DIR_RESET_CLICKS'						=> 'Reset klikken teller',
	'DIR_RESET_CLICKS_CONFIRM'				=> 'Weet je zeker dat je de klikken teller wilt resetten?',
	'DIR_RESET_CLICKS_SUCCESS'				=> 'Klikken teller succesvol gereset',
	'DIR_RESET_COMMENTS'					=> 'Reset reacties',
	'DIR_RESET_COMMENTS_CONFIRM'			=> 'Weet je zeker dat je de reacties wilt resetten?',
	'DIR_RESET_COMMENTS_EXPLAIN'			=> 'Verwijderd alle reacties van de directory links',
	'DIR_RESET_COMMENTS_SUCCESS'			=> 'Reacties succesvol gereset',
	'DIR_RESET_VOTES'						=> 'Reset stemmen',
	'DIR_RESET_VOTES_CONFIRM'				=> 'Weet je zeker dat je de stemmen wilt resetten?',
	'DIR_RESET_VOTES_EXPLAIN'				=> 'verwijderd alle stemmen van de directory links',
	'DIR_RESET_VOTES_SUCCESS'				=> 'Stemmen succesvol gereset',
	'DIR_REWRITE_PARAM'						=> 'Instellingen link herschrijven',
	'DIR_SELECT_CAT'						=> 'Selecteer een categorie',
	'DIR_SHOW'								=> 'Aantal websites per pagina',
	'DIR_STATS'								=> 'Directorystatistieken',
	'DIR_STORAGE_BANNER'					=> 'Kopieer alle banners naar de server',
	'DIR_STORAGE_BANNER_EXPLAIN'			=> 'Als deze optie is ingeschakeld, worden de banners die gelinkt worden bij de websites, gekopieerd naar je eigen server.<br />De pagina‘s worden dan ook sneller geladen.',
	'DIR_SUBCAT'							=> 'Sub-categorie',
	'DIR_THUMB_PARAM'						=> 'Miniatuurinstellingen',
	'DIR_THUMB_SERVICE'						=> 'Miniatuurservice om te gebruiken',
	'DIR_THUMB_SERVICE_EXPLAIN'				=> 'Miniatuurservice om te gebruiken wanneer de Ascreen-miniatuur niet bestaat. Ondanks het inschakelen van de optie hieronder, zal het veranderen van deze instelling alleen effect hebben op toekomstig ingestuurde websites.',
	'DIR_THUMB_SERVICE_REVERSE'				=> 'De retroactieve verandering van service inschakelen',
	'DIR_THUMB_SERVICE_REVERSE_EXPLAIN'		=> 'Als je <i>ja</i> aanvinkt, zullen de bestaande linken voor de verandering van de service gebruik gaan maken van de nieuw geselecteerde service. Het vereist een query voor iedere website tijdens de eerste weergave na de service verandering, om de tabel bij te werken.',
	'DIR_USER_PROP'							=> 'Toegevoegd door %s in <i>%s</i> de %s',
	'DIR_VALIDATE'							=> 'Goedkeuring door beheerder',
	'DIR_VALIDATE_EXPLAIN'					=> 'Als je <i>ja</i> aanvinkt, moeten toegevoegde websites eerst goedgekeurd worden voor deze zichtbaar zijn in de directory. Als je <i>nee</i> aanvinkt verschijnen de websites direct in de directory.',
	'DIR_VALIDATION'						=> 'Validatie van de directory websites',
	'DIR_VALIDATION_EXPLAIN'				=> 'Deze optie zal alleen werken als je op de instellingenpagina de instelling dat websites in de directory goedgekeurd moeten worden, gekozen hebt. Wanneer dit zo is, zal een e-mail verstuurd worden naar het persoon die de website heeft ingestuurd en zodra je de website goedkeurt, zal het verschijnen in de directory.',
	'DIR_VERSION_NOT_UP_TO_DATE_ACP'		=> 'Je versie van de phpBB Directory is niet up-to-date.<br />Gebruik de volgende link om naar de aankondiging te gaan van de laatste versie en volg de instructies op om de extensie te updaten.',
	'DIR_VERSION_UP_TO_DATE_ACP'			=> 'Je versie van de phpBB Directory is up-to-date, er zijn geen nieuwe updates beschikbaar. Je hoeft je installatie niet te updaten.',
	'DIR_VISUAL_CONFIRM'					=> 'Bevestigingscode voor gasten',
	'DIR_VISUAL_CONFIRM_EXPLAIN'			=> 'Als je <i>ja</i> aanvinkt, moeten gasten een bevestigingscode invoeren om massa toevoegingen van websites te voorkomen.',
	'DIR_WAITING_LINKS'						=> 'Websites wachtend op goedkeuring',

	'IMG_BUTTON_LINK_NEW'					=> 'Voeg een website toe in de directory',
	'IMG_ICON_LINK_NEW'						=> 'Nieuwe link',

	'LOG_DIR_AUTO_PRUNE'					=> '<strong>Automatisch opschonen van een categorie van de directory</strong><br />» %s',
	'LOG_DIR_CAT_ADD'						=> '<strong>Nieuwe categorie in de directory aangemaakt</strong><br />» %s',
	'LOG_DIR_CAT_DEL_CAT'					=> '<strong>Categorie uit de directory verwijderd</strong><br />» %s',
	'LOG_DIR_CAT_DEL_CATS'					=> '<strong>Categorie en sub-categorieën uit de directory verwijderd</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS'					=> '<strong>Categorie en de websites uit de directory verwijderd.</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS_CATS'			=> '<strong>Verwijdering van een categorie, zijn reacties en zijn sub-categorieën</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS_MOVE_CATS'		=> '<strong>Verwijdering van een categorie en zijn reacties, de sub-categorieën verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_CATS'				=> '<strong>Verwijdering van een categorie, sub-categorieën verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS'			=> '<strong>Categorie uit de directory verwijderd en website verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS_CATS'		=> '<strong>Categorie en sub-categorieën uit de directory verwijderd, en websites verplaatst</strong> vers %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS_MOVE_CATS'	=> '<strong>Categorie uit de directory verwijderd, websites verplaatst </strong> naar %1$s <strong>en sub-categorieën verplaatst</strong> naar<br />» %3$s',
	'LOG_DIR_CAT_EDIT'						=> '<strong>Categorie van de directory gewijzigd</strong><br />» %s',
	'LOG_DIR_CAT_MOVE_DOWN'					=> '<strong>Categorie van de directory verplaatst</strong> %1$s <strong>onder</strong> %2$s',
	'LOG_DIR_CAT_MOVE_UP'					=> '<strong>Categorie van de directory verplaatst</strong> %1$s <strong>boven</strong> %2$s',
	'LOG_DIR_CAT_SYNC'						=> '<strong>Synchronisatie van de categorie uit de directory</strong><br />» %s',
	'LOG_LINK_ACTIVE'						=> 'Website wachtend op goedkeuring goedgekeurd:<br />» %s',
	'LOG_LINK_DELETE'						=> 'Website wachtend op goedkeuring afgekeurd:<br />» %s',

	'SYNC_IN_PROGRESS'						=> 'Synchronisatie van de categorie',
	'SYNC_IN_PROGRESS_EXPLAIN'				=> 'Synchronisatie van de links %1$d/%2$d in progressie.',

	'TOO_LONG_DESCRIPTION'					=> 'Je beschrijving is te lang',
	'TOO_SHORT_DESCRIPTION'					=> 'Je moet een beschrijving opgeven',
	'TOO_SHORT_REPLY'						=> 'Je reactie is te kort',
	'TOO_SHORT_SITE_NAME'					=> 'Je moet een website naam opgeven',
	'TOO_SHORT_URL'							=> 'Je moet een link opgeven',
	'TOO_SMALL_CAT'							=> 'Je moet een categorie selecteren',
));
