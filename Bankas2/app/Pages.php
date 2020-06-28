<?php
namespace App;

class Pages{
    private $uriArr = [];
    
    public function __construct(){

        $uri = str_replace(DIR, '', $_SERVER['REQUEST_URI']);
        $uriParams = explode('?', $uri);
        $this->uriArr = explode('/', $uriParams[0]);
    
        $this->loadPage();
    }    
    function loadPage(){
       
        switch($this->uriArr[0]){
            case '':
            break;
            case "new-account":
                require '/opt/lampp/htdocs/BIT_PHP/ND/Bankas2/public/NewAccount.php';
            break;
            case 'list-accounts':
                require '/opt/lampp/htdocs/BIT_PHP/ND/Bankas2/public/List.php';
            break;
            case 'add-funds':
                require '/opt/lampp/htdocs/BIT_PHP/ND/Bankas2/public/AddFunds.php';
            break;
            case 'defund':
                require '/opt/lampp/htdocs/BIT_PHP/ND/Bankas2/public/DeFund.php';
            break;
            default:
                echo '<div style="width:100%; text-align:center; font-size:50px;"><br><br><br><br><br>Request Not Found!<br><span style="color:red">404</span></div>';
        }
    }


}