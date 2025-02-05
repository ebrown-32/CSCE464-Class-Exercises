<?php
require_once dirname(__DIR__) . '/src/config/config.php';
require_once INCLUDES_DIR . '/functions.php';
require_once INCLUDES_DIR . '/database.php';

// this function is an example of getting data from the database. Notice this is implemented in src/includes/database.php
try {
    $db = getDbConnection();
    // $result = $db->query("SELECT * FROM your_table LIMIT 5");
} catch (PDOException $e) {
    // error handling will be left as an exercise for the reader ;)
}

// header template
require_once TEMPLATES_DIR . '/header.php';
?>

<div class="container">
    <h1>PHP Example Page</h1>
    <p>This page demonstrates how to use the PHP structure:</p>
    <ul>
        <li>Configuration files in <code>/src/config</code></li>
        <li>Include files in <code>/src/includes</code></li>
        <li>Templates in <code>/src/templates</code></li>
        <li>Public files in <code>/public</code></li>
    </ul>
</div>

<?php
// footer template
require_once TEMPLATES_DIR . '/footer.php';
?> 