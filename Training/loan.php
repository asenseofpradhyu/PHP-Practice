<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loan Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
    <label for="">Loan Amount:
    <input type="text" name="amount" >
    </label>
    
    <label for="">Interest:
    <input type="text" name="interest" >
    </label>

    <label for="">EMI:
    <input type="text" name="emi" >
    </label>

    <input type="submit" value="Submit" name="submit">
    </form>
<br><br>

<?php
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $interest_per_year = $_POST['interest'];
    $user_emi = $_POST['emi'];
    $no = $total_int =0;


    $total = ($amount*$interest_per_year)/100;
    $month_emi = $total/12;
    $month_interest = $interest_per_year/12;

    if($user_emi < $month_emi){
        echo "Please Add more Amount of EMI than ".$user_emi;
    } else {
        $m=$amount;
        while($amount >= $user_emi){
            $monthly_int = (($amount*$interest_per_year)/100)/12;
            $total_int += $monthly_int;
            $monthly_emi_amount = $user_emi - $monthly_int;
            $amount -= $monthly_emi_amount;
            $no++;
            echo "$no -------- $monthly_int -------- $amount"."<br>";
        }
        $mon = (($amount*$interest_per_year)/100)/12;
        
        echo "Loan Amount: ".$m."<br>";
        echo "Interest per Month: ".$month_interest."<br>";
        echo "Interest per Year: ".$interest_per_year."<br>";
        $total_amount=$user_emi*$no;
        echo "Total Amount: ".$total_amount."<br>";
        $total_emi = $total_amount - $m;
        echo "Total Interest: ".$total_emi."<br>";
        echo "Total no of EMI: ".$no."<br>";
        $amount += $mon;
        $amount = $user_emi -$amount."<br>";
        echo "Last Month of EMI: ".$amount."<br>";
    }
}

?>





</body>
</html>