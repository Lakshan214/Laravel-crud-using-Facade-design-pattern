<?php

namespace App\Http\Controllers;

use App\Models\Todo;
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
    $task=Todo::all();
    return View('pages.index',compact('task'));
   }

   public function save(Request $request){
     
    $this->task-> create($request->all());
    return redirect()->back();

   }

   public function delete($task_id){

    $task=$this->task->find($task_id);
    $task->delete();
    return redirect()->back()->with ('message',' Added Sucessfully!!');

   }
}
