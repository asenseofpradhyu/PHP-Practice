<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php require_once('app_data/Model.php'); ?>
<?php require_once('app_data/Controller.php'); ?>


<?php 

// Initially Empty
$name='';
$email='';
$gender='';
$date='';


if(isset($_POST['btn1']))
{
	
	$rModel = new registerModel();
	$rModel->name = $_POST['txtName'];
	$rModel->email = $_POST['txtEmail'];
	$rModel->gender = $_POST['rdo'];
	$rModel->dob = $_POST['dropDate']."/".$_POST['dropMonth']."/".$_POST['dropYear'];
	if($_FILES['fuImage']['error'] > 0)
	{
		echo "Please Select File.";
	}
	else
	{
		$img = "img/".$_FILES['fuImage']['name'];
		move_uploaded_file($_FILES['fuImage']['tmp_name'],$img);
		$rModel->img = $img;
	}
	
	$rController = new registerController();
  $val = $rController->registerInsert($rModel);
  // var_dump($rModel);
	if($val > 0)
	{
		echo "Successfully Store Your data.";
	}
	else
	{
		echo "SomeThing Wrong.";
	}
	
	
}


if(isset($_REQUEST['edit'])){
 
  $rModel = new registerModel();
  $rModel->userid = $_REQUEST['edit'];

  $rCon = new registerController();
  $resultData = $rCon->registerSelectController($rModel);
  foreach($resultData as $row)
  {

    $name = $row['name'];
    $email = $row['email'];
    $gender = $row['gender'];
  }

}

if(isset($_POST['update'])){
 
  $rModel = new registerModel();
  $rModel->userid = $_POST['update_id'];
  $rModel->name = $_POST['txtName'];
	$rModel->email = $_POST['txtEmail'];
	$rModel->gender = $_POST['rdo'];
	$rModel->dob = $_POST['dropDate']."/".$_POST['dropMonth']."/".$_POST['dropYear'];
	if($_FILES['fuImage']['error'] > 0)
	{
		echo "Please Select File.";
	}
	else
	{
		$img = "img/".$_FILES['fuImage']['name'];
		move_uploaded_file($_FILES['fuImage']['tmp_name'],$img);
		$rModel->img = $img;
  }
  
  $rCon = new registerController();
  $resultData = $rCon->registerUpdate($rModel);
  
  if($resultData > 0)
	{
		echo "Successfully Update Your data.";
	}
	else
	{
		echo "SomeThing Wrong.";
	}
}

if(isset($_REQUEST['delete'])){

  $rModel = new registerModel();
  $rModel->userid = $_REQUEST['delete'];

  $rCon = new registerController();
  $resultData = $rCon->registerDelete($rModel);
  if($resultData > 0)
	{
    echo "Successfully Delete Your data.";
    echo "<script>window.location.href='http://localhost/Practice/MVC-ThireTier/Index.php';</script>";
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
    <td width="450" align="center" valign="middle"><input type="text" name="txtName" id="txtName" value="<?php if($name != null) {echo $name;} else {echo "";}?>"/></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">Email</td>
    <td align="center" valign="middle"><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $email;?>"/></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">Gender</td>
    <td align="center" valign="middle"><label>
      <input name="rdo" type="radio" id="rdo1" value="Male" <?php if($gender == "Male") { echo 'checked="checked"'; }?> />
      Male
      <input type="radio" name="rdo" id="rdo2" value="Female" <?php if($gender == "Female") { echo 'checked="checked"'; }?> />
      Female</label></td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">Dob</td>
    <td align="center" valign="middle">
      <select name="dropDate" id="dropDate">
      <option value="1">1</option>
      <option value="2" selected>2</option>
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
    <td align="center" valign="middle">
    <input type="hidden" name="update_id" value="<?php echo $row["userid"]; ?>" />
      <?php 
      if(isset($_REQUEST['edit'])){
        echo '<input type="submit" name="update" value="Update Now" />';
      } else {
        echo '<input type="submit" name="btn1" id="btn1" value="Register Now" />';
      }
      ?>
    </td>
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
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
   $rModel = new registerModel();
  //  $rModel->userid=0;
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
    <td><img src='<?php echo $row["img"];?>' style="width:100px; height:100px;"></td>
    <td><?php echo $row["rdate"];?></td>
    <td><a href="index.php?edit=<?php echo $row['userid'];?>">Edit</a></td>
    <td><a href="index.php?delete=<?php echo $row['userid'];?>">Delete</a></td>
  </tr>

  <?php 
  }
  ?>
</table>
</form>
</body>
</html>
