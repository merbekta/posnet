<?php
	error_reporting(E_ALL ^ (E_WARNING | E_NOTICE));//Warninglerin ya da Noticelerin gosterilmesini engeller.
    /*
     * posnet_oos_config.php
     *
     */

    /**
     * @package posnet oos
     */

    //Configuration parameters
    define('MID', '6706598320');
    define('TID', '67246761');
    define('POSNETID', '12037');
    define('ENCKEY', '10,10,10,10,10,10,10,10');
    
    //Posnet Sistemi ile ilgili parametreler
    
    //OOS/TDS sisteminin web adresi
    define('OOS_TDS_SERVICE_URL', 'http://setmpos.ykb.com/3DSWebService/YKBPaymentService');
    //Posnet XML Servisinin web adresi
    define('XML_SERVICE_URL', 'http://setmpos.ykb.com/PosnetWebService/XML');
	
	define('LOCALHOST','http://localhost:8081/Web%20Test/kk_provizyon.php');//localhost port bilgisi degistirilmis ise, :80 degerini guncelleyiniz.
        
    define('USEMCRYPTLIBRARY', true);
?>