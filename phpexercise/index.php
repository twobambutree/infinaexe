<?php    
$str = file_get_contents('data.json');
$json = json_decode($str, true);
$label = [];
$op01 = "";
$op02 = "";
$op03 = "";

foreach ($json as $key => $value) {
    array_push($label, $key);
    foreach ($value as $key02 => $val02) {
        //var_dump($val02['value']);
        //var_dump($val02['text']);
        if ($key == "Airspace") {
            $op01 .= "<option value=".$val02['value'].">".$val02['text']."</option>";  
        } elseif ($key == "Control Surface") {
            $op02 .= "<option value=".$val02['value'].">".$val02['text']."</option>"; 
        } elseif ($key == "Deviation Types"){
            $op03 .= "<option value=".$val02['value'].">".$val02['text']."</option>"; 
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Form Excerise</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragra<?php echo "hi"; ?></p>

<form action="select.php" method='post'>
<label><?php echo $label[0];?>:</label>
<select name = "<?php echo str_replace(' ', '_', $label[0]);?>">
    <?php echo $op01; ?>
</select>
<label><?php echo $label[1]?>:</label>
<select name = "<?php echo str_replace(' ', '_', $label[1]);?>">
    <?php echo $op02; ?>
</select>
<label><?php echo $label[2]?>:</label>
<select name = "<?php echo str_replace(' ', '_', $label[2]);?>">
    <?php echo $op03; ?>
</select>

<input type="submit" name="submit" value="submt"/>
</form>

</body>
</html>