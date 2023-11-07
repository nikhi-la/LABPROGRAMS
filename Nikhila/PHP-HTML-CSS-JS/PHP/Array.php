<?php
$fruits=array('Apple','Orange','Grapes');

$count=count($fruits);
echo 'Number of elements ',$count,'<br>';

for($i=0;$i<$count;++$i){
    
    echo $fruits[$i],' ';
}

echo '<br>Using ForEach <br>';
foreach ($fruits as $f){
          echo $f,'<br>';
}

 
?>