<!DOCTYPE html>
<html>
<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Homepage</title>
</head>
<body>
  <div class="container">
    <h1>Hello, World!</h1>
    
    <!-- Logout button -->
    <button id="logoutBtn" class="btn btn-danger">Logout</button>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script>
    // Logout button click event
    document.getElementById("logoutBtn").addEventListener("click", function() {
      // Redirect to login page
      window.location.href = "login.html";
    });
  </script>
</body>
</html>