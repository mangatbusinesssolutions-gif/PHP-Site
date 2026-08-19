<?php
declare(strict_types=1);
session_start();

$configFile = __DIR__ . '/config.php';
if (!file_exists($configFile)) {
  http_response_code(500);
  exit('Server configuration is incomplete.');
}
$config = require $configFile;

function db(): PDO {
  global $config;
  static $pdo = null;
  if ($pdo instanceof PDO) return $pdo;
  $d = $config['db'];
  $pdo = new PDO(
    "mysql:host={$d['host']};dbname={$d['name']};charset={$d['charset']}",
    $d['user'], $d['pass'],
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]
  );
  return $pdo;
}
function e(string $v): string { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
function csrf(): string {
  if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
  return $_SESSION['csrf'];
}
function verify_csrf(): void {
  if (!hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')) {
    http_response_code(419); exit('Invalid request token.');
  }
}
function user(): ?array {
  if (empty($_SESSION['user_id'])) return null;
  $s=db()->prepare('SELECT id,name,email FROM users WHERE id=?');
  $s->execute([$_SESSION['user_id']]);
  return $s->fetch() ?: null;
}
function require_login(): array {
  $u=user(); if(!$u){ header('Location: login.php?next=account.php'); exit; } return $u;
}
function flash(?string $set=null): ?string {
  if($set!==null){$_SESSION['flash']=$set;return null;}
  $v=$_SESSION['flash']??null;unset($_SESSION['flash']);return $v;
}
