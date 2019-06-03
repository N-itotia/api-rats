<!DOCTYPE html>
<html>
    <head>
        <title>API RAT 1</title>
    </head>

    <body>
        <?php
            $archenland_balance = 100 + 200 + 300 + 678;
            $narnia_gmb = 530 + 670 + 3;
            $loneislands_pty = 39 + 49 + 3000 + 98;

            $archenland_debits = "1, 700";
            $narnia_debits = "1299, 3";
            $loneislands_debits = "7568, 37";


            function formatArray( $archenland_balance,$narnia_gmb, $loneislands_pty, $archenland_debits, $narnia_debits,  $loneislands_debits){
                $companies = array(array("company"=>"Archenland Ltd.", "Amounts"=>"100,-1,200,300,-700,678" , "Debits"=>$archenland_debits, "Balance"=>$archenland_balance),
                array("company"=>"Narnia Gmb.", "Amounts"=>"530,-23,670,3,-1299" , "Debits"=>$narnia_debits, "Balance"=>$narnia_gmb),
                array("company"=>"Loneislands Pty", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>$loneislands_debits, "Balance"=>$loneislands_pty));


                if (count($companies) > 0):
                    echo "<table> <thead> <tr> <th>";
                    echo implode('</th><th>', array_keys(current($companies)));
                    echo "</th> </tr> </thead> <tbody>";
                    foreach ($companies as $row): array_map('htmlentities', $row);
                        echo"<tr> <td>";
                        echo implode('</td><td>', $row);
                        echo "</td> </tr>";
                    endforeach;
                        echo "</tbody> </table>";
                 endif;
            }

            formatArray($archenland_balance,$narnia_gmb, $loneislands_pty, $archenland_debits, $narnia_debits,  $loneislands_debits);
        ?>
    </body>
</html> 
