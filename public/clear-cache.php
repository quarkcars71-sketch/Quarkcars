<?php
// ⚠️ SECURE CACHE CLEARING SCRIPT FOR HOSTINGER
// Please delete this file from the server immediately after running it!

$envPath = __DIR__ . '/../.env';
$appKey = null;

if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line) || strpos($line, '#') === 0) continue;
        
        $parts = explode('=', $line, 2);
        if (count($parts) === 2 && trim($parts[0]) === 'APP_KEY') {
            $appKey = trim($parts[1]);
            // Strip quotes if present
            $appKey = trim($appKey, '"\'');
            break;
        }
    }
}

if (!$appKey) {
    header('HTTP/1.0 500 Internal Server Error');
    echo "<h1>Error</h1>";
    echo "Access denied: APP_KEY not found in .env. Please configure your .env file first.";
    exit;
}

$inputKey = $_GET['key'] ?? '';
if (empty($inputKey) || $inputKey !== $appKey) {
    header('HTTP/1.0 403 Forbidden');
    echo "<h1>403 Forbidden</h1>";
    echo "Access denied. Please provide the correct APP_KEY via the URL parameter '?key=YOUR_APP_KEY'.<br>";
    echo "Example: <code>/clear-cache.php?key=base64:...</code><br><br>";
    echo "You can copy the APP_KEY directly from your server's <code>.env</code> file.";
    exit;
}

// Clear bootstrap cache files
$cacheDir = __DIR__ . '/../bootstrap/cache/';
$clearedFiles = [];
$failedFiles = [];

if (is_dir($cacheDir)) {
    foreach (glob($cacheDir . '*.php') as $file) {
        $filename = basename($file);
        if ($filename === '.gitignore') continue;
        if (unlink($file)) {
            $clearedFiles[] = $filename;
        } else {
            $failedFiles[] = $filename;
        }
    }
}

// Output results
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Laravel Cache Cleared</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #0f172a; color: #f8fafc; padding: 40px; }
        .card { background: #1e293b; padding: 30px; border-radius: 12px; max-width: 600px; margin: 40px auto; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.3); border: 1px solid #334155; }
        h1 { color: #38bdf8; font-size: 24px; margin-top: 0; margin-bottom: 20px; border-bottom: 1px solid #334155; padding-bottom: 15px; }
        .alert { padding: 12px 16px; border-radius: 6px; margin: 12px 0; font-size: 14px; line-height: 1.5; }
        .success { color: #4ade80; background: rgba(6, 78, 59, 0.4); border: 1px solid #064e3b; }
        .error { color: #f87171; background: rgba(127, 29, 29, 0.4); border: 1px solid #7f1d1d; }
        .warning { color: #fbbf24; background: rgba(120, 53, 15, 0.4); border: 1px solid #78350f; }
        .btn { display: inline-block; background: #0284c7; color: white; padding: 10px 20px; border-radius: 6px; text-decoration: none; margin-top: 20px; font-weight: 500; font-size: 14px; transition: background 0.2s; }
        .btn:hover { background: #0369a1; }
        code { background: #0f172a; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 13px; color: #f472b6; }
    </style>
</head>
<body>
    <div class='card'>
        <h1>🧹 Laravel Cache Cleared</h1>";

if (!empty($clearedFiles)) {
    echo "<h3>Cleared bootstrap files:</h3>";
    foreach ($clearedFiles as $f) {
        echo "<div class='alert success'>✓ Cleared <code>bootstrap/cache/$f</code></div>";
    }
} else {
    echo "<div class='alert warning'>No cached files found to delete in <code>bootstrap/cache/</code>.</div>";
}

if (!empty($failedFiles)) {
    echo "<h3>Failed to clear (permission issues):</h3>";
    foreach ($failedFiles as $f) {
        echo "<div class='alert error'>✗ Failed to delete <code>bootstrap/cache/$f</code>. Please delete it manually via File Manager.</div>";
    }
}

echo "
        <div class='alert warning'>
            ⚠️ <strong>CRITICAL SECURITY REMINDER:</strong> Delete this file (<code>public/clear-cache.php</code>) from your public directory via Hostinger File Manager immediately to prevent unauthorized cache clearing!
        </div>
        <a href='/' class='btn'>Go to Homepage</a>
    </div>
</body>
</html>";
