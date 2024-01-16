
<?php 

/*  cURL (Client URL) is a library and command-line tool for transferring data with URLs. In PHP, you can use the cURL library to make HTTP requests. The cURL functions in PHP provide a way to interact with external services and APIs. Here's a basic overview of how to use cURL in PHP: */

/* 1- Initialize cURL Session:  */

$ch = curl_init();

/* 2. Set cURL Options: */

// Set the URL to which the request is to be sent
curl_setopt($ch, CURLOPT_URL, 'https://api.example.com/data');

// Set additional options as needed
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response instead of outputting it

/* 3. Execute cURL Session: */
$response = curl_exec($ch);


/* 4. Check for Errors: */

if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
}

/* 5. Close cURL Session: */

curl_close($ch);

/* end of study part Now start use  */






/* Example - GET Request: */

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, 'https://api.example.com/data');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Process the response
echo $response;







/* Example - POST Request: */

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, 'https://api.example.com/post');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'param1' => 'value1',
    'param2' => 'value2',
]);


// Execute cURL session
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Process the response
echo $response;


?>

