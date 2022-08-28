<?php 
//Reads the variables sent via POST from AT gateway
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

//This is the first menu screen
if ($text == "") {
	$response = "CON What would you want to check? \n";
	$response .= "1. My Account No ";
	$response .= " My Phone Number";
}

// Business logic for the first level response
elseif ($text == "1") {
	$response = "CON Choose the Account information you want to view \n";
	$response .= "1. Account Number \n";
	$response .= "2. Account Balance 4 \n";
}

//Business logic for the first level response option 2
//This is a terminal request, note how we start with END

else if ($text == "2") {
	$response = "END Your phone number is " .$phoneNumber;
}

elseif ($text == "1*1") {
	//This is a second level response where the user selected 1 in te first instance
	$accountNumber = "ACC1001";

	//This is a terminal request, Note how we start with END
	$response = "END Your account Number is " .$accountNumber;
}
elseif ($text == "1*2") {
	$balance = "Ugx 10,000"

	//This is a terminal request, note how we start with END
	$response = "END Your balance is ".$balance;

}

//echo the response to the API. The response depends on the statement that is fulfilled in each instance.
header('Content-type: text/plain');
echo $response;
?  >