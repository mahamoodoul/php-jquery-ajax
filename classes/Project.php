<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;

	public function __construct(){
		$this->db = new Database();
	}

	public function checkUserName($username){
		$query="select * from db_user where name='$username'";
		$getuser=$this->db->select($query);
		if($username ==""){
			echo "<span class='error'>please enter uername </span>";
			exit();
		}elseif($getuser){
			echo "<span class='error'> <b>$username</b> is not available</span>";
			exit();
		}
		else{
			echo "<span class='error'> <b>$username</b> is available</span>";
			exit();
		}
		  
	}
	public function autoComplete($skill){
		$query="SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%' ";
		$getskill=$this->db->select($query);
		$result='';
		$result .='<div class="skill"><ul>';
		if($getskill){
			while($data=$getskill->fetch_assoc()){
				$result .="<li>".$data['skill']."</li>";
			}
		}else{
			$result .='<li> No Resullt Found.</li>';
		}
		$result .='</ul></div>';
		echo $result;

	}
	
}
?>