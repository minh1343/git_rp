<?php 


function getData($mode = "r", $filename = "./data.txt"){
    if(is_readable($filename)){
        $mode = "r";
        if(!$fp = fopen($filename, $mode)){
            echo "Canot open file $filename";
            exit;
        }
        $content = fread($fp, filesize($filename));
        if( $content === FALSE){
            echo "Canot read to file ($filename)";
            exit;
        }

        // echo "Success, read to file ($filename)";

        $datas = json_decode($content, true);

        fclose($fp);

        return $datas;
    } else {
        echo "The file $filename is not readable";
    }
}


function updateData($newData , $mode = "w", $filename = "./data.txt"){
    if(is_writable($filename)){
        if(!$fp = fopen($filename, $mode)){
            echo "Cannot open file ($filename)";
            exit;
        }

        if (fwrite($fp, json_encode($newData)) === FALSE) {
            echo "Cannot write to file ($filename)";
            exit;
        }

        // echo "Success, wrote  to file ($filename)";

        fclose($fp);

        return true;
    } else {
        echo "The file $filename is not writable";
    }
}

// var_dump(getData());

?>