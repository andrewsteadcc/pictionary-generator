<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Pictionary Word Generator</title>
  <meta name="description" content="The Steads Pictionary Generator">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <h1 class="alignfull center">Pictionary Word Generator</h1>
  <div id="wordgen-container">
    <form id="wordgen" action="generator.php" method="get">
      <div class="newWord-container">
        <button type="button" value="New Word" id="newword-button" class="newWord-button" onclick="getRandomWord()">
        Generate A New Word
        </button>
      </div>
      <div>
        <div id="gennedword-container">
          <p id="gennedword">Press "Generate A New Word"</p>
        </div>
      </div>
    </form>
  </div>

  <script src="js/scripts.js"></script>
</body>
</html>