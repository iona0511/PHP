<!-- 九九乘法表 -->


<table border="1">
    <?php for ($i = 1; $i < 10; $i++) { ?>
        <tr>
            <?php for ($j = 1; $j < 10; $j++) { ?>
                <td>
                    <?= $i * $j ?>
                </td>
                </td> <? } ?>
        </tr>
    <?php } ?>
<table>


<table border="1">
    <?php for ($i = 1; $i < 10; $i++) { ?>
        <tr>
            <?php for ($j = 1; $j < 10; $j++) { ?>
                <td><?= sprintf("%s*%s=%s",$i,$j,$i*$j) ?>
                </td>
                </td> <? } ?>
        </tr>
    <?php } ?>
<table>