<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EngineController extends Controller
{
    public function index()
    {   
        $engine = 5;
        for ($i=1; $i <= $engine; $i++) { 
            echo "<h3>Engine :  $i</h3>";
            echo "<h4>เปลี่ยนตะขอบน</h4>";
            $this->hook_up();
            echo "<h4>เปลี่ยนตะขอล่าง</h4>";
            $this->hook_lower();
            echo "-----------------------------<br>";
        }
        
    }

    private function hook_up()
    {
        $max_hook = 5;
        $sum_hook = 0;        
        while (true) {
            $rand = $this->ramdon_number();
            if ($rand==5) {
                $sum_hook+=1;
                echo "เปลี่ยนตะขอบน","<br>";
            }else{
                echo "-","<br>";
            }

            if($sum_hook==$max_hook){
                break;
            }
        } 
    }

    private function hook_lower()
    {
        $max_hook = 10;
        $sum_hook = 0;        
        while (true) {
            $rand = $this->ramdon_number();
            if ($rand==7) {
                $sum_hook+=1;
                echo "เปลี่ยนตะขอล่าง","<br>";
            }else{
                echo "-","<br>";
            }

            if($sum_hook==$max_hook){
                break;
            }
        } 
    }

    private function ramdon_number()
    {
        return rand(1,10);
    }
}
