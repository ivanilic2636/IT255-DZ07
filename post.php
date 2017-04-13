<!DOCTYPE html>
<html>
<body>
<?php
$type = $_POST['type'];
$a = $_POST['a'];
$b = $_POST['b'];
if($type == "json"){
header("Content-type: application/json");
$test_array = array ('rezultat' => ($a/$b),);
echo json_encode($test_array);
}
else {
header("Content-type: text/xml");
$test_array = array ((pow ($a ,$b )) => 'rezultat',);
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test_array, array ($xml, 'addChild'));
print $xml->asXML();
}
?>

</body>
</html>