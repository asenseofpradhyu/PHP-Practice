    <!-- Pattern 1 -->
    <?php 
    echo "Pattern 1 <br>";
    for($row=0; $row<6; $row++){
        for($col=0; $col<6; $col++){
            echo "*"." ";
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 2 -->
    <?php 
    echo "Pattern 2 <br>";
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            echo $row." ";
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 3 -->
    <?php 
    echo "Pattern 3 <br>";
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            echo $col." ";
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 4 -->
    <?php 
    echo "Pattern 4 <br>";
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            echo ($col*$row)." ";
        }
        echo "<br>";
    }
    ?>
    
    <br>

    <!-- Pattern 5 -->
    <?php 
    echo "Pattern 5 <br>";
    for($row=5; $row>0; $row--){
        for($col=5; $col>0; $col--){
            echo ($col*$row)." ";
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 6 -->
    <?php 
    echo "Pattern 6 <br>";
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            if($col <= $row){
                echo "*";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 7 -->
    <?php 
    echo "Pattern 7 <br>";
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            if($col <= $row){
                echo $row." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 8 -->
    <?php 
    echo "Pattern 8 <br>";
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            if($col <= $row){
                echo $col." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 9 -->
    <?php 
    echo "Pattern 9 <br>";
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            if($col <= $row){
                echo ($col*$row)." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 10 -->
    <?php 
    echo "Pattern 10 <br>";
    $k=0;
    for($row=1; $row<6; $row++){
        for($col=1; $col<6; $col++){
            if($col <= $row){
                $k++;
                echo $k." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 11 -->
    <?php 
    echo "Pattern 11 <br>";
    for($row=1; $row<6; $row++){
        for($col=$row; $col>=1; $col--){
            echo $col." ";
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 12 -->
    <?php 
    echo "Pattern 12 <br>";
    for($row=1; $row<=5; $row++){
        for($col=5; $col>=5-$row+1; $col--){ 

                echo $col." ";
            
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 13 -->
    <?php 
    echo "Pattern 13 <br>";
    for($row=6; $row>=1; $row--){
        for($col=$row-1; $col<=5; $col++){
            echo $col." ";
        }
        echo "<br>";
    }
    ?>
    
    <br>

    <!-- Pattern 14 -->
    <?php 
    echo "Pattern 14 <br>";
    for($row=6; $row>=1; $row--){
        for($col=6; $col>=1; $col--){
            if($col < $row){
                echo "*"." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>
    
    <!-- Pattern 15 -->
    <?php 
    echo "Pattern 15 <br>";
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=5; $col++){
            if($col >= $row){
                echo $row." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 16 -->
    <?php 
    echo "Pattern 16 <br>";
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=6-$row; $col++){
                echo $col." ";
        }
        echo "<br>";
    }
    ?>


    <br>

    <!-- Pattern 17 -->
    <?php 
    echo "Pattern 17 <br>";
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=6-$row; $col++){
                echo ($col*$row)." ";
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 18 -->
    <?php 
    echo "Pattern 18 <br>";
    for($row=5; $row>=1; $row--){
        for($col=$row; $col>=1; $col--){
            
                echo $row." ";
            
        }
        echo "<br>";
    }
    ?>
    
    <br>

    <!-- Pattern 19 -->
    <?php 
    echo "Pattern 19 <br>";
    for($row=6; $row>=1; $row--){
        for($col=6; $col>=1; $col--){
            if($col < $row){
                echo $col." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 20 -->
    <?php 
    echo "Pattern 20 <br>";
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=5; $col++){
            if($col >= $row){
                echo $col." ";
            }
        }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 21 -->
    <?php 
    echo "Pattern 21 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=5-$row; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=1; $col<=$row; $col++){
                echo "*"." ";
         }
        echo "<br>";
    }

    ?>

    <br>

    <!-- Pattern 22 -->
    <?php 
    echo "Pattern 22 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=5-$row; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=1; $col<=$row; $col++){
                echo $row." ";
         }
        echo "<br>";
    }

    ?>

    <br>

    <!-- Pattern 23 -->
    <?php 
    echo "Pattern 23 <br>";
    for($row=5; $row>=1; $row--){
        for($space=5; $space>=6-$row; $space--){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=1; $col<=5; $col++){
                if($col>=$row){
                    echo $col." ";
                }
         }
        echo "<br>";
    }
    ?>

    <br>

    <!-- Pattern 24 -->
    <?php 
    echo "Pattern 24 <br>";
    for($row=5; $row>=1; $row--){
        for($space=1; $space<=$row-1; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=5; $col>=$row; $col--){
                echo $col." ";
         }
        echo "<br>";
    }

    ?>

    <br>

    <!-- Pattern 25 -->
    <?php 
    echo "Pattern 25 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=5-$row; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=5; $col>=1; $col--){
                if($col<=$row){
                    echo $col." ";
                }
         }
        echo "<br>";
    }

    ?>

    <br>

    <!-- Pattern 26 -->
    <?php 
    echo "Pattern 26 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=5-$row; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=1; $col<=$row; $col++){
                echo $col." ";
         }
        echo "<br>";
    }

    ?>

    <br>

    <!-- Pattern 27 -->
    <?php 
    echo "Pattern 27 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=$row-1; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=5; $col>=$row; $col--){
                echo "*"." ";  
         }
        echo "<br>";
    }

    ?>

    <br>

    <!-- Pattern 28 -->
    <?php 
    echo "Pattern 28 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=$row-1; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=1; $col<=5; $col++){
                if($col>=$row){
                    echo $col." ";
                }  
         }
        echo "<br>";
    }

    ?>

    <br>

    <!-- Pattern 29 -->
    <?php 
    echo "Pattern 29 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=$row-1; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=1; $col<=$row; $col++){
                    echo $col." ";  
         }
        echo "<br>";
    }

    ?>


    <br>

    <!-- Pattern 33 -->
    <?php 
    echo "Pattern 33 <br>";
    for($row=1; $row<=5; $row++){
        for($space=1; $space<=$row-1; $space++){
            echo "&nbsp;&nbsp;&nbsp;";
        }
            for($col=5; $col>=$row; $col--){
                echo $col." ";  
         }
        echo "<br>";
    }

    ?>