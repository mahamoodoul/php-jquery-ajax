<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/Database.php');

class Project
{
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function checkUserName($username)
	{
		$query = "select * from db_user where name='$username'";
		$getuser = $this->db->select($query);
		if ($username == "") {
			echo "<span class='error'>please enter uername </span>";
			exit();
		} elseif ($getuser) {
			echo "<span class='error'> <b>$username</b> is not available</span>";
			exit();
		} else {
			echo "<span class='error'> <b>$username</b> is available</span>";
			exit();
		}
	}
	public function autoComplete($skill)
	{
		$query = "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%' ";
		$getskill = $this->db->select($query);
		$result = '';
		$result .= '<div class="skill"><ul>';
		if ($getskill) {
			while ($data = $getskill->fetch_assoc()) {
				$result .= "<li>" . $data['skill'] . "</li>";
			}
		} else {
			$result .= '<li> No Resullt Found.</li>';
		}
		$result .= '</ul></div>';
		echo $result;
	}


	public function autoRefresh($body)
	{
		$query = "insert into tbl_div (body) values ('$body') ";
		$insertbody = $this->db->insert($query);
	}

	public function getDataRefresh()
	{
		$query = "SELECT * FROM tbl_div order by id desc ";
		$getinfo = $this->db->select($query);
		$result = '';
		$result .= '<div class="body"><ul>';
		if ($getinfo) {
			while ($data = $getinfo->fetch_assoc()) {
				$result .= "<li>" . $data['body'] . "</li>";
			}
		} else {
			$result .= '<li> No Resullt Found.</li>';
		}
		$result .= '</ul></div>';
		echo $result;
	}

	public function findLiveData($dataKey)
	{

		// $query = "SELECT * FROM tbl_live_search WHERE username LIKE '%$dataKey%' ";
		$query = "SELECT * FROM tbl_live_search WHERE username LIKE '%$dataKey%' OR name LIKE '%$dataKey%' OR email LIKE '%$dataKey%' ";
		$getdata = $this->db->select($query);
		$result = '';
		$result .= '<table class="tblone"> <tr>
					<th>Username </th>
					<th>Name </th>
					<th>Email </th>
					</tr>';
		if ($getdata) {
			while ($data = $getdata->fetch_assoc()) {
				$result .= '<tr>
								<td>' . $data['username'] . ' </td>
								<td>' . $data['name'] . ' </td>
								<td>' . $data['email'] . ' </td>
						   </tr>';
			}
			$result .= '</table>';
			echo $result;
		} else {
			echo "data not found";
		}


	}
}
