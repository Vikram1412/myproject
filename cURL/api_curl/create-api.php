<?php


// Assume this data is fetched from a database or some other source
$data = [
    ['id' => 1, 'name' => 'John Doe'],
    ['id' => 2, 'name' => 'Jane Smith'],
];

// Set the Content-Type header to JSON
header('Content-Type: application/json');

// Check the request method
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle GET request
    echo json_encode($data);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle POST request
    $requestData = json_decode(file_get_contents('php://input'), true);

    // Process $requestData as needed

    echo json_encode(['message' => 'Data received successfully']);
} else {
    // Unsupported request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Unsupported request method']);
}

/* above code is for building api */


/* Using cURL to Access the API: */

// Example cURL GET request
$ch = curl_init('http://your-domain.com/create-api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Example cURL POST request
$postData = ['key1' => 'value1', 'key2' => 'value2'];
$ch = curl_init('http://your-domain.com/create-api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
$response = curl_exec($ch);
curl_close($ch);

// Process the API response
$responseData = json_decode($response, true);

print_r($responseData);


/* 

Explanation:
create-api.php:

This script simulates an API endpoint that returns data for a GET request and acknowledges data receipt for a POST request.
The Content-Type header is set to application/json to specify that the response is in JSON format.
It checks the request method (GET or POST) and handles the requests accordingly.
For the POST request, it reads the request body using file_get_contents('php://input') and decodes the JSON data.
Using cURL:

The cURL GET request sends a simple GET request to the API endpoint and retrieves the response.
The cURL POST request sends a POST request with JSON-encoded data to the API endpoint.
Please replace 'http://your-domain.com/create-api.php' with the actual URL where your PHP script is hosted.

Keep in mind that this is a basic example, and in a real-world scenario, you might want to implement proper error handling, validation, and security measures based on your specific requirements.


*/



?>
