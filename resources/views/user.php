<head>

    <title>Utilisateurs</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<header>
    <div>
        <span>
            <a href="/users" style="color: white; margin-right: 10px">Return</a>
        </span>
        <span>
            WEBSTART
        </span>
    </div>
    <div><form><input name="_method" value="delete">Delete</input></form></div>
</header>

<section>
    <h1> USER</h1>
    <div>
        <span>Lastname:</span><span><?= $user[0]->last_name ?></span>
    </div>
    <div>
        <span>Firstname:</span><span><?= $user[0]->first_name ?></span>
    </div>
    <div>
        <span>Email:</span><span><?= $user[0]->email ?></span>
    </div>
</section>
<footer>
    <h2> JSON STRING</h2>
    <pre>
            <?php var_dump($user); ?>
    </pre>
</footer>
