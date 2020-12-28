<?php


// for ($i=1; $i < 10; $i++) { 
//    for ($j=1; $j < 10; $j++) { 
//         $result = $i * $j;
//         echo $i . " * " . $j . " = " . $result . "<br>";
//    } 

// }


$start = 300;
$end = $start + $start * 0.2;
$profit = $end - $start;
for ($i=1; $i < 10; $i++) { 
    $array = array(
        
    )
    }
?>
<table>
    <tr>
        <td>Year</td>
        <td>Summ Start</td>
        <td>Summ End</td>
        <td>Profit</td>
    </tr>
    <tr>
        <td>1</td>
        <td><?= $start ?></td>
        <td><?= $end ?></td>
        <td><?= $profit ?></td>
    </tr>

</table>
<?php
die();
//IF ELSE
$sessionId = 0;
?>
<?php if ($sessionId === 1) : ?>
    <div>Вы авторизированы!</div>
<?php else : ?>
    <form action="">
        <input type="text" placeholder="Логин">
        <input type="text" placeholder="Пароль">
        <input type="submit" value="Войти">
    </form>
<?php endif; ?>