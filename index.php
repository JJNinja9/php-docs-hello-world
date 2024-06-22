<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href=""> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name:
   Netid:
   Date:
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
    <h1>Results</h1> <br><br>
    <?php
        $object = $_POST['object'];
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $surface_area;
        $data_okay = true;
        $link_to_input = "HW_4_Richards.html";
        
        if (!is_numeric($radius))
        {
            print "Radius must be a number. ";
            print "Please " . "<a href=\"$link_to_input\">click here</a>" . " to try again.<br>";
            $data_okay = false;
        }
        
        if (!is_numeric($height))
        {
            print "Height must be a number. ";
            print "Please " . "<a href=\"$link_to_input\">click here</a>" . " to try again.<br>";
            $data_okay = false;
        }
        
        if (empty($object))
        {
            print "Please select an object. ";
            print "Please " . "<a href=\"$link_to_input\">click here</a>" . " to try again.<br>";
            $data_okay = false;
        }
    
        if($data_okay)
        {  
            if($object=="cone")
            {
               $surface_area= pi() * $radius * $radius + (pi() * $radius * (sqrt($radius * $radius + $height * $height)));
            }
            
            elseif($object=="cylinder")
            {
                $surface_area= (2 * pi() * $radius * $height) + (2 * pi() * $radius * $radius);
            }
            
            else{
                $surface_area= (2 * pi() * $radius * $radius * $height) + (2 * pi() * $radius * $height);        
            }
            
            print "The surface area of a $object with radius $radius and height $height is ".number_format($surface_area, 2);

        }
    
    ?>
    
    
</body>
</html>