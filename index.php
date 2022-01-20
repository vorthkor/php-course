<!DOCTYPE html>
<html>
    <head>
        <title>PHP Store</title>
    </head>
    <body>
        <?php

        //variables
        $name = "PHP Store";
        $credit = 1000;

        // comments
        
        echo "<h1>Welcome to ".$name."!</h1>";
        echo "<h2>You have ".$credit." in your wallet.</h2>";
-
            //arrays
            $products['Computer']=750;
            $products['Car']=15000;
            $products['iPhone']=1000;
            $products['Toaster']=75;

            foreach($products as $key => $value){
              echo "<p>The ".$key." costs ".$value."</p>";
            }
        ?>
    </body>
</html>