<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 0; $i < 20; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 20; $j++) { ?>
                    <td style="background-color:#ff00<?php printf("%X%X%X%X", $i, $i,$j,$j) ?>"> </td>
                    
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>