<?php
// ---------------------------------------------------------------------------
// Simple PHP mail relay for contact form submissions.
// Notes:
// - Set $to to your inbox on your Hostinger domain (best deliverability).
// - For production reliability, configure SMTP (PHPMailer).
// ---------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = strip_tags($_POST["name"] ?? "");
  $email = filter_var($_POST["email"] ?? "", FILTER_SANITIZE_EMAIL);
  $interest = strip_tags($_POST["interest"] ?? "");
  $message = strip_tags($_POST["message"] ?? "");

  if (!$name || !$email || !$message) {
    http_response_code(400);
    echo "Missing required fields.";
    exit;
  }

  $to = "you@yourdomain.com"; // TODO: replace with your domain email on Hostinger
  $subject = "New inquiry - Glamified Solutions";
  $body = "Name: $name\nEmail: $email\nInterest: $interest\n\n$message";
  $headers = "From: noreply@yourdomain.com\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

  if (mail($to, $subject, $body, $headers)) {
    header("Location: /contact.html?sent=1");
    exit;
  } else {
    http_response_code(500);
    echo "Failed to send email. Configure SMTP or contact us directly.";
  }
} else {
  http_response_code(405);
  echo "Method not allowed.";
}
