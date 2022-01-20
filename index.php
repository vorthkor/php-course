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

            $taxRate=0.0825;

            function tax_calc($amount,$tax){
                $calculate_tax = $amount*$tax;
                $amount = round($amount+$calculate_tax,2);
                return $amount;
            }

            foreach($products as $key => $value){
                $costWithTax = tax_calc($value,$taxRate);
                echo "<p>The ".$key." costs ".$costWithTax." with tax</p>";
            }

            echo "<h2>Items you can afford</h2>";

            foreach($products as $key => $value){
                $costWithTax = tax_calc($value,$taxRate);
                if($costWithTax <= $credit){
                    echo "<p> ".$key." </p>";
                }
            }

            //$amount=800;
            //$addedTax=$amount*$taxRate; // amount = 800, tax = .0825
            //echo $addedTax;

            
            //echo "<br>";

            //echo tax_calc(750,0.223);
            //----------------------------------------------------

            //Next Steps:

            //Learn how to use a content management system (like WordPress or Drupal).
            //Learn MySQL to add a database to this.
            //Try using a live server (rather than a local one).

        ?>
    </body>
</html>