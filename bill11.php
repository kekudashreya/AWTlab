<html>
<head>

	<meta charset="utf-8">
<title>Item Bill</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<center><h1>Enter Items</h1></center>
<div class="w3-container w3-half w3-margin-top">
<form action="bill11.php" method="post">
<table>
<tr>
	<th colspan="2">Item Store</th>
</tr>
<tr>
	<td>Enter the item names:</td>
	<td><input type="text" name="item" placeholder="Enter item name,item name" required></td>
</tr>
<tr>
	<td>Enter the item price:</td>
	<td><input type="text" name="price"placeholder="Enter price, price" required></td>
</tr>
<tr>
	<td><input type="submit" name="store" value="Store"></td>
	<td><input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</body>
</html>
<html>
<head>
<meta charset="utf-8">
<title>ITEM BILL</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<center><h1>BILL</h1></center>
<div class="w3-container w3-half w3-margin-top">
<?php
     if($_POST)  
    {   
        $names = $_POST['item']; 
        $price = $_POST['price'];
        $nme = explode(',',$names);
        $x = count($nme);
        $prc = explode(',',$price);

        echo '<body><table>
            <tr>
                <th>Item Name</th>
		<th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    		echo "<tr>";
        	echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
    echo "</table>";
        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }
        echo 'Total : '.$total;
        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest Item is: '.$nme[$ky];
        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest Item is: '.$nme[$key];
}     
?>
<br>
</form>
</body>
</html>
