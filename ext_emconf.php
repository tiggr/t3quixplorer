<?php

########################################################################
# Extension Manager/Repository config file for ext "t3quixplorer".
#
# Auto generated 23-11-2011 09:23
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Typo3 Quixplorer',
	'description' => 'This extension introduces Quixplorer! A backend module that makes you capable of exploring the files and folders of your entire webserver. Browse directories. View and edit ascii files. Create, copy, move, delete, archive files and directories. Download and upload files. Change permissions on files and folders.',
	'category' => 'module',
	'shy' => 0,
	'version' => '1.7.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Mads Brunn',
	'author_email' => 'madsbrunn@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '3.0.0-0.0.0',
			'typo3' => '3.6.4-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:103:{s:13:"changelog.txt";s:4:"7a5c";s:21:"ext_conf_template.txt";s:4:"fcaa";s:12:"ext_icon.gif";s:4:"eccb";s:17:"ext_localconf.php";s:4:"184d";s:14:"ext_tables.php";s:4:"279b";s:16:"locallang_db.xml";s:4:"41c3";s:25:"dev/defined_constants.txt";s:4:"9a97";s:17:"dev/fulljslint.js";s:4:"8ffa";s:13:"dev/links.txt";s:4:"79cf";s:27:"dev/php-syntax-check.tar.gz";s:4:"ba0c";s:14:"doc/manual.sxw";s:4:"041b";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"35af";s:14:"mod1/geshi.php";s:4:"c845";s:14:"mod1/index.php";s:4:"9203";s:18:"mod1/locallang.xml";s:4:"de0f";s:22:"mod1/locallang_mod.xml";s:4:"1340";s:19:"mod1/moduleicon.gif";s:4:"eccb";s:21:"mod1/parsechecker.php";s:4:"44f0";s:20:"mod1/pmk_textarea.js";s:4:"ca88";s:29:"mod1/t3quixplorer_archive.php";s:4:"d07a";s:27:"mod1/t3quixplorer_chmod.php";s:4:"9c96";s:30:"mod1/t3quixplorer_copymove.php";s:4:"878f";s:28:"mod1/t3quixplorer_delete.php";s:4:"0c48";s:25:"mod1/t3quixplorer_div.php";s:4:"5f5d";s:30:"mod1/t3quixplorer_download.php";s:4:"381f";s:26:"mod1/t3quixplorer_edit.php";s:4:"57b1";s:29:"mod1/t3quixplorer_extract.php";s:4:"b109";s:29:"mod1/t3quixplorer_listdir.php";s:4:"64c4";s:28:"mod1/t3quixplorer_mkitem.php";s:4:"bf95";s:28:"mod1/t3quixplorer_rename.php";s:4:"c319";s:28:"mod1/t3quixplorer_search.php";s:4:"1cc9";s:28:"mod1/t3quixplorer_upload.php";s:4:"9864";s:29:"mod1/t3quixplorer_zipfile.php";s:4:"56ca";s:19:"mod1/_img/Thumbs.db";s:4:"e92f";s:15:"mod1/_img/_.gif";s:4:"4bd9";s:21:"mod1/_img/__clear.gif";s:4:"22d7";s:20:"mod1/_img/__copy.gif";s:4:"6e0b";s:19:"mod1/_img/__cut.gif";s:4:"5c4b";s:21:"mod1/_img/__paste.gif";s:4:"3a91";s:20:"mod1/_img/_admin.gif";s:4:"2cbc";s:22:"mod1/_img/_archive.gif";s:4:"9360";s:24:"mod1/_img/_arrowdown.gif";s:4:"ddbe";s:22:"mod1/_img/_arrowup.gif";s:4:"ff8c";s:19:"mod1/_img/_copy.gif";s:4:"f2ba";s:20:"mod1/_img/_copy_.gif";s:4:"6f78";s:21:"mod1/_img/_delete.gif";s:4:"c173";s:22:"mod1/_img/_delete_.gif";s:4:"0c43";s:23:"mod1/_img/_download.gif";s:4:"eccb";s:24:"mod1/_img/_download_.gif";s:4:"4368";s:19:"mod1/_img/_edit.gif";s:4:"4ac4";s:20:"mod1/_img/_edit2.gif";s:4:"54f8";s:20:"mod1/_img/_edit_.gif";s:4:"152b";s:22:"mod1/_img/_extract.gif";s:4:"9417";s:19:"mod1/_img/_home.gif";s:4:"b1ab";s:19:"mod1/_img/_info.gif";s:4:"325e";s:21:"mod1/_img/_logout.gif";s:4:"fd8c";s:19:"mod1/_img/_move.gif";s:4:"3d13";s:20:"mod1/_img/_move_.gif";s:4:"702b";s:25:"mod1/_img/_nodownload.gif";s:4:"57cb";s:22:"mod1/_img/_noedit2.gif";s:4:"b30d";s:24:"mod1/_img/_noextract.gif";s:4:"dcd4";s:22:"mod1/_img/_refresh.gif";s:4:"137e";s:21:"mod1/_img/_rename.gif";s:4:"62a0";s:21:"mod1/_img/_search.gif";s:4:"22c8";s:17:"mod1/_img/_up.gif";s:4:"a1ba";s:21:"mod1/_img/_upload.gif";s:4:"21e8";s:22:"mod1/_img/_upload_.gif";s:4:"f899";s:17:"mod1/_img/cpp.gif";s:4:"c0e8";s:21:"mod1/_img/default.gif";s:4:"2dc5";s:17:"mod1/_img/exe.gif";s:4:"7edf";s:19:"mod1/_img/flash.gif";s:4:"1589";s:20:"mod1/_img/folder.gif";s:4:"8c9c";s:15:"mod1/_img/h.gif";s:4:"7bf9";s:18:"mod1/_img/html.gif";s:4:"c47b";s:19:"mod1/_img/image.gif";s:4:"4ac2";s:18:"mod1/_img/java.gif";s:4:"6f65";s:16:"mod1/_img/js.gif";s:4:"d1a4";s:18:"mod1/_img/midi.gif";s:4:"3bf9";s:17:"mod1/_img/mp3.gif";s:4:"3ae6";s:17:"mod1/_img/pdf.gif";s:4:"9e51";s:17:"mod1/_img/php.gif";s:4:"d4e9";s:16:"mod1/_img/pl.gif";s:4:"c9c5";s:18:"mod1/_img/real.gif";s:4:"f409";s:19:"mod1/_img/sound.gif";s:4:"9c91";s:20:"mod1/_img/spread.gif";s:4:"3fbe";s:17:"mod1/_img/src.gif";s:4:"c9dc";s:17:"mod1/_img/tar.gif";s:4:"206f";s:17:"mod1/_img/tgz.gif";s:4:"9360";s:17:"mod1/_img/txt.gif";s:4:"8338";s:19:"mod1/_img/video.gif";s:4:"395a";s:18:"mod1/_img/word.gif";s:4:"7473";s:17:"mod1/_img/zip.gif";s:4:"5a33";s:21:"mod1/geshi/apache.php";s:4:"306a";s:18:"mod1/geshi/css.php";s:4:"5e13";s:26:"mod1/geshi/html4strict.php";s:4:"b504";s:25:"mod1/geshi/javascript.php";s:4:"788b";s:19:"mod1/geshi/perl.php";s:4:"8b65";s:24:"mod1/geshi/php-brief.php";s:4:"2f4c";s:18:"mod1/geshi/php.php";s:4:"0b86";s:21:"mod1/geshi/smarty.php";s:4:"a833";s:18:"mod1/geshi/sql.php";s:4:"28cd";s:18:"mod1/geshi/xml.php";s:4:"ff6a";}',
);

?>