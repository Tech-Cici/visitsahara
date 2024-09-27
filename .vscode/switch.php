<!DOCTYPE html>
<html>
    <head><tittle></tittle></head>
    <body>
        <label for="Fnum">Enter 1st no</label>
        <input type="number" id="Fnum">
        <label for="Snum">Enter 2nd no</label>
        <input type="number" id="Snum">

        <button id="operation">OPERATION</button>

        <?php
        $_num1 = $_POST['Fnum'];
        $_num2 = $_POST['Snum'];

        switch(operation){
            case '1':
                return  $_num1 +$_num2;
                break;

                case '2':
                    return $_num1 - $_num2;
                    break;

                    case '3':
                        return $_num1 * $_num2;
                        break;

                        default:
                        echo 'choose the correct operator';

        }
        ?>
  
    </body>
   
</html>