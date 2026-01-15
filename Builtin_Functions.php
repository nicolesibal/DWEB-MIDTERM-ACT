<?php
$school = "Holy Angel University";
$name = "Nicole Margareth Sibal";
$pet = " Chorpi and Oscar ";
$newPet = ltrim($pet);
$newPett = rtrim($pet);
$trimPet= trim($pet);
$course = "Cybersecurity";
$book = "Little Women";
$makeup = "Lip balm";
$color= array("Pink", "Yellow", "Brown");
$fabric = array("Lace", "Linen", "Cotton");
$clothes = array("lace tank","midi skirt","bootcut jeans","leather jacket");
$information = array(
    "name" => "Nicole Margareth Sibal",
    "address" => "Luisita, San Miguel, Tarlac City",
    "gender" => "Female"
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='styles.css'>
    <title>Built-in Functions</title>
</head>
<body>
    <table>
  <tr>
    <th>Changing the Case of Character</th>
  </tr>
  <tr>
    <td>Lowercase</td>
    <td><?= strtolower($school) ?></td>
  </tr>
  <tr>
    <td>Uppercase</td>
    <td><?= strtoupper($school) ?></td>
  </tr>
  <tr>
    <td>Capitalize</td>
    <td><?= ucwords($school) ?></td>
  </tr>

</table>
<table>
    <tr>
        <th>Counting Characters and Words</th>
    </tr>
    <tr>
        <td>Number of Characters</td>
        <td><?= strlen($name) ?></td>
  </tr>
  <tr>
        <td>Number of Words</td>
        <td><?= str_word_count($name) ?></td>
  </tr>
</table>
<table>
    <tr>
        <th>Removing and Replacing Characters</th>
    </tr>
    <tr>
        <td>Remove whitespaces from left</td>
        <td><?= $newPet = ltrim($pet) ?></td>
  </tr>
  <tr>
        <td>Remove whitespaces from right</td>
        <td><?= $newPett = rtrim($pet) ?></td>
  </tr>
  <tr>
        <td>Remove whitespaces from left and right</td>
        <td><?= $trimPet= trim($pet) ?></td>
  </tr>
  <tr>
        <td>String replace</td>
        <td><?= str_replace('Cybersecurity', 'Law', $course) ?></td>
  </tr>
  <tr>
        <td>String ireplace</td>
        <td><?= str_ireplace('LITTLE WOMEN', 'Metamorphosis', $book) ?></td>
  </tr>
  <tr>
        <td>String repeat</td>
        <td><?= str_repeat($makeup, 2) ?></td>
  </tr>
</table>
<table>
    <tr>
        <th>Removing and Replacing Characters</th>
    </tr>
    <tr>
        <td>Round</td>
        <td><?= round(9876.54321) ?></td>
  </tr>
  <tr>
        <td>Round to two decimal places</td>
        <td><?= round(9876.54321, 2) ?></td>
  </tr>
  <tr>
        <td>Round-up</td>
        <td><?= ceil(1.99) ?></td>
  </tr>
  <tr>
        <td>Round-down</td>
        <td><?= floor(1.99) ?></td>
  </tr>
  <tr>
        <td>Is a number</td>
        <td><?= is_numeric(123) ?></td>
  </tr>
  <tr>
        <td>Random number</td>
        <td><?= mt_rand(0, 10) ?></td>
  </tr>
  <tr>
        <td>Array key exists</td>
        <td><?= array_key_exists(1, $color) ? "Key 1 exists in color" : "Key 1 does not exist in color"; ?></td>
        

  </tr>
  <tr>
        <td>Count array</td>
        <td><?= count($clothes) ?></td>
  </tr>
  <tr>
        <td>Square root</td>
        <td><?= sqrt(64) ?></td>
  </tr>
</table>
    
</body>
</html>