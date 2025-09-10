<?php
function load_template($name)
{
    $safeName = basename($name);
    $file = __DIR__ . '/../_load_templates/' . $safeName . '.php';

    if (file_exists($file)) {
        include $file;
    } else {
        echo "❌ Template not found: $safeName.php<br>";
    }
}
