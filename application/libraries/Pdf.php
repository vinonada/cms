<?php if ( ! defined('BASEPATH')) exit('No direct script acesss allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf extends TCPDF{
    function __construct(){
        parent::__construct();
    }
}