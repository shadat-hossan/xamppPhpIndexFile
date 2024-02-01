<?php
$directory = $_SERVER['DOCUMENT_ROOT']; // Root directory path
$files = glob($directory . '/*');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thin of XAMPP</title>
    <link rel="shortcut icon" href="./favicon.ico" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&display=swap"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Butcherman&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&display=swap");

      /* font-family: "Butcherman", system-ui; */

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
      }
      html {
        box-sizing: border-box;
      }
      body {
        width: 100%;
        height: 100vh;
        overflow: hidden;
        background-image: url("https://raw.githubusercontent.com/shadat-hossan/Shadt-hossan/master/images/1%20(1).webp");
        background-color: rgb(0, 0, 0);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        position: relative;
        color: #ffffff;
      }
      body::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.699);
        z-index: -1;
      }
      .row {
        margin: 0 2rem;
      }
      #xamppNav {
        width: 100%;
        height: 12vh;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      #xamppNav h2 {
        font-size: 1.6rem;
      }

      .dataAndSearch {
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .search-box {
        background-color: #353535;
        padding: 8px;
        display: flex;
        align-items: center;
        border-radius: 20px;
        gap: 5px;
        cursor: pointer;
        transition: all 0.3s;
      }

      .search-box input {
        border: none;
        outline: none;
        background: none;
        color: #cccccc;
        width: 0px;
        transition: all 0.3s;
      }

      .dataAndSearch a {
        text-decoration: none;
        font-size: 3rem;
        color: #c4c4c4;
      }

      #xamppHeaders {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 10px;
      }

      #xamppHeader {
        width: 35rem;
        height: 20vh;
        background-color: #21424d;
        box-shadow: 0 0 10px #2e5968;
        text-align: center;
        padding: 12px 30px 25px 30px;
        border-radius: 10px;
        clip-path: polygon(
          6% 0,
          94% 0,
          100% 18%,
          100% 81%,
          93% 100%,
          8% 116%,
          0 80%,
          0 27%
        );
        border: 4px solid #7979793d;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        
      }

      #xamppHeader h1 {
        color: #c4c4c4;
      }

      #xamppHeader p {
        font-size: 13px;
        color: #bebebe;
      }

      .defFont {
        font-family: "Butcherman", system-ui;
      }

      /* ============= */

      #xamppMain {
        width: 100%;
        height: 68svh;
        overflow: auto;
        /* background-color: #2d2d2d; */
        padding: 20px;
      }

      .file-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .file-item {
        background-color: #2d2d2d;
        text-align: center;
        padding: 10px;
        border: 2px solid #21424d;
        border-radius: 10px;
        transition: background-color 0.3s ease;
        box-shadow: inset black 0px 0px 20px 0px;
      }

      .file-item a {
        text-decoration: none;
        color: #4eff4e;
      }

      .file-item:hover {
        background-color: #1d1d1d;
        color: #66ff66;
      }

      .file-icon {
        font-size: 36px;
        margin-bottom: 10px;
      }

      .file-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
      }

      .file-description {
        font-size: 14px;
        color: #bbb;
      }
    </style>
  </head>
  <body>
    <nav id="xamppNav">
      <div class="row" id="xamppNav">
        <h2>XAMPP</h2>
        <div class="dataAndSearch">
          <div class="search-box">
            🔎
            <input type="search" placeholder="search File..." />
          </div>
          <a href="/phpmyadmin/" target="_blank">🛢</a>
        </div>
      </div>
    </nav>
    <header id="xamppHeaders">
      <div class="row" id="xamppHeader">
        <h1>Welcome to Md. Shahdat</h1>
        <p>
          It appears you're asking about sorting titles, but the context is not
          entirely clear. Sorting titles could refer to organizing a list of
          titles alphabetically or in a specific order.
        </p>
      </div>
    </header>

    <main id="xamppMain">
      <div class="row">

<ul class="file-grid">
    <?php
    // Loop through each file
    foreach ($files as $file) {
        // Extract just the file name
        $url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . basename($file);
        $fileName = basename($file);
    ?>
         <li class="file-item">
            <span class="file-icon">🗃️</span>
            <div class="file-title">
                <a href="<?= $url ?>" target="_blank"><?= $fileName ?></a>
            </div>
            <div class="file-description">
                My File Shadat
            </div>
        </li>
    <?php
    }
    ?>
</ul>
</div>
    </main>


 <script>
      const searchBox = document.querySelector(".search-box");
      const searchBoxInput = document.querySelector(".search-box input");

      searchBox.addEventListener("click", () => {
        searchBoxInput.style.width = "100%";
      });
    </script>
</body>
</html>
