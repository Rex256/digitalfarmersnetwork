<?php 
/*Code Run*/
/*
This application was developed on Windows 10. using php 7, on MySQL database and tested on Sandbox and Africa's talking Website.
For more information contact the developer at mambocox@gmail.com, mambocox1997@gmail.com or on whatsapp at +256781669941 and Rex256 on github.com
*/
//Reads the variables sent via POST from AT gateway
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

//This is the first menu screen
if ($text == "") {
	$response = "CON (Welcome to Digital Farmer's Network) \n";
    $response .= "1. My Account \n";
	$response .= "2. Buy \n";
	$response .= "3. Sell \n";
    $response .= "4. Change Language \n";
    $response .= "5. Info";
}

// Business logic for the first level response option 1
elseif ($text == "1") {
	$response = "CON DFN Account \n";
	$response .= "1. Account Number \n";
    $response .= "2. Check Balance \n";
    $response .= "3. Check Mini statement \n";
}

//Business logic for the first level response option 2
//This is a terminal request, note how we start with END

else if ($text == "2") {
	$response = "CON Please Choose your distribution point \n";
    $response .= "1. Arua \n";
    $response .= "2. Kampala \n";
    $response .= "3. Koboko \n";
    $response .= "4. Others";
}

//Business logic for the first level response option 3

else if ($text == "3") {
	$response = "CON Please Choose your distribution point \n";
    $response .= "1. Arua \n";
    $response .= "2. Kampala \n";
    $response .= "3. Koboko \n";
    $response .= "4. Others";
}

//Business logic for the first level response option 4
else if ($text == "4") {
	$response = "CON Please Select your preferred Language \n";
    $response .= "1. Lugbara \n";
    $response .= "2. Luganda \n";
    $response .= "3. Kakwa \n";
    $response .= "4. Arabic \n";
    $response .= "5. Swahili \n";
    $response .= "6. Others";
}

//Business logic for the first level response option 5
else if ($text == "5") {
	$response = "CON Digital Farmer's Network is an application that enables farmers to sell their products easily without being manipulated by the local market";
}


//This is a second level response option 1*1
elseif ($text == "1*1") {
	$accountNumber = "ACC1001";

	//This is a terminal request, Note how we start with END
	$response = "END Your account Number is " .$accountNumber;
}

//This is a second level response option 1*2 
elseif ($text == "1*2") {
	$balance = "Ugx 10,000"

	//This is a terminal request, note how we start with END
	$response = "END Your balance is ".$balance;

}
//This is a second level response option 1*3
elseif ($text == "1*3") {
    $response = "CON Transaction from Jun 2022 to Aug 2022 \n";
    $response = "9/6/22 D  12,000 \n";
    $response = "15/6/22 WD -10,000 \n";
    $response = "18/7/22 D  20,000 \n";
    $response = "12/8/22 WD -12,000 \n";
    $response = "END Your balance is ".$balance;
}


//Business logic for Second level response from option 2*1
elseif ($text == "2*1") {
    $response = "CON Please Select the Product you want to Buy \n";
    $response .= "1. Tomatoes \n";
    $response .= "2. Onions \n";
    $response .= "3. Cabbages \n";
    $response .= "4. Others \n";
}

//Business logic for Second level response for option 2*2
elseif ($text == "2*2")
    $response = "CON Please Select the Product you want to Buy \n";
    $response .= "1. Tomatoes \n";
    $response .= "2. Onions \n";
    $response .= "3. Cabbages \n";
    $response .= "4. Others \n";
}

//Business logic for Second level response for option 2*3
elseif ($text == "2*3") {
    $response = "CON Please Select the Product you want to Buy \n";
    $response .= "1. Tomatoes \n";
    $response .= "2. Onions \n";
    $response .= "3. Cabbages \n";
    $response .= "4. Others \n";
}

//Business logic for Second level response for option 2*4
elseif ($text == "2*4") {
    $response = "CON Please Select the Product you want to Buy \n";
    $response .= "1. Tomatoes \n";
    $response .= "2. Onions \n";
    $response .= "3. Cabbages \n";
    $response .= "4. Others \n";
}

//Business logic for Third level response from 2*1
elseif ($text == "2*1*1") {
    $response = "CON 3. QUANTITIES AND PRICES \n";
    $response .= "1. 1 Box @ Ugx 80,000 \n";
    $response .= "2. 1 kg @  Ugx 6,500";
}

elseif ($text == "2*1*2") {
    $response = "CON 3. QUANTITIES AND PRICES \n";
    $response .= "1. 1 Sack @ Ugx 95,000 \n";
    $response .= "2. 1 kg @  Ugx 4,500";
}
elseif ($text == "2*1*3") {
    $response = "CON 3. QUANTITIES AND PRICES \n";
    $response .= "1. 1 sack @ Ugx 40,000 \n";
    $response .= "2. 1 kg @  Ugx 2,500";
}
elseif ($text == "2*1*4") {
    $response = "CON Can you please specify what you want to Purchase \n";
}

//Business logic for fourth level response from option 2*1*1
elseif ($text == "2*1*1*1") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

elseif ($text == "2*1*1*2") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

//Business logic for forth level response from option 2*1*2
elseif ($text == "2*1*2*1") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

elseif ($text == "2*1*2*2") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

//Business logic for fourth level response from option 2*1*3
elseif ($text == "2*1*3*1") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

elseif ($text == "2*1*3*2") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

//Business logic for fourth level response from option 2*1*4
elseif ($text == "2*1*4*1") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

elseif ($text == "2*1*4*2") {
    $response = "CON 3. Pay via \n";
    $response .= "1. MTN Mobile Money \n";
    $response .= "2. Bank Account";
}

//Business logic for fifth level response from option 2*1*1*1
elseif ($text == "2*1*1*1*1") {
    $response = "END Your transaction is being processed \n";
}

elseif ($text == "2*1*1*1*2") {
    $response = "END Your transaction is being processed \n";
}

//Business logic for fifth level response from option 2*1*2
elseif ($text == "2*1*2*1*1") {
    $response = "END Your transaction is being processed \n";
}

elseif ($text == "2*1*2*1*2") {
    $response = "END Your transaction is being processed \n";
}

//echo the response to the API. The response depends on the statement that is fulfilled in each instance.
header('Content-type: text/plain');
echo $response;
?  >
