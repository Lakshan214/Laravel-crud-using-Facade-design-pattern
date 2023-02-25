<?php
namespace domain\services;
use App\Models\Todo;

class TodoServices{

    protected $task;
      
    
    
    public function __construct()
    {
        $this-> task =new Todo();
       
    }
public function all(){
    return  $this->task->all();

}

public function save( $data){
 
$this->task-> create($data);


}

public function delete($task_id){

$task=$this->task->find($task_id);
$task->delete();


}

public function update($task_id){

$task=Todo::find($task_id);
$task->stuts=1;

$task->update();


}
}

