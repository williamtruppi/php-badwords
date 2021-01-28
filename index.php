<?php

  $badword = $_GET["badword"];

  $story = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam nesciunt magnam, explicabo assumenda eos distinctio voluptatem facere consectetur repudiandae corrupti quidem quaerat tempore quos excepturi? Reiciendis ab minus voluptates quia?";

  $newStory = str_replace("Lorem", $badword, $story);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <p> <?php echo $newStory ?> </p>

</body>
</html>