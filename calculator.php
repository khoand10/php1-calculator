<?php
    function calculator($a, $b, $pheptinh) {
        switch ($pheptinh) {
            case '+':
                return $a + $b;
                break;
            case '-':
                return $a - $b;
                break;
            case '*':
                return $a * $b;
                break;
            case '/':
                return $a / $b;
                break;
            default:
                return 0;
                break;
        }
    }

    echo '<br>';
    echo calculator(5, 8,'+');
    echo '<br>';
    echo calculator(5, 8,'-');
    echo '<br>';
    echo calculator(5, 8,'*');
    echo '<br>';
    echo calculator(5, 8,'/');
?>