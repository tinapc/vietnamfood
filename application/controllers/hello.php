<?php
/**
 * Created by PhpStorm.
 * User: HungNguyenDuc
 * Date: 10/16/14
 * Time: 7:55 AM
 */

class Hello extends CI_Controller
{
    public $name;
    public function __construct(){
        parent::__construct();
        //$this->name = $name;

        $this->load->library('auth/icon_auth');
    }

    public function index(){
    	$this->load->library('encrypt');

        $msg = 'admin';
        $key = 'hungnguyen12345';
        $decode = 'mdHpdTMTRZJp+8PQcTAi5H7bMnPz0JgiJ7HjaK3blLFP2XxRTziqgHbcch2bFzqv3wjy/3vD6biwGOUwfKOu1A==';
        $code = $this->encrypt->decode($decode, $key);
        echo $code;
    }

    public function filetotext(){
        //header('Content-Type:charset=utf-8');
        $file = SOURES_PATH. 'sources/mypdf.pdf';
        
        // Include Composer autoloader if not already done.
        include 'vendor/autoload.php';
         
        // Parse pdf file and build necessary objects.
        $parser = new \Smalot\PdfParser\Parser();
        $pdf    = $parser->parseFile($file);
         
        $text = $pdf->getText();
        echo $text;
    }

    function test_Date(){
        $this->load->helper('date');
        echo unix_to_human(time(), TRUE, 'vi');
    }

    public function test_data() {
        //header('Content-Type: text/csv; charset=utf-8');
        //header('Content-Disposition: attachment; filename=label-data.csv');

        // create a file pointer connected to the output stream
        //$output = fopen('php://output', 'w');
        
        // output the column headings
        //fputcsv($output, array('id', 'name', 'address', 'phone'));

        // fetch the data
        $rows = $this->db->query("SELECT * FROM test WHERE id=3");
        $result = $rows->row();
        strlen($result->address);

    }
}

