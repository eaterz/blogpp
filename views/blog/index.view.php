<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi ieraksti</title>
</head>
<body>
<h1>Visi bloga ieraksti</h1>

<a href="/create">Izveidot ierakstu</a>

<ol>

    <?php foreach($posts as $post){ ?>
        <a href="/show?id=<?= $post["id"]?>">Visi ieraksti</a>

        <li> <?= $post["content"] ?> </li><br>
    <?php } ?>
</ol>
</body>
</html>