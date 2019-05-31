<h1>102366 BBIT 3A</h1>
<?php
$shop = array( array("company"=>"archeNland Limited", "Amounts"=>"100,-1200,300,-700,678" , "Debits"=>1700, "Balance"=>1278),
               array("company"=>"Narnia Gmb", "Amounts"=>"530,-23,670,3,-1299" , "Debits"=>"1299,3", "Balance"=>1203),
               array("company"=>"Loneislands Pty", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>"37,7568", "Balance"=>3186) 
             ); 
?>

<?php if (count($shop) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($shop))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>