<!DOCTYPE html>
<html>
  <head>
    
    <!-- Metadata for this site -->
    <meta charset="utf-8">
    <meta name="description" content="Salary Program, with a PHP file">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon for this site -->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav_index/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <title>Salary Program, with a PHP file</title>
    
  </head>
  <body>
    
    <link rel="stylesheet" href="./css/style.css">
   <script src="./js/script.js"></script>

    <?php echo "<h1>Salary Program, with a PHP file</h1>" ?>

    <?php echo "<h3>Please enter your employment information:</h3>" ?>
    
    <!-- Text fields for user input, collects data -->
  <form action="./welcome.php" method="post" target="result">
      <label for="Hours">Numbers of hours worked: </label>
      <input type="text" id="Hours" placeholder="Hours" name="Hours"><br><br>

    <label for="Hours">Hourly Rate: $ </label>
      <input type="text" id="Rate" placeholder="Rate" name="Rate"><br><br>
   
      <input type="submit" value="Pay">
			<br><br>	
    </form>
    
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>
    
  </body>
</html>