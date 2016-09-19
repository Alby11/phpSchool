<?php

$somefileTmp = $_FILES['userfile']['tmp_name'];
$somefile = $_FILES['userfile']['name'];
$somefile_destname = explode(".", $somefile);
$destDir = "uploaded\\";
$destination = $destDir . $somefile_destname[0] . "_uploaded_" . date('Y-m-d_H-i-s') . "." . $somefile_destname[1];
$tmp = explode('.', $somefile);
$fileext = $tmp[count($tmp) - 1];

if (is_uploaded_file($somefileTmp)) {
    print "<br /><br />File $somefile uploaded...";
    $allowedexts = array("rpm", "gz", "tar", "bz2", "zip", "pdf", "txt");
    if (in_array(strtolower($fileext), $allowedexts)) {
        print "<br /><br />File is trusted.";
        if (move_uploaded_file($somefileTmp, $destination)) {
            print "<br /><br />File $somefile moved to $destination";
            $handle = fopen($destination, "ad");
            if (flock($handle, LOCK_SH)) {
                print "<br />Checking if file $destination is writable...<br />";
                print is_writable($destination);
                print "<br />File $destination seems locked. Trying to append:";
                fwrite($handle, "\nTesting the lock with an append...");
                $lockSeconds = 1;
                print "<br />Maintain the lock for $lockSeconds seconds...";
                ob_end_flush();
                flush();
                sleep($lockSeconds);
                print "<br />Releasing the lock.<br />";
                flock($handle, LOCK_UN);
                print "<br />Reading the contents of directory $destDir:<br />";
                $dirHandls = opendir($destDir);
                if ($dirHandls) {
                    while ($file = readdir($dirHandls)) {
                        $checksum = sha1($file);   
                        print "<a href=$destination> $file - SHA1 checksum is: $checksum<br />";
                    }
                    print readdir($dirHandls) . "<br />";
                    closedir($dirHandls);
                } else {
                    print "<br />$destDir doesn't exist or another error occurred...<br />";
                }
            } else {
                print "<br />File $destination lock failed. Trying to append:";
                fwrite($handle, "\nTesting the lock\n");
            }
            fclose($handle);
        } else {
            print "<br /><br />Some error occurred";
        }
    } else {
        print "<br /><br />File not trusted!";
    }
    print "<br /><br />Reading this script:<br />";
    $thisScriptURL = "http://127.0.0.1/github/phpSchool/files/advancedFileUploadHandling.php";
    print $handle = fopen($thisScriptURL, "r");
    $content = fread($handle);
    fclose($handle);
    print $content;
}
?>