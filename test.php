<?php
include "php_serial.class.php";

//start the class
$serial = new phpSerial;

//specify device/identify serial port
$serial ->deviceSet("/dev/ttyACM0");


//configurations

//can change baud rate here
$serial ->confBaudRate(9600);
$serial ->confParity("none");
$serial ->confCharacterLength(8);
$serial ->confStopBits(1);
$serial ->confFlowControl("none");

//open it
$serial -> deviceOpen();
$read = $serial ->readPort();

//to change configuration, close device
$serial ->deviceClose();

echo$read;
?>
