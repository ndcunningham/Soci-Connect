<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Content/inbox.css"/>
    </head>
<body>

<?php
libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>  
<document> 
   <user>John Doe</user> 
   <email>john@example.com</email> 
</document>"; 

$xml = simplexml_load_string($myXMLData);
$xml=simplexml_load_file("../xml/message.xml");

?>
    
    <div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Message</th>
      <th>Sender</th>
      <th>Date</th>
    </tr>
      <?php
if ($xml === false) {
     echo "Failed loading XML: ";
     foreach(libxml_get_errors() as $error) {
         echo "<br>", $error->message;
     }
} else {
     foreach ($xml->message as $item){
        echo "<tr><td>".$item->body . "</td><td>" . $item->sender . "</td><td>". $item->date ."</td></tr>";
     }
}
?>
  </table>
</div>
    
    
  

</body>
</html>