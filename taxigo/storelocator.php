<?php  

include 'dbcon.php';

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node); 


// Select all the rows in the markers table

$query = "SELECT * FROM markers"; 
$result = mysqli_query($con,$query);


header("Content-type: text/xml"); 

// Iterate through the rows, adding XML nodes for each


while ($row = @mysqli_fetch_assoc($result)){  
// ADD TO XML DOCUMENT NODE  
 
    $marker = $dom->createElement("marker");  
    $node->appendChild($marker);   
    $marker->setAttribute("name",$row['name']);
    $marker->setAttribute("address", $row['address']);  
    $marker->setAttribute("lat", $row['lat']);  
    $marker->setAttribute("lng", $row['lng']);  
    
}
echo $dom->saveXML();
?>