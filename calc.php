<html>
<head>
    <title>電卓{</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

</head>
<body>



<?php

if(isset($_POST['num1']) && isset($_POST['num2'])){

    if(is_numeric($_POST['num1']) && is_numeric($_POST['num2'])){

        switch ($_POST['hug']){
            case"+":
                echo $_POST['num1'] + $_POST['num2'];
                break;
            case"-":
                echo $_POST['num1'] - $_POST['num2'];
                break;
            case"*":
                echo $_POST['num1'] * $_POST['num2'];
                break;
            case"/":
                if ($_POST['num2'] == 0) {
                    echo '0では割れません';
                } else{
                    echo $_POST['num1'] / $_POST['num2'];
                }
                break;
            default:
                echo '???';
                break;
        }
    }
}
?>

<form method="POST" action="calc.php">

    <label>
        <input type='text' name='num1'>
    </label>

    <label>
        <select name="hug" size="1">

            <option>選択</option>
            <option value='+'> +</option>
            <option value='-'> -</option>
            <option value='*'> ×</option>
            <option value='/'> ÷</option>


        </select>
    </label>

    <label>
        <input type='text' name='num2' >
    </label>
    = ?
    <br/>

    <input type = 'submit' value = '計算'>

</form>



</body>
</html>

