<?php

// Sample array
$data = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
);

// Convert array to JSON
$jsonData = json_encode($data);

// Output JSON data
echo $jsonData;


{"name":"John Doe","age":30,"city":"New York"}

$jsonData = json_encode($data, JSON_PRETTY_PRINT);


?>


<?php

// Sample JSON data
$jsonData = '{"name":"John Doe","age":30,"city":"New York"}';

// Convert JSON to array
$arrayData = json_decode($jsonData, true);

// Output array data
print_r($arrayData);


/* out put */

Array
(
    [name] => John Doe
    [age] => 30
    [city] => New York
)


$arrayData = json_decode($jsonData, true);

if ($arrayData === null && json_last_error() !== JSON_ERROR_NONE) {
    // Handle JSON decoding error
    echo "JSON decoding error: " . json_last_error_msg();
} else {
    // Use $arrayData
    print_r($arrayData);
}




?>
