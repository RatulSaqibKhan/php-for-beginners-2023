<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Variable</title>
</head>
<body>
  
  <h1>
    <?php
        $greeting = "Hello";
        $greetingFor = "Everyone";
        // use concatination operator .
        // echo $greetins . ', '. $greetingFor;
        
        // use variable inside string
        // echo "$greeting, $greetingFor";
    ?>
    <?php // Alternative of echo ?>
    <?= "$greeting, $greetingFor" ?>
  </h1>

</body>
</html>