<?php
namespace App;

class Pages{
    private $uriArr = [];
    
    public function __construct(){

        $uri = str_replace(DIR, '', $_SERVER['REQUEST_URI']);
        $this->uriArr = explode('/', $uri);
        
        $this->loadPage();
    }    
    function loadPage(){
       
        switch($this->uriArr[0]){
            case '':
            break;
            case "new-account":
                require __DIR__.'/NewAccount.php';
            break;
            case 'list-accounts':
                require __DIR__.'/List.php';
            break;
            case 'add-funds':
                require __DIR__.'/AddFunds.php';
            break;
            case 'defund':
                require __DIR__.'/DeFund.php';
            break;
            default:
                echo '<div style="width:100%; text-align:center; font-size:50px;"><br><br><br><br><br>Request Not Found!<br><span style="color:red">404</span></div>';
        }
    }


}