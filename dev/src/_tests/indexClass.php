<?php
    // include 'parentClass.php';
    include 'newClass.php';
    // $object = new NewClass;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $object = new NewClass;
        echo $object;
        // $object2 = new NewClass;

             // Delete or unset objects in OOP.
            //  unset($object);

        // $object->setNewProperty("This is a user called Daniel");
        // echo $object->getProperty();
  
        // $object2->setNewProperty("This is a user called John");
        // echo $object2->getProperty();
   


        





        // echo $object->name();
    ?>
</body>
</html>