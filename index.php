<?php declare(strict_types=1);

$path = $_GET['path'] ?? 'homepage';

require __DIR__ . '/src/Context.php';
global $page;

$context = Context::getInstance();
$context->setPath($path);
$page = $context->getPage();
if ($page === null) {
	header("HTTP/1.0 404 Not Found");
	require __DIR__ . '/includes/error.php';
	exit;
}

switch ($path) {
	case 'homepage':
		$layout = 'default-layout.php';
		break;
	default:
		$layout = 'with-menu-layout.php';
}

require __DIR__ . '/includes/' . $layout;
