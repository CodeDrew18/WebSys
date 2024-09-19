<?php
// PHP Logic to handle the calculation
$Result = null;
$Error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Operand1']) && isset($_POST['Operand2'])) {
        $Operand1 = $_POST['Operand1'];
        $Operand2 = $_POST['Operand2'];

        if (is_numeric($Operand1) && is_numeric($Operand2)) {
            switch ($_POST['Calculate']) {
                case '+':
                    $Result = $Operand1 + $Operand2;
                    break;
                case '-':
                    $Result = $Operand1 - $Operand2;
                    break;
                case 'x':
                    $Result = $Operand1 * $Operand2;
                    break;
                case '/':
                    if ($Operand2 != 0) {
                        $Result = $Operand1 / $Operand2;
                    } else {
                        $Error = "Division by zero is not allowed.";
                    }
                    break;
                case '%':
                    if($Operand1 != 0 || $Operand2 != 0){
                        $Result = $Operand1 % $Operand2;
                    }else{
                        $Error = "Invalid Input. Please Choose Another Number";
                    }
                    break;
            }
        } else {
            $Error = "Please enter valid numbers.";
        }
    } else {
        $Error = "Both fields are required.";
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="">
    <h1>Simple Calculator</h1>
    <div class="row">
        <div class="col">
            <label for="Operand1" class="label">First Number</label>
            <input id="Operand1" name="Operand1" type="text" class="input" value="<?php echo isset($Operand1)?$Operand1:''; ?>">
        </div>
        <div class="col">
            <label for="Operand2" class="label">Second Number</label>
            <input id="Operand2" name="Operand2" type="text" class="input" value="<?php echo isset($Operand2)?$Operand2:''; ?>">
        </div>
    </div>
    <div class="row">
        <div class="buttons">
            <input class="button" type="submit" name="Calculate" value="+">
            <input class="button" type="submit" name="Calculate" value="-">
            <input class="button" type="submit" name="Calculate" value="x">
            <input class="button" type="submit" name="Calculate" value="/">
            <input class="button" type="submit" name="Calculate" value="%">
        </div>
    </div>
</form>

<?php if(isset($Result) && is_numeric($Result)){ ?>
<div class="row">
    <div class="col text-center">
        <label for="Result" class="label">Result</label>
        <input id="Result" name="Result" type="text" class="input" value="<?php echo $Result; ?>" readonly>
    </div>
</div>
<?php } ?>

<?php if(isset($Error)){ ?>
<div class="row">
    <div class="col">
        <div class="alert">Error: <?php echo $Error; ?></div>
    </div>
</div>
<?php } ?>

</body>
</html>


