<?php 
	class dbConnection
	{
		public function mycon()
		{
			$con =mysqli_connect("localhost","root","","mvcdemo");
			return $con;
			
		}
		
	}



?>