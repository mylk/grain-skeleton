<html>
<body>
    <h3>Results:</h3>

    <?php foreach ($persons as $person): ?>
        <?=$person->first_name?> <?=$person->last_name?>: <a href="tel:<?=$person->telephone?>"><?=$person->telephone?></a><br />
    <?php endforeach ?>
</body>
</html>