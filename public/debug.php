<?php
// TEMPORARY DIAGNOSTIC FILE - DELETE AFTER USE!
echo "<style>body{font-family:monospace;background:#1a1a1a;color:#00ff00;padding:20px;} .err{color:#ff4444;} .ok{color:#00ff00;} .warn{color:#ffaa00;} h2{color:#fff;border-bottom:1px solid #333;padding-bottom:5px;}</style>";
echo "<h1 style='color:#fff'>QuarkCars - Server Diagnostic</h1>";

// PHP Version
echo "<h2>PHP</h2>";
$phpVersion = phpversion();
echo "PHP Version: <span class='".($phpVersion >= '8.2' ? 'ok' : 'err')."'>$phpVersion</span><br>";

// Check extensions
echo "<h2>Required Extensions</h2>";
$required = ['pdo', 'pdo_mysql', 'mbstring', 'openssl', 'tokenizer', 'xml', 'ctype', 'json', 'bcmath', 'fileinfo'];
foreach($required as $ext) {
    $loaded = extension_loaded($ext);
    echo "$ext: <span class='".($loaded ? 'ok' : 'err')."'>".($loaded ? '✓ loaded' : '✗ MISSING')."</span><br>";
}

// Check .env file
echo "<h2>.env File</h2>";
$envPath = __DIR__ . '/../.env';
if (file_exists($envPath)) {
    echo ".env exists: <span class='ok'>✓ YES</span><br>";
    $envContent = file_get_contents($envPath);
    $lines = explode("\n", $envContent);
    foreach($lines as $line) {
        $line = trim($line);
        if(empty($line) || str_starts_with($line, '#')) continue;
        // Hide passwords
        if(str_contains(strtolower($line), 'password') || str_contains(strtolower($line), 'key') || str_contains(strtolower($line), 'secret')) {
            $parts = explode('=', $line, 2);
            echo htmlspecialchars($parts[0]) . "=<span style='color:#888'>[HIDDEN]</span><br>";
        } else {
            echo htmlspecialchars($line) . "<br>";
        }
    }
} else {
    echo ".env exists: <span class='err'>✗ NOT FOUND at $envPath</span><br>";
}

// Check writable dirs
echo "<h2>Directory Permissions</h2>";
$dirs = [
    __DIR__ . '/../storage',
    __DIR__ . '/../storage/logs',
    __DIR__ . '/../storage/framework',
    __DIR__ . '/../storage/framework/sessions',
    __DIR__ . '/../storage/framework/views',
    __DIR__ . '/../storage/framework/cache',
    __DIR__ . '/../bootstrap/cache',
];
foreach($dirs as $dir) {
    $shortName = str_replace(__DIR__ . '/../', '', $dir);
    if (!is_dir($dir)) {
        echo "$shortName: <span class='err'>✗ DOES NOT EXIST</span><br>";
    } elseif (!is_writable($dir)) {
        echo "$shortName: <span class='err'>✗ NOT WRITABLE</span><br>";
    } else {
        echo "$shortName: <span class='ok'>✓ writable</span><br>";
    }
}

// Try DB Connection
echo "<h2>Database Connection</h2>";
$envFile = file_get_contents(__DIR__ . '/../.env');
preg_match('/DB_HOST=(.+)/', $envFile, $host);
preg_match('/DB_DATABASE=(.+)/', $envFile, $db);
preg_match('/DB_USERNAME=(.+)/', $envFile, $user);
preg_match('/DB_PASSWORD=(.+)/', $envFile, $pass);

$host = trim($host[1] ?? '127.0.0.1');
$db   = trim($db[1] ?? '');
$user = trim($user[1] ?? '');
$pass = trim($pass[1] ?? '');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "DB Connection: <span class='ok'>✓ SUCCESS! Connected to $db</span><br>";
} catch (Exception $e) {
    echo "DB Connection: <span class='err'>✗ FAILED: " . $e->getMessage() . "</span><br>";
}

// Check vendor autoload
echo "<h2>Laravel Files</h2>";
$files = [
    __DIR__ . '/../vendor/autoload.php' => 'vendor/autoload.php',
    __DIR__ . '/../bootstrap/app.php'   => 'bootstrap/app.php',
    __DIR__ . '/../artisan'             => 'artisan',
];
foreach($files as $path => $label) {
    $exists = file_exists($path);
    echo "$label: <span class='".($exists ? 'ok' : 'err')."'>".($exists ? '✓ exists' : '✗ MISSING')."</span><br>";
}

echo "<br><br><span class='warn'>⚠️ DELETE THIS FILE IMMEDIATELY AFTER DEBUGGING!</span>";
