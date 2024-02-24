<?php
    $name = $_POST['name'];
    $mtype = $_POST['mtype'];
    $filename = $_POST['filename'];
    $caption = $_POST['caption'];
    $tried = ($_POST['tried'] == 'yes');

    if ($tried) 
    {
        $valid = (!empty($name) && !empty($mtype) && !empty($filename));
        if (!$valid) 
        {
            ?>
            <p>
                The Name, media type, and filename are required fields.
                Please Fill Them Out to Continue.
            </p>
            <?php
        }
    }

    if ($tried && $valid) 
    {
        echo '<p>The item has been created.</p>';
    }

    
    function media_select($type) 
    {
        global $mtype;
        if ($mtype == $type) 
        {
            echo "Selected";
        }
    }
    ?>