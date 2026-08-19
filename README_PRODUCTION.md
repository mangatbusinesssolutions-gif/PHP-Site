# PC World Geek — Production Website

This package is a PHP/MySQL production-oriented starter for cPanel/Apache hosting.

## Included
- Premium responsive website
- One-off service pricing
- Monthly and annual membership pricing
- Stripe hosted Checkout integration
- Customer registration/login with password hashing
- Customer account and booking history
- Booking request system backed by MySQL
- Remote-support handoff page with configurable provider URL
- Four Google Ads-focused landing pages
- Privacy/Terms/Disclosure templates
- Security headers and blocked config/SQL files
- Google Ads launch checklist

## Prices
- Computer & laptop support: £69 one-off
- Printer support: £59 one-off
- Wi-Fi & router support: £59 one-off
- Security & malware support: £79 one-off
- Monthly membership: £14.99/month
- Annual membership: £149.99/year

These prices must match the real service delivered. Update them if your actual pricing differs.

## Deploy
1. Create a MySQL database and import `schema.sql`.
2. Copy `config.example.php` to `config.php`.
3. Enter the database credentials, real domain, phone/email and Stripe keys.
4. Create the six Stripe Price objects matching the advertised prices/billing intervals.
5. Put their Stripe Price IDs into `config.php`.
6. Configure Stripe Checkout/webhook infrastructure.
7. Configure a real remote-support provider and put its session URL into `config.php`.
8. Replace all placeholder business/contact/legal information.
9. Enable HTTPS.
10. Test registration, login, booking, checkout, cancellation, refunds, emails and mobile layouts.
11. Configure Google Ads conversion tracking only after the privacy/cookie documentation matches the actual tracking.
12. Submit ads only after the site is genuinely functional.

## Important production gap
The Stripe webhook endpoint is deliberately not pretending to verify payment. Before going live, implement official Stripe signature verification and record payment/subscription events in the database. This avoids treating an unverified browser redirect as proof of payment.

## Remote support
A live remote support service requires a real provider/account and an actual technician workflow. The website does not fabricate a remote session.

## Google Ads
No website can guarantee Google Ads approval. Google reviews the actual destination, business identity, claims, pricing and user experience. The included checklist is designed around current Google policies but should be rechecked before launch.
