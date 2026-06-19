<?php
// ⚠️ TEMPORARY SETUP FILE - DELETE IMMEDIATELY AFTER USE!

$envPath = __DIR__ . '/../.env';

$envContent = 'APP_NAME=QuarkCars
APP_ENV=production
APP_KEY=base64:vXURO1V6m5zwOOYeZxUeujZKnHXafQkqDnftUXQXy9w=
APP_DEBUG=false
APP_URL=https://quarkcars.com

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US
APP_MAINTENANCE_DRIVER=file

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=u509224338_quarkcars
DB_USERNAME=u509224338_quarkcars
DB_PASSWORD=ee~bBDsa6+F

SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=file

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_SCHEME=ssl
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=465
MAIL_USERNAME=noreply@quarkcars.com
MAIL_PASSWORD=YourEmailPasswordHere
MAIL_FROM_ADDRESS=noreply@quarkcars.com
MAIL_FROM_NAME="QuarkCars"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="QuarkCars"
';

echo "<style>
body { font-family: monospace; background: #1a1a1a; color: #fff; padding: 40px; }
.ok { color: #00ff00; font-size: 20px; }
.err { color: #ff4444; font-size: 20px; }
.box { background: #2a2a2a; padding: 20px; border-radius: 8px; margin: 20px 0; }
</style>";

echo "<h1>🔧 QuarkCars Setup</h1>";

// Check if .env already exists
if (file_exists($envPath)) {
    echo "<div class='box'><span class='ok'>✓ .env file already exists!</span><br>Path: $envPath</div>";
} else {
    // Try to create it
    $result = file_put_contents($envPath, $envContent);
    
    if ($result !== false) {
        echo "<div class='box'><span class='ok'>✓ SUCCESS! .env file created!</span><br>Path: $envPath<br>Size: $result bytes</div>";
        
        // Verify DB connection
        echo "<h2>Testing Database...</h2>";
        try {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=u509224338_quarkcars", "u509224338_quarkcars", "ee~bBDsa6+F");
            echo "<div class='box'><span class='ok'>✓ Database connected successfully!</span></div>";
        } catch (Exception $e) {
            echo "<div class='box'><span class='err'>✗ DB Error: " . $e->getMessage() . "</span><br>Check your DB password!</div>";
        }
        
        // Clear bootstrap cache
        $cacheDir = __DIR__ . '/../bootstrap/cache/';
        $cleared = 0;
        foreach (glob($cacheDir . '*.php') as $file) {
            if (unlink($file)) $cleared++;
        }
        echo "<div class='box'><span class='ok'>✓ Cleared $cleared cached config files</span></div>";
        
        echo "<div class='box' style='border:2px solid #ffaa00;'>
            <span style='color:#ffaa00;font-size:18px;'>⚠️ NEXT STEPS:</span><br><br>
            1. Visit <a href='https://quarkcars.com' style='color:#00aaff'>https://quarkcars.com</a> — site should work now!<br><br>
            2. <strong style='color:#ff4444'>DELETE this setup.php file immediately!</strong><br>
            &nbsp;&nbsp; Go to Hostinger File Manager → public_html/public/ → delete setup.php
        </div>";
        
    } else {
        echo "<div class='box'><span class='err'>✗ FAILED to create .env file</span><br>";
        echo "Path attempted: $envPath<br>";
        echo "Directory writable: " . (is_writable(dirname($envPath)) ? '<span class=\'ok\'>YES</span>' : '<span class=\'err\'>NO</span>') . "</div>";
    }
}
