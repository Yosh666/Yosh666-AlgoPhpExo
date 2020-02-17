<?php
$table=9;
echo "TABLE DE ".$table. "<br/>";
for ($i=1; $i<11;$i++){
$result=$table*$i;
echo $table." &times ".$i." = ".$result."<br/>";
}
?>
<?php
$table=7;
$i=1;
echo "TABLE DE ".$table. "<br>";
while ($i<11){
    $result=$table*$i;
    echo $table." &times ".$i." = ".$result."<br/>";
    $i=$i+1;
}
?>