<?php 
/**
* 
*/
class Task extends CI_Controller
{
	
	function __construct(){
       parent::__construct();
       $this->load->model('MTask');
	}

	function index(){
        $data['tasks'] = $this->MTask->getAll(); 
		$this->load->view('index', $data);
	}

	function newTask(){
		$this->load->view('new');
	}

	function insert(){
		$task = array(
			'num' => $this->input->post('num'),
			'task' => $this->input->post('task'),
			'time' => $this->input->post('time'),
			'status' => $this->input->post('status')
			 );
		$this->MTask->insert($task);
		redirect(site_url("Task/"),'refresh');
	}

	function getUpdate($id){
        $data['task'] = $this->MTask->get($id);
        $this->load->view('update', $data);
	}

	function update($id){
	    $task = array(
			'task' => $this->input->post('task'),
			'time' => $this->input->post('time'),
			'status' => $this->input->post('status')
			 );
		$this->MTask->update($task, $id);
		redirect(site_url("Task/"),'refresh');	
	}

	function delete($id){
		$this->MTask->delete($id);
		redirect(site_url("Task/"),'refresh');	
	}
}