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
            <li>
                <a href="/show?id=<?= $post["id"]?>"><?= $post["content"] ?></a>
                <form action="/delete" method="post">
                    <input type="hidden" name="id" value="<?= $post['id'] ?>">
                    <button type="submit">❌</button>
                </form>
            </li>


    <?php } ?>
</ol>
</body>
</html>