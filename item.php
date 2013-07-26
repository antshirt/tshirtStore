<?php 
/*
 
 Test data
 Rev 1.0
 
*/


if($_GET['sku']=="130701"){ ?>
{"item":{"name":"Agression","sku":"130701",
"price":299,
"description":"100% cotton. Color white and gray shades. Eco friendly material.",
"imgTag":"agression",
"inStock": 5
}}
<?php } else if($_GET['sku']=="130702"){ ?>
{"item":{"name":"Dark forces","sku":"130702",
"price":299,
"description":"100% cotton. Another type mystical shades but very cool & eco friendly material for all you hipsters!.",
"imgTag":"Dark forces",
"inStock": 2
}}
<?php } else {
	echo '{"result":"error finding SKU!"}';
}
exit;
?>