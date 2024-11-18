<?php
require __DIR__ . '/vendor/autoload.php';

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

// Set content type for the response
header('Content-Type: application/json');

try {
    // Get POST data from the frontend
    $data = json_decode(file_get_contents('php://input'), true);
    $query = $data['query'] ?? '';

    if (!$query) {
        throw new Exception('Query is empty.');
    }

    // Initialize AI client
    $client = new Client('AIzaSyDPrmMYtJJvAdvS8hL2SK8uvatn4kM8ZAM');
    $chat = $client->geminiPro()->startChat();

    // Send message to the AI
    $response = $chat->sendMessage(new TextPart($query));

    // Return the response as JSON
    echo json_encode(['response' => $response->text()]);

} catch (Exception $e) {
    // Handle exceptions and return error response
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
