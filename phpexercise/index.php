<?php 

?>
<!DOCTYPE html>
<html>
<head>
<title>PHP Form Excerise</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>


<form action="select.php" method='post'>

<?php    
$str = file_get_contents('data.json');
$json = json_decode($str, true);

//  Scan through outer loop
foreach ($json as $innerArray => $name) {
    echo $innerArray;
    $i = str_replace(" ", "_", $innerArray);
    echo "<select name='$i'>";
    //  Check type
    if (is_array($name)){
    //  Scan through inner loop
        foreach ($name as $value) {
            if(is_array( $value)){
                foreach ($value as $key=>$item){} 
                //for some reason the array is nested farther.
            }
            echo "<option>$item</option>";
        }
    }
    echo "</select>      \n\n\n\n\n";
}
?>
<input type="submit" name="submit" value="submt"/>
</form>

</body>
</html>