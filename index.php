<?php
// Serve the static HTML file
header('Content-Type: text/html');
readfile('index.html');
?>