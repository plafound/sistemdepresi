<?php 
class Tanggal extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('tgl_indo');
    }

    function index(){
        echo shortdate_indo('2017-09-5');
        echo "<br/>";
        echo date_indo('2017-09-5');
        echo "<br/>";
        echo mediumdate_indo('2017-09-5');
        echo "<br/>";
        echo longdate_indo('2017-09-5');
    }
}
?>