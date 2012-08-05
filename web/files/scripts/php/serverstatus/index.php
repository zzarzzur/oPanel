<?php
include("/usr/local/oPanel/scripts/php/sessioncheck/index.php");
}
function GetServerStatus($site, $port)
{
$status = array(0, 1);
$fp = @fsockopen($site, $port, $errno, $errstr, 2);
if (!$fp) {
    return $status[0];
} else
  { return $status[1];}
}


?>
<!DOCTYPE html>
<html>
        <head>
                <title>
                        Server Status'
                </title>
        </head>
        <body>
                <table>
                        <?php
                                $i=0;
                                foreach($_oPanelService as $key=>$val) {
                                        echo "<tr>";
                                        echo "<td id='servicename-" . $i . "'>" . $key . "</td>";
                                        if($val == 0) echo "<td><b style='color:red;'><u id='servicestatus-" . $i . "'>Offline</u></b></td>";
                                        if($val == 1) echo "<td><b style='color:green;' id='servicestatus-" . $i . "'>Online</b></td>";
                                        //      echo $key . "--" . $val . "<br>";
                                        echo "</tr>";
                                        $i++;
                                } echo "</table>";
                                        echo "<data hidden='hidden' id='servicecount'>" . $i . "</data>";
                         ?>
        </body>
</html>

