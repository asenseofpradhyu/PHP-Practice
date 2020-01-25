<?php require_once('dbConnection.php'); ?>
<?php require_once('Model.php'); ?>

<?php

class registerController extends dbConnection
{
	
	public function registerInsert(registerModel $rModel)
	{
		// $this->mycon();
		// echo $rModel->email;
	 	// $val = mysqli_query($this->mycon(),"Insert into register values(NULL,'".$rModel->name."','".$rModel->email."','".$rModel->gender."','".$rModel->dob."','".$rModel->img."',curdate())");
		// mysqli_close($this->mycon());
		// return $val;
		echo "Test";
	}

	 public function registerSelectController(registerModel $rModel)
	{
		$con =$this->mycon();
		$id = $rModel->userid;
		if($id > 0)
		{
			$query = "Select * from register Where userid= $id";
		}
		else
		{
			$query = "Select * from register";
		}
		$data = mysqli_query($con,$query);
		while ($row = mysqli_fetch_array($data)) {
			$result[] = $row;
		}
		mysqli_close($con);
		return $result;
	}

}






?>