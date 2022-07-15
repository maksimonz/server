<?php
// Создаём поток
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Открываем файл с помощью установленных выше HTTP-заголовков
$file = file_get_contents('http://localhost:3000', false, $context);
?>