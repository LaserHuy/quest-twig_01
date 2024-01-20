<?php

require_once __DIR__ . '/../config/twig.php';
$products = ['guitar', 'bass', 'banjo', 'zither', 'lyre', 'harp'];


// Render the Twig template and pass the $products array to it.
echo $twig->render('products.html.twig', ['products' => $products]);