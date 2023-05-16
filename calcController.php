<?php require_once "./Calculator.php";

// If the submit button has been pressed
if (isset($_POST['submit'])) {

    // Check number values
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $calculator = new \App\Calculator;

        // Calculate total
        $total=0;
        if ($_POST['operation'] == 'Mas') {
            $total = $calculator->add($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'Menos') {
            $total = $calculator->subtract($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'Multiplicar') {
            $total = $calculator->multiply($_POST['number1'], $_POST['number2']);
        } else if ($_POST['operation'] == 'Dividido') {
            $total = $calculator->divide($_POST['number1'], $_POST['number2']);
        }

        // 
        echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} igual a: {$total}</h1>";

    } else {

        // Print error message to the browser
        echo 'Numeric values are required';
    }
}
