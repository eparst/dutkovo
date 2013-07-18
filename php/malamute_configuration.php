<?php
class JConfig {
  var $offline = '0';
	var $editor = 'tinymce';
	var $list_limit = '20';
	var $helpurl = '';
	var $debug = '0';
	var $debug_lang = '0';
	var $sef = '1';
	var $sef_rewrite = '1';
	var $sef_suffix = '1';
	var $feed_limit = '10';
	var $feed_email = 'author';
	var $secret = 'pjvBbyf[eq';
	var $gzip = '0';
	var $error_reporting = '-1';
	var $xmlrpc_server = '0';
#	var $log_path = '/home/www/malamute.mobi/logs';
#	var $tmp_path = '/home/www/malamute.mobi/cache';
	var $live_site = '';
	var $force_ssl = '0';
	var $offset = '3';
	var $caching = '0';
	var $cachetime = '15';
	var $cache_handler = 'file';
	var $memcache_settings = array();
	var $ftp_enable = '0';
	var $ftp_host = '127.0.0.1';
	var $ftp_port = '21';
	var $ftp_user = '';
	var $ftp_pass = '';
	var $ftp_root = '';
	var $dbtype = 'mysql';
#	var $host = 'localhost:3306';
#	var $user = 'jeparst';
#	var $db = 'malamute';
	var $dbprefix = 'jos_';
	var $mailer = 'mail';
	var $mailfrom = 'eparst0@gmail.com';
	var $fromname = 'Аляскинский маламут';
	var $sendmail = '/usr/sbin/sendmail';
	var $smtpauth = '0';
	var $smtpsecure = 'none';
	var $smtpport = '25';
	var $smtpuser = '';
	var $smtppass = '';
	var $smtphost = 'localhost';
	var $MetaAuthor = '0';
	var $MetaTitle = '1';
	var $lifetime = '35';
	var $session_handler = 'database';
#	var $password = 'cnfhsqvf2pjafr';
	var $sitename = 'Аляскинский маламут';
	var $MetaDesc = 'Аляскинский маламут';
	var $MetaKeys = 'Аляскинский маламут';
	var $offline_message = 'Сайт сейчас закрыт на техническое обслуживание. Пожалуйста зайдите позже.';
	public function __construct() {
$this->host = getenv("OPENSHIFT_MYSQL_DB_HOST").":".getenv("OPENSHIFT_MYSQL_DB_PORT");
$this->user = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$this->password = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$this->db = getenv("OPENSHIFT_APP_NAME");
/*$this->log_path = getenv("OPENSHIFT_LOG_DIR");
$this->tmp_path = getenv("OPENSHIFT_TMP_DIR");*/
}
}
?>
