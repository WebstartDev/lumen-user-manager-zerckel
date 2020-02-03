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
    <div><a href="/users/create" style="color: white; margin-right: 10px">Return</a></div>
</header>

<form method="post" action="/users/">
    <label>
        <input name="lastname" type="text" placeholder="Lastname">
    </label>
    <label>
        <input name="firstname" type="text" placeholder="Lastname">
    </label>
    <label>
        <input name="email" type="text" placeholder="email">
    </label>
    <label>
        <input name="password" type="password" placeholder="password">
    </label>
    <button> create </button>
</form>
