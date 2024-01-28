<?php

// Function to count items in the array
function countItems() {
    $url = 'https://www.reynaers.be/map/marker/dealers';

    // Fetch the JSON data
    $jsonData = file_get_contents($url);

    if ($jsonData === false) {
        die('Error fetching the data.');
    }

    // Decode JSON data
    $data = json_decode($jsonData, true);

    if ($data === null) {
        die('Error parsing the JSON data.');
    }

    // Check if the data is an array
    if (is_array($data)) {
        $itemCount = count($data);
        echo 'Number of items: ' . $itemCount;
    } else {
        die('The retrieved data is not an array.');
    }
}

// Call the counting function
countItems();

?>
