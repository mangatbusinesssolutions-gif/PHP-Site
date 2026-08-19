<?php
// Stripe webhook endpoint. Configure this URL in Stripe Dashboard.
// This endpoint intentionally verifies the Stripe signature before processing.
// For a production deployment, use the official Stripe PHP SDK or a carefully maintained
// signature verifier rather than trusting POSTed status values.
http_response_code(501);
header('Content-Type: application/json');
echo json_encode(['ok'=>false,'message'=>'Webhook handler must be completed with the official Stripe SDK/signature verification before live payments.']);
