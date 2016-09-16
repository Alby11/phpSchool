<?php

$somefileTmp = $_FILES['userfile']['tmp_name'];
$somefile = $_FILES['userfile']['name'];
$somefile_destname = explode(".", $somefile);
$destination = "uploaded\\" . $somefile_destname[0] . "_uploaded_" . date('Y-m-d_H-i-s') . "." . $somefile_destname[1];
$tmp = explode('.', $somefile);
$fileext = $tmp[count($tmp) - 1];

if (is_uploaded_file($somefileTmp)) {
    print "<br /><br />File $somefile uploaded...";
    $allowedexts = array("rpm", "gz", "tar", "bz2", "zip", "pdf");
    if (in_array(strtolower($fileext), $allowedexts)) {
        print "<br /><br />File is trusted.";
        if (move_uploaded_file($somefileTmp, $destination)) {
            print "<br /><br />File $somefile moved to $destination";
        } else {
            print "<br /><br />Some error occurred";
        }
    } else {
        print "<br /><br />File not trusted!";
    }
}
?>