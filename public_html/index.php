<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='robots' content='noindex,nofollow,noarchive' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap'>
  <link rel='stylesheet' href='styles/global-styles.css'>
  <title>Snack Overflow</title>

  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 95vh;
      flex-direction: column;
    }

    nav {
      display: grid;
      gap: 10px;
      grid-template-columns: auto auto;
    }

    nav button {
      width: 120px;
      height: 120px;
      background-color: #6B6B6B;
      border: none;
      border-radius: 9%;
      color: #fff;
      cursor: pointer;
    }

    nav button:hover,
    nav button:focus {
      background-color: #2e2e2e;
    }

    nav button:focus {
      border: 2px solid #Fff;
    }

    nav button img {
      width: 55px;
      filter: invert(11%);
    }

    nav button label {
      display: block;
    }
  </style>
</head>

<body>
  <header style='text-align: center;'>
    <h1 style='font-family: Pacifico, cursive;'>Snack Overflow</h1>
  </header>
  <main>
    <nav>
      <button role='link' onclick='location.href="apps/weather/index.php"'>
        <img src='assets/icons/partly_cloudy_day_24dp_FILL0_wght400_GRAD0_opsz24.svg' aria-label='icon showing partly cloudy sky.' />
        <label>Weather</label>
      </button>
      <button role='link' onclick='location.href="apps/characters/index.php"'>
        <img src='assets/icons/swords_24dp_FILL0_wght400_GRAD0_opsz24.svg' aria-label='icon showing swords.' />
        <label>Characters</label>
      </button>
    </nav>
  </main>
</body>

</html>