<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
require_once "lumen/bootstrap/app.php";


use Illuminate\Database\Eloquent\Model as eloquent;



class Test extends eloquent
{
    
    protected $table='sim';
    
    
    
    function index()
    {
        
        
        
        $this->table='simso';
        
        
        
        $items = $this->paginate(10);
        
        print_r($items);
        
        
        
    }
    
}

$test1= new Test();

$test1->index();










