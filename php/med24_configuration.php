<?php
class JConfig {
/* Site Settings */
var $offline = '0';
var $offline_message = 'В настоящее время сайт закрыт на техническое обслуживание.<br />Пожалуйста, зайдите позже.';
var $sitename = 'Электронная История Болезни';
var $editor = 'tinymce';
var $list_limit = '20';
var $legacy = '0';
/* Debug Settings */
var $debug = '0';
var $debug_lang = '0';
/* Database Settings */
var $dbtype = 'mysql';
#var $host = 'localhost';
#var $user = 'jeparst';
#var $password = 'cnfhsqvf2pjafr';
#var $db = 'med24';
var $dbprefix = 'jos_';
/* Server Settings */
var $live_site = '';
var $secret = '2of06ojkfCQQq37m';
var $gzip = '0';
var $error_reporting = '-1';
var $helpurl = 'http://med24.ru';
var $xmlrpc_server = '0';
var $ftp_host = '127.0.0.1';
var $ftp_port = '21';
var $ftp_user = '';
var $ftp_pass = '';
var $ftp_root = '';
var $ftp_enable = '0';
var $force_ssl = '0';
/* Locale Settings */
var $offset = '0';
var $offset_user = '0';
/* Mail Settings */
var $mailer = 'mail';
var $mailfrom = 'rus-f1@ya.ru';
var $fromname = 'Электронная История Болезни Online';
var $sendmail = '/usr/sbin/sendmail';
var $smtpauth = '0';
var $smtpsecure = 'none';
var $smtpport = '25';
var $smtpuser = '';
var $smtppass = '';
var $smtphost = 'localhost';
/* Cache Settings */
var $caching = '0';
var $cachetime = '15';
var $cache_handler = 'file';
/* Meta Settings */
var $MetaDesc = 'Электронная История Болезни Online';
var $MetaKeys = 'Электронная История Болезни, Электронная Амбулаторная карта';
var $MetaTitle = '1';
var $MetaAuthor = '1';
/* SEO Settings */
var $sef           = '0';
var $sef_rewrite   = '0';
var $sef_suffix    = '0';
/* Feed Settings */
var $feed_limit   = 10;
var $feed_email   = 'author';
var $log_path = '/home/www/med24.ru/logs';
var $tmp_path = '/home/www/med24.ru/tmp';
/* Session Setting */
var $lifetime = '15';
var $session_handler = 'database';
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
