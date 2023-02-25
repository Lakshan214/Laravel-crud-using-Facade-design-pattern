<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use domain\facades\Todofacades;

use Illuminate\Console\View\Components\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    
        protected $task;
      
    
    
        public function __construct()
        {
            $this-> task =new Todo();
           
        }
   public function index(){
    // $task=Todofacades::all();
    $response['task']=Todofacades::all();
    return View('pages.index')->with($response);
   }

   public function save(Request $request){
     
    Todofacades::save($request->all());
    return redirect()->back();

   }

   public function delete($task_id){

   Todofacades::delete($task_id);
    return redirect()->back()->with ('message',' Added Sucessfully!!');

   }

   public function update($task_id){

    Todofacades::update($task_id);
    return redirect()->back();

   }
}
