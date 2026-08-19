<?php require_once __DIR__.'/bootstrap.php'; ?>
<!doctype html><html lang="en-GB"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=e($pageTitle ?? 'PC World Geek | UK Tech Support')?></title>
<meta name="description" content="<?=e($pageDescription ?? 'Independent UK computer, printer, Wi-Fi and home technology support.')?>">
<link rel="stylesheet" href="assets/styles.css">
<?php if(!empty($config['google_ads_conversion_id'])): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=e($config['google_ads_conversion_id'])?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag('js',new Date());gtag('config','<?=e($config['google_ads_conversion_id'])?>');</script>
<?php endif; ?>
</head><body>
<header class="site-header"><div class="wrap nav">
<a class="brand" href="index.php"><span class="brandmark">PW</span><span>PC WORLD <b>GEEK</b></span></a>
<nav><a href="services.php">Services</a><a href="memberships.php">Memberships</a><a href="booking.php">Book Support</a><a href="how-it-works.php">How It Works</a><a href="contact.php">Contact</a></nav>
<div class="nav-right"><?php if(user()): ?><a class="small-link" href="account.php">My Account</a><?php else: ?><a class="small-link" href="login.php">Log in</a><?php endif; ?><a class="pill" href="booking.php">Get Help</a></div>
</div></header>
