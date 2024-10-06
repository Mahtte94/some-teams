<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some teams</title>
    <link rel="shortcut icon" href="#">
</head>

<style>
    * {

        box-sizing: border-box;

    }

    body {

        background-color: #fffcf2;

    }

    h1 {

        font-family: Arial, Helvetica, sans-serif;
        font-size: 40px;
        text-align: center;

    }

    main,
    footer {

        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;

    }

    nav {

        display: flex;
        justify-content: center;
        gap: 40px;
        margin: 0 auto;

    }

    nav a {

        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: #FFFF;
        padding: 10px;
        border-radius: 8px;
        text-decoration: none;
        background-color: #0800a0ee;

    }

    .cards {

        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 300px;
        padding: 10px;
        margin: 10px;
        background-color: #EEEE;

    }

    .cards img {

        width: 100px;
        height: 100px;
        object-fit: contain;
        align-self: center;
        margin-top: 20px;

    }

    .cards h2 {

        font-size: 30px;
        font-family: Arial, Helvetica, sans-serif;
        margin: 20px;
        text-align: center;
        text-decoration: underline;

    }

    .cards p {

        font-size: 17px;
        margin: 5px 0;
        text-align: left;

    }

    .cards a {

        margin-top: 10px;
        padding: 10px 15px;
        background-color: #0800a0ee;
        text-decoration: none;
        text-align: center;
        color: #FFFF;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);

    }

    /* About page */

    .cards2 {

        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 500px;
        padding: 10px;
        margin: 10px;
        text-align: center;
        background-color: #EEEE;

    }

    .cards2 h2 {

        font-size: 30px;
        font-family: Arial, Helvetica, sans-serif;
        margin: 10px;
        text-decoration: underline;

    }

    .cards2 p {

        font-size: 17px;
        margin: 5px 0;
        text-align: left;

    }

    /* Hover */

    nav a:hover {

        background-color: #0d00ffee;

    }

    .cards a:hover {

        background-color: #0d00ffee;
        text-decoration: underline;

    }
</style>

<body>
    <header>
        <h1>Welcome to UEFA Rankings</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
        </nav>
    </header>