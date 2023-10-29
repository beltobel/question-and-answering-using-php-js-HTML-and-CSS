<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-4">Registration Form</h2>
    <form id="registrationForm">
      <div class="mb-3">
        <label for="firstName" class="form-label">First Name:</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required>
      </div>
      
      <div class="mb-3">
        <label for="lastName" class="form-label">Last Name:</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      
      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password:</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
      </div>
      
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
  
  <script>
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
      e.preventDefault();

      // Retrieve form values
      var firstName = document.getElementById('firstName').value.trim();
      var lastName = document.getElementById('lastName').value.trim();
      var email = document.getElementById('email').value.trim();
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirmPassword').value;

      // Perform validation
      if (firstName === '') {
        alert('Please enter your first name.');
        return;
      }

      if (lastName === '') {
        alert('Please enter your last name.');
        return;
      }

      if (email === '') {
        alert('Please enter your email.');
        return;
      }

      if (password === '') {
        alert('Please enter a password.');
        return;
      }

      if (confirmPassword === '') {
        alert('Please confirm your password.');
        return;
      }

      if (password !== confirmPassword) {
        alert('Password and Confirm Password do not match.');
        return;
      }

      // Submit the form
      // You can perform additional actions here, such as AJAX requests to handle form submission

      alert('Form submitted successfully!');
    });
  </script>
</body>
</html>