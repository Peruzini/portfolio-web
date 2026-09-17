<?php
$config = require __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contato');
    exit;
}

if (!empty($_POST['website'] ?? '')) {
    header('Location: index.php');
    exit;
}

$clean = static function ($value, $max = 500) {
    $value = trim((string)$value);
    $value = preg_replace('/\s+/u', ' ', $value);
    return mb_substr($value, 0, $max);
};

$name = $clean($_POST['name'] ?? '', 80);
$company = $clean($_POST['company'] ?? '', 100);
$phone = $clean($_POST['phone'] ?? '', 40);
$service = $clean($_POST['service'] ?? '', 100);
$message = $clean($_POST['message'] ?? '', 1000);

if ($name === '' || $phone === '' || $message === '') {
    header('Location: index.php#contato');
    exit;
}

$text = "Olá! Vim pelo site da Cassuli Consultoria.\n\n"
      . "Nome: {$name}\n"
      . ($company !== '' ? "Empresa: {$company}\n" : '')
      . "Telefone: {$phone}\n"
      . "Serviço: {$service}\n\n"
      . "Mensagem: {$message}";

$url = 'https://wa.me/' . $config['whatsapp'] . '?text=' . rawurlencode($text);
header('Location: ' . $url, true, 303);
exit;
