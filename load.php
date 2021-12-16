<?php
    if(isset($_POST['id'])) {
        $id = intval($_POST["id"]);
        $xml = simplexml_load_file('desc.xml');
        echo '<h2>'.$xml->subscription[$id]->name.'</h2>';
        echo $xml->subscription[$id]->description;
    }
?>