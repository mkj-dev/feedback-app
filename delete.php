<?php
// Get the id of the feedback to delete from the delete.js script
$id = $_POST['id'];

// Get the feedback data
$json = file_get_contents('./feedback_data/data.json');
$data = json_decode($json, true);

// Remove the specified feedback from the array
unset($data[$id]);

// Re-encode the array as a JSON string and write it back to the file
$json = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('./feedback_data/data.json', $json);
