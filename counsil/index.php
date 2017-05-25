<?php

// Kickstart the framework
$f3=require('lib/base.php');
$f3->set('CASHE', FALSE);

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');



$f3->set('AUTOLOAD', 'autoload/');
$f3->set('UI', 'ui/');

// Load configuration
$f3->config('config.ini');

define("DB_HOST", "localhost");
define("DB_USER", "ss");
define("DB_PWD", "3uKkXmBo");
define("DB_NAME", "ss");

$db=new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=ss',
    'ss',
    '3uKkXmBo'
);
$f3->set('DB', $db );

$auth = require_once 'Auth_v2/Base.php';
$auth->iniConfig('Auth_v2/config.ini');
$auth->config(array("onRoleMismatch" => "/block"));
$auth->connect(DB_HOST, DB_NAME, DB_USER, DB_PWD);
F3::set ("auth",$auth);

$f3->route('GET /conf',
	function($f3) {
		$classes=array(
			'Base'=>
				array(
					'hash',
					'json',
					'session'
				),
			'Cache'=>
				array(
					'apc',
					'memcache',
					'wincache',
					'xcache'
				),
			'DB\SQL'=>
				array(
					'pdo',
					'pdo_dblib',
					'pdo_mssql',
					'pdo_mysql',
					'pdo_odbc',
					'pdo_pgsql',
					'pdo_sqlite',
					'pdo_sqlsrv'
				),
			'DB\Jig'=>
				array('json'),
			'DB\Mongo'=>
				array(
					'json',
					'mongo'
				),
			'Auth'=>
				array('ldap','pdo'),
			'Bcrypt'=>
				array(
					'mcrypt',
					'openssl'
				),
			'Image'=>
				array('gd'),
			'Lexicon'=>
				array('iconv'),
			'SMTP'=>
				array('openssl'),
			'Web'=>
				array('curl','openssl','simplexml'),
			'Web\Geo'=>
				array('geoip','json'),
			'Web\OpenID'=>
				array('json','simplexml'),
			'Web\Pingback'=>
				array('dom','xmlrpc')
		);
		$f3->set('classes',$classes);
		$f3->set('content','welcome.htm');
		echo View::instance()->render('layout.htm');
	}
);

$f3->route('GET /userref',
	function($f3) {
		$f3->set('content','userref.htm');
		echo View::instance()->render('layout.htm');
	});
	
/*
$f3->route('GET /',
	function($f3) {
		$f3->set('BASE','views/index.htm');
		echo View::instance()->render('views/index.htm');
	});
*/






// Admin Start Page

$f3->route('GET|POST /admin/login', 'controllers\Login->show_login_page');

$f3->route('GET /admin/register/@link', 'controllers\Login->show_register_page');

$f3->route('POST /admin/register', 'controllers\Login->register');

$f3->route('GET|POST /admin/admins/delete/@id', 'controllers\AdminsAdmin->delete_admin');

//

$f3->route('GET /', 'controllers\_front->main');

// Home

$f3->route('GET /', 'controllers\Home->show_content');

$f3->route('POST /', 'controllers\Home->send_appeal');

// About

$f3->route('GET /about', 'controllers\About->show_about');

// AboutAdmin info

$f3->route('GET /admin/about/info', 'controllers\AboutAdmin->show_about_info');

$f3->route('POST /admin/about/info', 'controllers\AboutAdmin->post_about_info');

// AboutAdmin missions

$f3->route('GET /admin/about/missions', 'controllers\AboutAdmin->show_about_missions');

$f3->route('GET /admin/about/missions/change/@id', 'controllers\AboutAdmin->about_missions_change');

$f3->route('GET /admin/about/missions/add', 'controllers\AboutAdmin->add_mission');

$f3->route('POST /admin/about/missions/add', 'controllers\AboutAdmin->post_add_mission');

$f3->route('POST /admin/about/missions/change/@id', 'controllers\AboutAdmin->post_about_missions_change');

$f3->route('GET|POST /admin/about/missions/delete/@id', 'controllers\AboutAdmin->delete_mission');

// AboutAdmin Partners

$f3->route('GET /admin/about/partners', 'controllers\AboutAdmin->show_about_partners');

$f3->route('GET /admin/about/partners/change/@id', 'controllers\AboutAdmin->about_partners_change');

$f3->route('GET /admin/about/partners/add', 'controllers\AboutAdmin->add_partner');

$f3->route('POST /admin/about/partners/add', 'controllers\AboutAdmin->post_add_partner');

$f3->route('POST /admin/about/partners/change/@id', 'controllers\AboutAdmin->post_about_partners_change');

$f3->route('GET|POST /admin/about/partners/delete/@id', 'controllers\AboutAdmin->delete_partner');

// Commitees 

$f3->route('GET /admin/commitees/list', 'controllers\CommiteesAdmin->show_commiteeList');

$f3->route('GET /admin/commitees/add', 'controllers\CommiteesAdmin->add_commitee');

$f3->route('POST /admin/commitees/add', 'controllers\CommiteesAdmin->post_add_commitee');

$f3->route('GET /admin/commitees/change/@id', 'controllers\CommiteesAdmin->commitees_change');

$f3->route('POST /admin/commitees/change/@id', 'controllers\CommiteesAdmin->post_commitees_change');

$f3->route('GET|POST /admin/commitees/delete/@id', 'controllers\CommiteesAdmin->delete_commitee');


// Commitees Info

$f3->route('GET /commitees/info/link/@link', 'controllers\CommiteeInfo->show_commiteeinfo');

// CommiteesAdmin Info

$f3->route('GET /admin/commitees/info/link/@link', 'controllers\CommiteeInfoAdmin->show_commiteeInfo');

$f3->route('POST /admin/commitees/info/link/@link/changed/@id', 'controllers\CommiteeInfoAdmin->post_commitees_info_change');

$f3->route('GET /admin/commitees/info/link/@link/changed/@id', 'controllers\CommiteeInfoAdmin->commitees_info_change');

$f3->route('GET /admin/commitees/members/link/@link/add', 'controllers\CommiteeInfoAdmin->add_commitees_members');

$f3->route('POST /admin/commitees/members/link/@link/add', 'controllers\CommiteeInfoAdmin->post_add_commitees_members');

$f3->route('GET /admin/commitees/members/link/@link/change/@id', 'controllers\CommiteeInfoAdmin->change_commitees_members');

$f3->route('POST /admin/commitees/members/link/@link/change/@id', 'controllers\CommiteeInfoAdmin->post_change_commitees_members');

$f3->route('GET|POST /admin/commitees/members/link/@link/delete/@id', 'controllers\CommiteeInfoAdmin->delete_commitees_members');



// Commitees Projects 

$f3->route('GET /commitees/projects/link/@link', 'controllers\CommiteeProject->show_commiteeProject');

$f3->route('GET /commitees/projects/link/@link/@offset', 'controllers\CommiteeProject->show_commiteesproject_offset');

$f3->route('GET /admin/commitees/projects/link/@link', 'controllers\CommiteeProjectAdmin->show_commiteeProject');

$f3->route('GET /admin/commitees/projects/link/@link/add', 'controllers\CommiteeProjectAdmin->add_commitees_project');

$f3->route('POST /admin/commitees/projects/link/@link/add', 'controllers\CommiteeProjectAdmin->post_add_commitees_project');

$f3->route('GET /admin/commitees/projects/link/@link/change/@id', 'controllers\CommiteeProjectAdmin->change_commitees_project');

$f3->route('POST /admin/commitees/projects/link/@link/change/@id', 'controllers\CommiteeProjectAdmin->post_change_commitees_project');

$f3->route('GET|POST /admin/commitees/projects/link/@link/delete/@id', 'controllers\CommiteeProjectAdmin->delete_commitees_project');


// Commitees Blogs

$f3->route('GET /commitees/blogs/link/@link', 'controllers\CommiteeBlog->show_commiteeBlog');

$f3->route('GET /commitees/blogs/link/@link/@offset', 'controllers\CommiteeBlog->show_commiteeBlog_offset');

$f3->route('GET /commitees/blogs/link/@link/detail/@id', 'controllers\CommiteeBlog->show_commiteeBlogNewsDetail');

$f3->route('GET /admin/commitees/blogs/link/@link', 'controllers\CommiteeBlogAdmin->show_commiteeBlog');

$f3->route('GET /admin/commitees/blogs/link/@link/add', 'controllers\CommiteeBlogAdmin->add_commitees_blog');

$f3->route('POST /admin/commitees/blogs/link/@link/add', 'controllers\CommiteeBlogAdmin->post_add_commitees_blog');

$f3->route('GET /admin/commitees/blogs/link/@link/change/@id', 'controllers\CommiteeBlogAdmin->change_commitees_blog');

$f3->route('POST /admin/commitees/blogs/link/@link/change/@id', 'controllers\CommiteeBlogAdmin->post_change_commitees_blog');

$f3->route('GET|POST /admin/commitees/blogs/link/@link/delete/@id', 'controllers\CommiteeBlogAdmin->delete_commitees_blog');


// Contain

$f3->route('GET /contain', 'controllers\Contain->show_contain');

// ContainAdmin Head

$f3->route('GET /admin/contain/head', 'controllers\ContainAdmin->show_contain_head');

$f3->route('GET /admin/contain/head/add', 'controllers\ContainAdmin->add_contain_head');

$f3->route('POST /admin/contain/head/add', 'controllers\ContainAdmin->post_add_contain_head');

$f3->route('GET /admin/contain/head/change/@id', 'controllers\ContainAdmin->change_contain_head');

$f3->route('POST /admin/contain/head/change/@id', 'controllers\ContainAdmin->post_change_contain_head');

$f3->route('GET|POST /admin/contain/head/delete/@id', 'controllers\ContainAdmin->delete_contain_head');

// ContainAdmin Secretary

$f3->route('GET /admin/contain/secretary', 'controllers\ContainAdmin->show_contain_secretary');

$f3->route('GET /admin/contain/secretary/add', 'controllers\ContainAdmin->add_contain_secretary');

$f3->route('POST /admin/contain/secretary/add', 'controllers\ContainAdmin->post_add_contain_secretary');

$f3->route('GET /admin/contain/secretary/change/@id', 'controllers\ContainAdmin->change_contain_secretary');

$f3->route('POST /admin/contain/secretary/change/@id', 'controllers\ContainAdmin->post_change_contain_secretary');

$f3->route('GET|POST /admin/contain/secretary/delete/@id', 'controllers\ContainAdmin->delete_contain_secretary');


// ContainAdmin Members

$f3->route('GET /admin/contain/members', 'controllers\ContainAdmin->show_contain_members');

$f3->route('GET /admin/contain/members/add', 'controllers\ContainAdmin->add_contain_members');

$f3->route('POST /admin/contain/members/add', 'controllers\ContainAdmin->post_add_contain_members');

$f3->route('GET /admin/contain/members/change/@id', 'controllers\ContainAdmin->change_contain_members');

$f3->route('POST /admin/contain/members/change/@id', 'controllers\ContainAdmin->post_change_contain_members');

$f3->route('GET|POST /admin/contain/members/delete/@id', 'controllers\ContainAdmin->delete_contain_members');


// ContainAdmin CommiteeHeads

$f3->route('GET /admin/contain/commitees_heads', 'controllers\ContainAdmin->show_contain_commitees_heads');

$f3->route('GET /admin/contain/commitees_heads/add', 'controllers\ContainAdmin->add_contain_commitees_heads');

$f3->route('POST /admin/contain/commitees_heads/add', 'controllers\ContainAdmin->post_add_contain_commitees_heads');

$f3->route('GET /admin/contain/commitees_heads/change/@id', 'controllers\ContainAdmin->change_contain_commitees_heads');

$f3->route('POST /admin/contain/commitees_heads/change/@id', 'controllers\ContainAdmin->post_change_contain_commitees_heads');

$f3->route('GET|POST /admin/contain/commitees_heads/delete/@id', 'controllers\ContainAdmin->delete_contain_commitees_heads');


// Ombudsman

$f3->route('GET /ombudsman', 'controllers\Ombudsman->show_ombudsman');

// OmbudsmanAdmin Ombudsman

$f3->route('GET /admin/ombudsman/info', 'controllers\OmbudsmanAdmin->show_ombudsman_info');

$f3->route('GET /admin/ombudsman/add', 'controllers\OmbudsmanAdmin->add_ombudsman');

$f3->route('POST /admin/ombudsman/add', 'controllers\OmbudsmanAdmin->post_add_ombudsman');

$f3->route('GET /admin/ombudsman/change/@id', 'controllers\OmbudsmanAdmin->change_ombudsman');

$f3->route('POST /admin/ombudsman/change/@id', 'controllers\OmbudsmanAdmin->post_change_ombudsman');

$f3->route('GET|POST /admin/ombudsman/delete/@id', 'controllers\OmbudsmanAdmin->delete_ombudsman');

// OmbudsmanAdmin Allocution

$f3->route('GET /admin/ombudsman/allocution', 'controllers\OmbudsmanAdmin->show_ombudsman_allocution');

$f3->route('POST /admin/ombudsman/allocution', 'controllers\OmbudsmanAdmin->post_ombudsman_allocution');

// OmbudsmanAdmin Team

$f3->route('GET /admin/ombudsman/team', 'controllers\OmbudsmanAdmin->show_ombudsman_team');

$f3->route('POST /admin/ombudsman/team', 'controllers\OmbudsmanAdmin->delete_ombudsman_team');

$f3->route('GET /admin/ombudsman/team/add', 'controllers\OmbudsmanAdmin->add_ombudsman_team');

$f3->route('POST /admin/ombudsman/team/add', 'controllers\OmbudsmanAdmin->post_add_ombudsman_team');

$f3->route('GET /admin/ombudsman/team/change/@id', 'controllers\OmbudsmanAdmin->change_ombudsman_team');

$f3->route('POST /admin/ombudsman/team/change/@id', 'controllers\OmbudsmanAdmin->post_change_ombudsman_team');

$f3->route('GET|POST /admin/ombudsman/delete/@id', 'controllers\OmbudsmanAdmin->delete_ombudsman');


//Ombudsman Appeals

$f3->route('POST /ombudsman', 'controllers\Ombudsman->send_appeal');

// Locals

$f3->route('GET /locals/link/@link', 'controllers\Locals->show_locals');

$f3->route('GET /admin/locals/members/link/@link', 'controllers\LocalsAdmin->show_locals_members');

$f3->route('GET /locals/blogs/link/@link/detail/@id', 'controllers\Locals->show_LocalsNewsDetail');



// Locals Admin List

$f3->route('GET /admin/locals/list', 'controllers\LocalsAdmin->show_locals_list');

$f3->route('GET /admin/locals/list/add', 'controllers\LocalsAdmin->add_local');

$f3->route('POST /admin/locals/list/add', 'controllers\LocalsAdmin->post_add_local');

$f3->route('GET /admin/locals/list/change/@id', 'controllers\LocalsAdmin->local_change');

$f3->route('POST /admin/locals/list/change/@id', 'controllers\LocalsAdmin->post_local_change');

$f3->route('GET|POST /admin/locals/list/delete/@id', 'controllers\LocalsAdmin->delete_local');


// Locals Admin Members

$f3->route('GET /admin/locals/members/link/@link', 'controllers\LocalsAdmin->show_locals_members');

// Locals Admin Head

$f3->route('GET /admin/locals/members/head/link/@link/add', 'controllers\LocalsAdmin->add_local_head');

$f3->route('POST /admin/locals/members/head/link/@link/add', 'controllers\LocalsAdmin->post_add_local_head');

$f3->route('GET /admin/locals/members/head/link/@link/change/@id', 'controllers\LocalsAdmin->change_local_head');

$f3->route('POST /admin/locals/members/head/link/@link/change/@id', 'controllers\LocalsAdmin->post_change_local_head');

$f3->route('GET|POST /admin/locals/members/head/link/@link/delete/@id', 'controllers\LocalsAdmin->delete_local_head');

// Locals Admin Secretary

$f3->route('GET /admin/locals/members/secretary/link/@link/add', 'controllers\LocalsAdmin->add_local_secretary');

$f3->route('POST /admin/locals/members/secretary/link/@link/add', 'controllers\LocalsAdmin->post_add_local_secretary');

$f3->route('GET /admin/locals/members/secretary/link/@link/change/@id', 'controllers\LocalsAdmin->change_local_secretary');

$f3->route('POST /admin/locals/members/secretary/link/@link/change/@id', 'controllers\LocalsAdmin->post_change_local_secretary');

$f3->route('GET|POST /admin/locals/members/secretary/link/@link/delete/@id', 'controllers\LocalsAdmin->delete_local_secretary');

// Locals Admin Member

$f3->route('GET /admin/locals/members/link/@link/add', 'controllers\LocalsAdmin->add_local_member');

$f3->route('POST /admin/locals/members/link/@link/add', 'controllers\LocalsAdmin->post_add_local_member');

$f3->route('GET /admin/locals/members/link/@link/change/@id', 'controllers\LocalsAdmin->change_local_member');

$f3->route('POST /admin/locals/members/link/@link/change/@id', 'controllers\LocalsAdmin->post_change_local_member');

$f3->route('GET|POST /admin/locals/members/members/link/@link/delete/@id', 'controllers\LocalsAdmin->delete_local_member');


// Locals Admin Blogs

$f3->route('GET /admin/locals/blogs/link/@link', 'controllers\LocalsAdmin->show_locals_blogs');

$f3->route('GET /admin/locals/blogs/link/@link/add', 'controllers\LocalsAdmin->add_local_new');

$f3->route('POST /admin/locals/blogs/link/@link/add', 'controllers\LocalsAdmin->post_add_local_new');

$f3->route('GET /admin/locals/blogs/link/@link/change/@id', 'controllers\LocalsAdmin->change_local_new');

$f3->route('POST /admin/locals/blogs/link/@link/change/@id', 'controllers\LocalsAdmin->post_change_local_new');

$f3->route('GET|POST /admin/locals/blogs/link/@link/delete/@id', 'controllers\LocalsAdmin->delete_local_new');

// Locals Admin Documents

$f3->route('GET /admin/locals/documents/link/@link', 'controllers\LocalsAdmin->show_locals_documents');

$f3->route('GET /admin/locals/documents/link/@link/add', 'controllers\LocalsAdmin->add_local_document');

$f3->route('POST /admin/locals/documents/link/@link/add', 'controllers\LocalsAdmin->post_add_local_document');

$f3->route('GET /admin/locals/documents/link/@link/change/@id', 'controllers\LocalsAdmin->change_local_document');

$f3->route('POST /admin/locals/documents/link/@link/change/@id', 'controllers\LocalsAdmin->post_change_local_document');

$f3->route('GET|POST /admin/locals/documents/link/@link/delete/@id', 'controllers\LocalsAdmin->delete_local_document');


//News

$f3->route('GET /news', 'controllers\News->show_news');

$f3->route('GET /news/@offset', 'controllers\News->show_news_offset');

$f3->route('GET /admin/news', 'controllers\NewsAdmin->show_news');

$f3->route('GET /news_detail/@id', 'controllers\News->show_news_detail');

$f3->route('GET /admin/news/add', 'controllers\NewsAdmin->add_new');

$f3->route('POST /admin/news/add', 'controllers\NewsAdmin->post_add_new');

$f3->route('GET /admin/news/change/@id', 'controllers\NewsAdmin->change_new');

$f3->route('POST /admin/news/change/@id', 'controllers\NewsAdmin->post_change_new');

$f3->route('GET|POST /admin/news/delete/@id', 'controllers\NewsAdmin->delete_new');



// Documents

$f3->route('GET /documents', 'controllers\Documents->show_documents');

$f3->route('GET /documents_category_detail/@id', 'controllers\Documents->show_documents_category_detail');

// Documents Admin

// Categories

$f3->route('GET /admin/documents/categories/list', 'controllers\DocumentsAdmin->show_documents_categories');

$f3->route('GET /admin/documents/categories/change/@id', 'controllers\DocumentsAdmin->documents_category_change');

$f3->route('GET /admin/documents/categories/add', 'controllers\DocumentsAdmin->add_documents_category');

$f3->route('POST /admin/documents/categories/add', 'controllers\DocumentsAdmin->post_add_documents_category');

$f3->route('POST /admin/documents/categories/change/@id', 'controllers\DocumentsAdmin->post_documents_category_change');

$f3->route('GET|POST /admin/documents/categories/delete/@id', 'controllers\DocumentsAdmin->delete_documents_category');

// Documents

$f3->route('GET /admin/documents/list', 'controllers\DocumentsAdmin->show_documents');

$f3->route('GET /admin/documents/change/@id', 'controllers\DocumentsAdmin->document_change');

$f3->route('GET /admin/documents/add', 'controllers\DocumentsAdmin->add_document');

$f3->route('POST /admin/documents/add', 'controllers\DocumentsAdmin->post_add_document');

$f3->route('POST /admin/documents/change/@id', 'controllers\DocumentsAdmin->post_document_change');

$f3->route('GET|POST /admin/documents/delete/@id', 'controllers\DocumentsAdmin->delete_document');



// Organizations

$f3->route('GET /organizations', 'controllers\Organizations->show_organizations');

$f3->route('GET /organizations_detail/@id', 'controllers\Organizations->show_organizations_detail');


// OrganizationsAdmin List

$f3->route('GET /admin/organizations/list', 'controllers\OrganizationsAdmin->show_organizations_list');

$f3->route('GET /admin/organizations/list/add', 'controllers\OrganizationsAdmin->add_organization');

$f3->route('POST /admin/organizations/list/add', 'controllers\OrganizationsAdmin->post_add_organization');

$f3->route('GET /admin/organizations/list/change/@id', 'controllers\OrganizationsAdmin->change_organization');

$f3->route('POST /admin/organizations/list/change/@id', 'controllers\OrganizationsAdmin->post_change_organization');

$f3->route('GET|POST /admin/organizations/list/delete/@id', 'controllers\OrganizationsAdmin->delete_organization');

// OrganizationsAdmin Heads

$f3->route('GET /admin/organizations/heads', 'controllers\OrganizationsAdmin->show_organizations_heads');

$f3->route('GET /admin/organizations/heads/add', 'controllers\OrganizationsAdmin->add_organizations_head');

$f3->route('POST /admin/organizations/heads/add', 'controllers\OrganizationsAdmin->post_add_organizations_head');

$f3->route('GET /admin/organizations/heads/change/@id', 'controllers\OrganizationsAdmin->change_organizations_head');

$f3->route('POST /admin/organizations/heads/change/@id', 'controllers\OrganizationsAdmin->post_change_organizations_head');

$f3->route('GET|POST /admin/organizations/heads/delete/@id', 'controllers\OrganizationsAdmin->delete_organizations_head');

$f3->route('GET /admin/ombudsman/appeals', 'controllers\OmbudsmanAdmin->show_appeals');

$f3->route('POST /admin/ombudsman/appeals', 'controllers\OmbudsmanAdmin->send_answer');

// CouncilAppeals

$f3->route('GET /admin', 'controllers\CouncilAdmin->show_appeals');

$f3->route('POST /admin', 'controllers\CouncilAdmin->send_answer');

// AdminAdmin 

$f3->route('GET /admin/admins', 'controllers\AdminsAdmin->show_admins');
$f3->route('GET /admin/generateNewLink', 'controllers\AdminsAdmin->generateLink');



$f3->run();

	
