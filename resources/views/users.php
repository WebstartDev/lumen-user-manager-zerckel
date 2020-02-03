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
    <div><a href="/users/create" style="color: white; margin-right: 10px">Create User</a></div>
</header>

<section>
    <div class="users main">
        <div> ID </div>
        <div> First Name </div>
        <div> Last Name </div>
        <div> Email </div>
    </div>
<?php foreach ($data as $users) :  ?>

    <div class="users">
        <div><a href="/users/<?= $users->id ?>"> <?= $users->id ?> </a> </div>
        <div> <?= $users->first_name ?> </div>
        <div> <?= $users->last_name ?> </div>
        <div> <?= $users->email ?>  </div>
    </div>

<?php endforeach; ?>
</section>

