<?php

if (isset($_POST['Form'])) {
    // import_request_variables("p", "z"); // DEPRECATED IN 5.4
    $formValuesDiff = array($_POST);
    $formValuesEasy = $_REQUEST["Form"];
//    var_dump($formValuesEasy);
    $missingfields = array();
    $required = array("FName" => "First Name", "LName" => "Last Name", "Age" => "Age");

//      FOR DIFFICULT VERSION
//    foreach ($formValuesDiff as $array1) {
//        foreach ($array1 as $array2) {
//            while (list($key, $val) = each($array2)) {
//                $formValuesExtracted[$key] = $val;
//            }
//        }
//    }

    while (list($key, $val) = each($required)) {
//        if (isset($formValuesExtracted[$key]) && $formValuesExtracted[$key] !== "") { // FOR DIFFICULT VERSION
        if (isset($formValuesEasy[$key]) && $formValuesEasy[$key] !== "") {
            // further validation
            if ($key == "Age") {
                if (!ctype_digit($formValuesEasy[$key])) {
                    print $key . " is of an incorrect type, must be numeric.<br />";
                    $missingfields[$key] = $val;
                }
            } else { //if ($key == "FName" || $key == "LName") {
                if (!ctype_alpha($formValuesEasy[$key])) {
                    print $key . " is of an incorrect type, must be alphabetic.<br />";
                    $missingfields[$key] = $val;
                }
            }
        } else {
            $missingfields[$key] = $val;
        }
    }

    if (count($missingfields)) {
        print "You missed out one or more fields:<br />";

        while (list($key, $val) = each($missingfields)) {
            print $val . "<br />";
        }
    } else {
        print "Form passed!<br />";
//      var_dump($formValuesEasy['Languages']);
        exit;
    }
}
?>

