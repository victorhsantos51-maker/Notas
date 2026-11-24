<?php
$linhas = file("notas.txt", FILE_IGNORE_NEW_LINES);
?>

<table border="1">
    <tr>
        <th>Aluno</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Media</th>
        <th>Resultado</th>
    </tr>
    <?php

    foreach ($linhas as $linha) {
        $partes = explode("|", $linha);
        $media = ($partes[1] + $partes[2]) / 2;
        if ($media >= 6.75) {
            $resultado = "Aprovado";
            $cor = '#0000ff';
        } else {
            $resultado = "Reprovado";
            $cor = '#ff0000';
        }

        ?>
        <tr>
            <td><?= $partes[0] ?></td>
            <td><?= $partes[1] ?></td>
            <td><?= $partes[2] ?></td>
            <td style="color: <?=$cor;?>;"><?= $media ?></td>
            <td style="color: <?= $cor;?>;"><?= $resultado ?></td>
        </tr>
    <?php } ?>