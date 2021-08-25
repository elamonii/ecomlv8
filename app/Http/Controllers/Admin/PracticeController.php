<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function practiceMethod($id,$name,$phone){
        echo "Id: ".$id." Name: ".$name." phone".$phone;
    }
    public function practiceMethod2(){
        echo "<a href='".route('controller-check-2')."'>hello</a>";
    }
    public function supplierMethodHome($index,$role){
        $data = [1,2,3,4,5,6];
        $information = [
                        ['name'=>'korim1','role'=>4,'section'=>1],
                        ['name'=>'korim2','role'=>4,'section'=>1],
                        ['name'=>'korim3','role'=>4,'section'=>1]
                       ];
        return view('supplier_method_name',compact('index','role','data','information'));
    }
    public function supplierMethodproduct(){
        echo "supplierMethodproduct";
    }
    public function supplierMethodabout(){
        echo "supplierMethodabout";
    }
    public function notfound() 
    { 
        return view('errors.404'); 
    }

}
