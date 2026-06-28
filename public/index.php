<?php
require_once __DIR__ . '/../vendor/autoload.php';

use CedricZiel\LeonardoAI\Generated\Client as GeneratedClient;
use CedricZiel\LeonardoAI\Generated\Runtime\Client\Client as SDKClient;

header('Content-Type: application/json');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

if ($uri === '/api/generate' && $method === 'POST') {
    echo json_encode([
        'status' => 'success',
        'received' => $input,
        'message' => 'Backend is ready.'
    ]);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Not Found', 'uri' => $uri]);
}
