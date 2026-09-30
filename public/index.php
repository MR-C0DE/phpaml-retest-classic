<?php

declare(strict_types=1);

header('Content-Type: text/html; charset=UTF-8');
$now = gmdate('Y-m-d H:i:s');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classic PHP production test</title>
    <style>
        * { box-sizing: border-box; border-radius: 0; }
        body { margin: 0; min-height: 100vh; display: grid; place-items: center; padding: 24px; color: #172018; background: #edf2e9; font-family: system-ui, sans-serif; }
        main { width: min(100%, 720px); border: 1px solid #788777; background: #fff; padding: clamp(28px, 7vw, 68px); box-shadow: 12px 12px 0 #b9c8b4; }
        small { color: #39653d; font-weight: 800; letter-spacing: .12em; }
        h1 { font: 600 clamp(40px, 8vw, 76px)/.95 Georgia, serif; letter-spacing: -.05em; }
        code { display: block; margin-top: 24px; padding: 14px; border-left: 4px solid #39653d; background: #edf2e9; }
    </style>
</head>
<body>
<main>
    <small>CLASSIC PHP · PRODUCTION</small>
    <h1>Plain PHP works.</h1>
    <p>This project has no framework and no Composer dependency.</p>
    <code>UTC <?= htmlspecialchars($now, ENT_QUOTES, 'UTF-8') ?></code>
</main>
</body>
</html>
