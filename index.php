<?php
session_start();
if (isset($_SESSION['user'])) {
    // Redirect based on role
    header("Location: " . ($_SESSION['user']['is_admin'] ? "admin_dashboard.php" : "user_dashboard.php"));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Forum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style> body { background-color: darkcyan; color: white; } </style>
  <style>
  body {
   /* background:  url('images/darko-m-zUsrlPPdpNM-unsplash.jpg') no-repeat center center fixed; */
   /* background-size: cover; */
    backdrop-filter: brightness(0.8); /* Optional: dims the background for better text contrast */
  }

 
</style>
</head>
<body>

  <!-- Hero Buttons -->
  <div class="text-center mt-5 bg-darkcyan">
    <h1 class="display-5">Join the Conversation</h1>
    <p class="lead">Sign up or log in to start exploring modules and discussions.</p>
    <a href="login.php" class="btn btn-primary btn-lg me-2">Login</a>
    <a href="login.php" class="btn btn-outline-primary btn-lg">Sign Up</a>
  </div>

  <!-- Features Section -->
  <div class="container mt-5 fade-in">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <h5>Posts based on modules</h5>
        <p>Conversations are organized in academic modules.</p>
      </div>
      <div class="col-md-4 mb-4">
        <h5>Real-Time Interaction</h5>
        <p>Ask questions and get replies from fellow students.</p>
      </div>
      <div class="col-md-4 mb-4">
        <h5>Contact Admin</h5>
        <p>Send messages to admin.</p>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 p-4 bg-darkcyan">
    &copy; <?= date('Y') ?> Student Forum. 
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Cookie Consent Banner -->
<div id="cookieConsent" style="position: fixed; bottom: 0; left: 0; right: 0; background: white;color:rgba(8, 9, 9, 0.65); border-top: 1px solid #ccc; padding: 15px; display: flex; justify-content: space-between; align-items: center; z-index: 1000;">
    <div>
        By clicking “Accept All Cookies”, you agree to the storing of cookies on your device to enhance site performance and improve your experience. 
        <a href="your-privacy-policy-link" style="color: #0056b3; font-weight: bold;">More information</a>
    </div>
    <div style="display: flex; gap: 10px; align-items: center;">
        <a href="#" onclick="showCookieSettings()" style="color: #0056b3; font-weight: bold;">Cookies Settings</a>
        <button onclick="acceptCookies()" style="background-color: #0056b3; color: white; padding: 8px 12px; border: none; font-weight: bold;">Accept All Cookies</button>
        <span onclick="dismissBanner()" style="cursor: pointer; font-size: 20px; margin-left: 10px;">&times;</span>
    </div>
</div>

<script>
function acceptCookies() {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookieConsent').style.display = 'none';
}

function dismissBanner() {
    document.getElementById('cookieConsent').style.display = 'none';
}

function showCookieSettings() {
    alert("Here you can implement or show a cookie settings modal.");
}

// Only show banner if not already accepted
window.onload = function() {
    if (localStorage.getItem('cookiesAccepted') === 'true') {
        document.getElementById('cookieConsent').style.display = 'none';
    }
};
</script>

</body>
</html>

