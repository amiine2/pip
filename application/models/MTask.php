<?php 
/**
* 
*/
class MTask extends CI_Model
{

	function __construct(){
		parent::__construct();
	}

	function delete($id){
       $sql = "delete from tasks where id = " . $id;
       $this->db->query($sql);
	}

    function update($task, $id){
		$sql = "update tasks set task = '".$task['task']."',time = '".$task['time']."',status = '".$task['status']."' where id = " . $id;
		$this->db->query($sql);
	}

	function get($id){
		$sql = "select * from tasks where id = " . $id;
		$q = $this->db->query($sql);
		if($q->num_rows()>0){
           $data = $q->row();
           $q->free_result();
           return $data;
		}else{
			return false;
		}
	}

	function insert($task){
		$task2 = array();
        $task2['num'] = $this->db->escape($task['num']);
        $task2['task'] = $this->db->escape($task['task']);
        $task2['time'] = $this->db->escape($task['time']);
        $task2['status'] = $this->db->escape($task['status']);
		$sql = "insert into tasks (num, task, time, status) values (".$task2['num'].",".$task2['task'].",".$task2['time'].",".$task2['status'].")";
		$result = $this->db->query($sql);
	}

	function getAll(){
		$data = array();
		$sql = "select * from tasks";
		$q = $this->db->query($sql);
		if($q->num_rows()>0){
           foreach ($q->result() as $row) {
           	  $data[] = $row;
           }
           $q->free_result();
           return $data;
		}else{
			return false;
		}
	}
	
}