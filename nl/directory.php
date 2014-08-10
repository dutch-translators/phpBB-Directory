<?php
/**
*
* directory [Dutch]
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
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'DIR_ARE_WATCHING_CAT'					=> 'You have subscribed to be notified of new website in this categorie.',
	'DIR_BANNER_DISALLOWED_CONTENT'			=> 'The transfer has been interrupted because the file had been identified as a potential threat.',
	'DIR_BANNER_DISALLOWED_EXTENSION'		=> 'This file can’t be shown because the extension <strong>%s</strong> is not allowed.',
	'DIR_BANNER_EMPTY_FILEUPLOAD'			=> 'The banner file is empty.',
	'DIR_BANNER_EMPTY_REMOTE_DATA'			=> 'The submitted banner can’t be transfered because the datas seem incorrect or corrupted.',
	'DIR_BANNER_IMAGE_FILETYPE_MISMATCH'	=> 'Banner file type mismatch: expected extension %1$s but extension %2$s given.',
	'DIR_BANNER_INVALID_FILENAME'			=> '%s is an invalid file name.',
	'DIR_BANNER_NOT_UPLOADED'				=> 'The banner cannot be transfered',
	'DIR_BANNER_NO_SIZE'					=> 'Error while trying to determine the height and width of the avatar. Please enter them manually',
	'DIR_BANNER_PARTIAL_UPLOAD'				=> 'The file cannot be totally transfered.',
	'DIR_BANNER_PHP_SIZE_NA'				=> 'The banner size is too big.<br />The maximum size set in php.ini could not be determined".',
	'DIR_BANNER_PHP_SIZE_OVERRUN'			=> 'The banner size is too big. The maximum size allowed is %d Mo.<br />Please note that this setting is written in php.ini and cannot be outreached.',
	'DIR_BANNER_REMOTE_UPLOAD_TIMEOUT'		=> 'The specified banner could not be uploaded because the request timed out.',
	'DIR_BANNER_UNABLE_GET_IMAGE_SIZE'		=> 'It was not possible to determine the banner’s  dimensions  ',
	'DIR_BANNER_URL_INVALID'				=> 'The banner address is invalid',
	'DIR_BANNER_URL_NOT_FOUND'				=> 'The file cannot be found.',
	'DIR_BANNER_WRONG_FILESIZE'				=> 'The banner size must be between 0 and %1d %2s.',
	'DIR_BANNER_WRONG_SIZE'					=> 'The specified banner has a width of %3$d pixels and a height of %4$d pixels. The banner cannot be over %1$d pixels width and %2$d height.',
	'DIR_BUTTON_NEW_SITE'					=> 'Nieuwe website',
	'DIR_CAT'								=> 'Categorie',
	'DIR_CAT_NAME'							=> 'Categorie Naam',
	'DIR_CAT_TITLE'							=> 'Directory’ categories',
	'DIR_CAT_TOOLS'							=> 'Categorie tools',
	'DIR_CLICK_RETURN_DIR'					=> 'Click %shere%s to go back to the directory home',
	'DIR_CLICK_RETURN_CAT'					=> 'Click %shere%s to go back to the category',
	'DIR_CLICK_RETURN_COMMENT'				=> 'Click %shere%s to go back to the comments page',
	'DIR_CLICK_RETURN_LINK'					=> 'Click %shere%s to go back to the website',
	'DIR_COMMENTS_ORDER'					=> 'Reacties',
	'DIR_COMMENT_TITLE'						=> 'Read/Post a comment',
	'DIR_COMMENT_DELETE'					=> 'Verwijder de reactie',
	'DIR_COMMENT_DELETE_CONFIRM'			=> 'Weet je zeker dat je de reactie wilt verwijderen?',
	'DIR_COMMENT_DELETE_OK'					=> 'This comment has been deleted successfully.',
	'DIR_COMMENT_EDIT'						=> 'Edit the comment',
	'DIR_DELETE_BANNER'						=> 'Delete the banner',
	'DIR_DELETE_OK'							=> 'The website has been deleted',
	'DIR_DELETE_SITE'						=> 'Verwijder de website',
	'DIR_DELETE_SITE_CONFIRM'				=> 'Weet je zeker dat je de website wilt verwijderen?',
	'DIR_DESCRIPTION'						=> 'Beschrijving',
	'DIR_DESCRIPTION_EXP'					=> 'Een korte beschrijving van de website, %d tekens max.',
	'DIR_DISPLAY_LINKS'						=> 'Show the previous links',
	'DIR_EDIT'								=> 'Wijzig',
	'DIR_EDIT_COMMENT_OK'					=> 'This comment has been edited successfully',
	'DIR_EDIT_SITE'							=> 'Wijzig de website',
	'DIR_EDIT_SITE_ACTIVE'					=> 'Your website has been edited, but it must be approved before appearing in the directory',
	'DIR_EDIT_SITE_OK'						=> 'The website has been edited',
	'DIR_ERROR_AUTH_COMM'					=> 'You are not allowed to post a comment',
	'DIR_ERROR_CAT'							=> 'Error while trying to recover data from the current category.',
	'DIR_ERROR_CHECK_URL'					=> 'This URL seems unreachable',
	'DIR_ERROR_COMM_LOGGED'					=> 'You must be logged in to post a comment',
	'DIR_ERROR_KEYWORD'						=> 'You must enter kewyords to search.',
	'DIR_ERROR_NOT_AUTH'					=> 'You are not allowed to do this operation',
	'DIR_ERROR_NOT_FOUND_BACK'				=> 'The specified page for the link back is not found.',
	'DIR_ERROR_NO_CATS'						=> 'This category doesn’t exist',
	'DIR_ERROR_NO_LINK'						=> 'The website you are looking for doesn’t exist',
	'DIR_ERROR_NO_LINKS'					=> 'This website doesn’t exist',
	'DIR_ERROR_NO_LINK_BACK'				=> 'The link back hasn’t been found on the page you’ve specified',
	'DIR_ERROR_SUBMIT_TYPE'					=> 'Incorrect data type in dir_submit_type function',
	'DIR_ERROR_URL'							=> 'You must enter a correct URL',
	'DIR_ERROR_VOTE'						=> 'You have already voted for this website',
	'DIR_ERROR_VOTE_LOGGED'					=> 'You must be logged in to vote',
	'DIR_ERROR_WRONG_DATA_BACK'				=> 'The address for the link back must be a valid URL, including the protocol. For example http://www.example.com/.',
	'DIR_FIELDS'							=> 'Please fill all the fields with a *',
	'DIR_FLAG'								=> 'Vlag',
	'DIR_FLAG_EXP'							=> 'Selecteer een vlag, die de nationaliteit van de website aangeeft',
	'DIR_FROM_TEN'							=> '%s/10',
	'DIR_GUEST_EMAIL'						=> 'Je E-mailadres',
	'DIR_MAKE_SEARCH'						=> 'Zoek een website',
	'DIR_NAME_ORDER'						=> 'Naam',
	'DIR_NEW_COMMENT_OK'					=> 'Je reactie is succesvol geplaatst',
	'DIR_NEW_SITE'							=> 'Voeg een website toe aan de directory',
	'DIR_NEW_SITE_ACTIVE'					=> 'Your website has been added, but it must be approved before appearing in the directory',
	'DIR_NEW_SITE_OK'						=> 'Je website is toegevoegd aan de directory',
	'DIR_NB_CLICKS'							=> array(
													1 => '%d klik',
													2 => '%d klikken',
												),
	'DIR_NB_CLICS_ORDER'					=> 'Clicks',
	'DIR_NB_COMMS'							=> array(
													1 => '%d reactie',
													2 => '%d reacties',
												),
	'DIR_NB_LINKS'							=> array(
													1 => '%d link',
													2 => '%d links',
												),
	'DIR_NB_VOTES'							=> array(
													1 => '%d stem',
													2 => '%d stemmen',
												),
	'DIR_NONE'								=> 'None',
	'DIR_NOTE'								=> 'Notation',
	'DIR_NO_COMMENT'						=> 'There is no comment for this website',
	'DIR_NO_DRAW_CAT'						=> 'There is no category',
	'DIR_NO_DRAW_LINK'						=> 'There is no website in the category',
	'DIR_NO_NOTE'							=> 'None',
	'DIR_NOT_WATCHING_CAT'					=> 'You are no longer subscribed to this categorie.',

	'DIR_PAGERANK'							=> 'Pr',
	'DIR_PAGERANK_NOT_AVAILABLE'			=> 'n/a',
	'DIR_PR_ORDER'							=> 'PageRank',
	'DIR_REPLY_EXP'							=> 'Je reactie kan niet meer dan %d tekens lang zijn.',
	'DIR_REPLY_TITLE'						=> 'Plaats een reactie',
	'DIR_RSS'								=> 'RSS of',
	'DIR_SEARCH_AND'						=> 'Search for all the words',
	'DIR_SEARCH_CATLIST'					=> 'Zoek in een categorie',
	'DIR_SEARCH_DESC_ONLY'					=> 'Alleen op beschrijving',
	'DIR_SEARCH_METHOD'						=> 'Method',
	'DIR_SEARCH_NB_CLIC'					=> 'Click',
	'DIR_SEARCH_NB_CLICS'					=> 'Clicks',
	'DIR_SEARCH_NB_COMM'					=> 'Reactie',
	'DIR_SEARCH_NB_COMMS'					=> 'Reacties',
	'DIR_SEARCH_OR'							=> 'Search for at least one of the words',
	'DIR_SEARCH_RESULT'						=> 'Zoek Resultaten',
	'DIR_SEARCH_SUBCATS'					=> 'Zoek in subcategorie',
	'DIR_SEARCH_TITLE_DESC'					=> 'Naam en Beschrijving',
	'DIR_SEARCH_TITLE_ONLY'					=> 'Alleen op naam',
	'DIR_SITE_BACK'							=> 'Back link’s page URL',
	'DIR_SITE_BACK_EXPLAIN'					=> 'In this category, it is asked that the website owner adds a link back. Please specify the URL of the page where we can find the link',
	'DIR_SITE_BANN'							=> 'Voeg een banner toe ',
	'DIR_SITE_BANN_EXP'						=> 'Plaats hier de volledige link naar je banner. Houd er rekening mee dat dit veld niet verplicht is. De maximale toegestane afmetingen zijn <b>%d x %d</b> pixels, de banner wordt automatische verkleind als de afmetingen worden overschreden.',
	'DIR_SITE_NAME'							=> 'Website naam',
	'DIR_SITE_RSS'							=> 'RSS feeds',
	'DIR_SITE_RSS_EXPLAIN'					=> 'Je kan hier een link naar de RSS feeds toevoegen. Een RSS icoontje wordt dan weergegeven naast de website, zodat gebruikers zich daarop kunnen abboneren',
	'DIR_SITE_URL'							=> 'Link',
	'DIR_SOMMAIRE'							=> 'Home of the Directory',
	'DIRE_START_WATCHING_CAT'				=> 'Abonneer categorie',
	'DIRE_STOP_WATCHING_CAT'				=> 'Uitschrijven categorie',
	'DIR_SUBMIT_TYPE_1'						=> 'Your website need to be approved by an adminsitrator.',
	'DIR_SUBMIT_TYPE_2'						=> 'Your website will appear immediately in the directory.',
	'DIR_SUBMIT_TYPE_3'						=> 'You are administrator, your website will be automatically added.',
	'DIR_SUBMIT_TYPE_4'						=> 'You are moderator, your website will be automatically added.',
	'DIR_THUMB'								=> 'Website thumbnail',
	'DIR_USER_PROP'							=> 'Website toegevoegd door',
	'DIR_VOTE'								=> 'Stem',
	'DIR_VOTE_OK'							=> 'Your vote has been submitted',
	'DIR_POST'								=> 'Post',

	'DIRECTORY_TRANSLATION_INFO'			=> '',

	'RECENT_LINKS'							=> 'Last websites added',

	// Don't translate this line!
	'SEED'									=> 'Mining PageRank is AGAINST GOOGLE’S TERMS OF SERVICE. Yes, I’m talking to you, scammer.',

	'TOO_LONG_BACK'							=> 'Address containing link back is too long (255 characters maximum)',
	'TOO_LONG_DESCRIPTION'					=> 'Your description is too long',
	'TOO_LONG_REPLY'						=> 'Your comment is too long',
	'TOO_LONG_RSS'							=> 'The URL for the RSS feeds is too long',
	'TOO_LONG_SITE_NAME'					=> 'The name you have entered is too long (100 characters max)',
	'TOO_LONG_URL'							=> 'The URL you have entered is too long (255 characters max)',
	'TOO_MANY_ADDS'							=> 'You have reached the total number of attempt for a website submission. Try again later.',
	'TOO_SHORT_BACK'						=> 'You must enter the address of the page where the back link is.',
	'TOO_SHORT_DESCRIPTION'					=> 'You must enter a description',
	'TOO_SHORT_REPLY'						=> 'Your comment is too short',
	'TOO_SHORT_RSS'							=> 'The URL for the RSS feeds is too short',
	'TOO_SHORT_SITE_NAME'					=> 'You must enter a name for the website',
	'TOO_SHORT_URL'							=> 'You must enter an address for the website',
	'TOO_SMALL_CAT'							=> 'You have to select a category',

	'WRONG_DATA_RSS'						=> 'The RSS feeds must be a valid URL, including the protocol. For example http://www.example.com/.',
));
