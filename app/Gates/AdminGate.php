<?php
namespace App\Gates;

class AdminGate{
    public function check_admin($user){
        if($user->email==='admin@software.com'){
            return true;
            
        }else{
            return false;
        }
    }  
}

