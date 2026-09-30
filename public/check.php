<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');
echo json_encode([
    'project' => 'phpaml-retest-classic',
    'status' => 'ok',
    'php' => PHP_VERSION,
], JSON_THROW_ON_ERROR);
