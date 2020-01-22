<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php require_once('app_data/Model.php'); ?>
<?php require_once('app_data/Controller.php'); ?>


<?php 
if(isset($_POST['btn1']))
{
	
	$rModel = new registerModel();
	$rModel->name = $_POST['txtName'];
	$rModel->email = $_POST['txtEmail'];
	$rModel->gender = $_POST['rdo'];
	$rModel->dob = $_POST['dropDate']."/".$_POST['dropMonth']."/".$_POST['dropYear'];
	if($_FILES['fuImage']['error'] > 0)
	{
		echo "Pelase Select File.";
	}
	else
	{
		$img = "img/".$_FILES['fuImage']['name'];
		move_uploaded_file($_FILES['fuImage']['tmp_name'],$img);
		$rModel->img = $img;
	}
	
	$rController = new registerController();
	$val = $rController->registerInsert($rModel);
	if($val > 0)
	{
		echo "Successfully Store Your data.";
	}
	else
	{
		echo "SomeThing Wrong.";
	}
	
	
}


?>

<body>
<form action="Index.php" method="post" enctype="multipart/form-data">

<table width="600" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" colspan="2" align="center" valign="middle">Registration</td>
  </tr>
  <tr>
    <td width="150" height="40" align="center" valign="middle">Name</td>
    <td width="450" align="center" valign="middle"><input type="text" name="txtName" id="txtName" /></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">Email</td>
    <td align="center" valign="middle"><input type="text" name="txtEmail" id="txtEmail" /></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">Gender</td>
    <td align="center" valign="middle"><label>
      <input name="rdo" type="radio" id="rdo1" value="Male" checked="checked" />
      Male
      <input type="radio" name="rdo" id="rdo2" value="Female" />
      Female</label></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">Dob</td>
    <td align="center" valign="middle"><select name="dropDate" id="dropDate">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
      <select name="dropMonth" id="dropMonth">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
            </select>
      <select name="dropYear" id="dropYear">
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
            </select></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">Image</td>
    <td align="center" valign="middle"><input type="file" name="fuImage" id="fuImage" /></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle"><input type="submit" name="btn1" id="btn1" value="Register Now" /></td>
  </tr>
</table>

<br>
<br>
<br>
<table border="1">
  <tr>
    <th>Userid</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>img</th>
    <th>rdate</th>
  </tr>
  <?php
   $rModel = new registerModel();
   $rModel->userid=0;
  $rCon = new registerController();
  $resultData = $rCon->registerSelectController($rModel);
  foreach($resultData as $row)
  {

  
  
  ?>
  <tr>
    <td><?php echo $row["userid"]; ?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["gender"];?></td>
    <td><?php echo $row["dob"];?></td>
    <td><img src='<?php echo $row["img"];?>' alt=""></td>
    <td><?php echo $row["rdate"];?></td>
  </tr>
  <?php 
  }
  ?>
</table>
</form>
</body>
</html>
