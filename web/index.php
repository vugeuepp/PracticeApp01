<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

?>

  <form action="result.php" method="get">
    <label><input type="radio" name="color" value="blue"> Taste of Love</label>
    <label><input type="radio" name="color" value="fuchsia"> TWICE Coaster LANE1</label>
    <label><input type="radio" name="color" value="aqua"> PAGE TWO</label>
    <label><input type="radio" name="color" value="maroon"> Years of 'YES'</label>
    <label><input type="radio" name="color" value="gray"> EYES WIDE OPEN</label>
    <label><input type="radio" name="color" value="navy"> SIGNAL</label>
    <button>Send</button>
    <a href="reset.php">[reset]</a>
  </form>

<?php

include('../app/_parts/_footer.php');