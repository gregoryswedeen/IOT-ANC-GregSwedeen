<?php
// launches the python script that creates the sound files
echo exec('python createWaves.py');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Active Noise Cancelling Sync</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
  <body>
    <h1>Waves Files Created</h1>
    <p><a href="./index.html">Return to Main Page</a></p>
  </body>
</html>

