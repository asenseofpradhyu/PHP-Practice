<?php require_once('dbConnection.php'); ?>
<?php require_once('Model.php'); ?>

<?php

class registerController extends dbConnection
{
	
	public function registerInsert(registerModel $rModel)
	{
		$this->mycon();
	 	$val = mysqli_query($this->mycon(),"Insert into register values(NULL,'".$rModel->name."','".$rModel->email."','".$rModel->gender."','".$rModel->dob."','".$rModel->img."',curdate())");
		mysqli_close($this->mycon());
		return $val;
		
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

	public function registerDelete(registerModel $rModel)
	{
		$this->mycon();
		$id = $rModel->userid;
	 	$val = mysqli_query($this->mycon(),"DELETE FROM register WHERE userid=$id");
		mysqli_close($this->mycon());
		return $val;
		
	}

	public function registerUpdate(registerModel $rModel)
	{
		$this->mycon();
		print_r($rModel);
		$val = mysqli_query($this->mycon(), "UPDATE register SET name='".$rModel->name."',email='".$rModel->email."',gender='".$rModel->gender."',dob='".$rModel->dob."',img='".$rModel->img."',rdate=curdate() WHERE userid= $rModel->userid ");
		echo $val; 
		mysqli_close($this->mycon());
		return $val;
		
	}

}






?>