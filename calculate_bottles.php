 <?php 
if(isset($_POST['submit'])){
    $bname=filter_input(INPUT_POST, 'bname', FILTER_SANITIZE_SPECIAL_CHARS);
    $weight=filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_SPECIAL_CHARS);
    $age=filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    // The calc goes from pounds apparently
    switch($age){
        case 0:
                $amount=$weight*150;
                break;
        case 1:
                $amount=$weight*120;
                break;
        case 2:
                $amount=$weight*95;
                break;
    }
    echo "<h3>Baby $bname should have $amount ml per day OR ".($amount/6)." ml per feed (Assuming they feed every 4 hours)";

}

?>
<form action="" method="POST">

<table>
<tr><td>Name:</td><td><input type="text" name="bname" id="bname" value="" /></td></tr>
<tr><td>Age:</td><td><select id="age" name="age">
                    <option value="0">0-3 Months Old</option>
                    <option value="1">3-6 Months Old</option>
                    <option value="2">6-12 Months Old</option>
                    </select></td></tr>

<tr><td>Weight (KG):</td><td><input type="text" name="weight" id="weight" value="" /></td></tr>
<tr><td></td><td><input type="submit" name="submit" id="submit" value="Submit" /></td></tr>
