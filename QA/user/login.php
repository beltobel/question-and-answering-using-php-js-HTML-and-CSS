<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
  <style>
    body {
      background: linear-gradient(to bottom,black , #ff0044);
      margin-top: 60px;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background: linear-gradient(to bottom,blue , black);
      /* background-color: #ffffff; */
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      color: #333333;
    }

    h2 {
      text-align: center;
      color: #333333;
      margin-bottom: 30px;
    }
    

    .form-label {
      font-weight: 600;
    }

    .form-control {
      background-color: #f8f9fa;
      border: 1px solid #ced4da;
      border-radius: 5px;
      color: #495057;
      padding: 7px;
     
      width: 80%;
      display: flex;
    }

    .form-control:focus {
      background-color: #ffffff;
      border-color: #80bdff;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
      color: #495057;
    }

    .error-message {
      color: #dc3545;
      font-size: 14px;
      margin: 5px;
    }

    .success-message {
      color: #28a745;
      font-size: 16px;
      font-weight: 600;
      margin-top: 10px;
      text-align: center;
    }

    .register-button {
      margin-top: 20px;
      text-align: center;
    }

    .register-button button {
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      color: #ffffff;
      font-weight: 600;
      padding: 10px 20px;
      transition: background-color 0.3s ease;
    }

    .register-button button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2>Login Form</h2>
    <form id="registrationForm" action  ="registrationHandler.php" method ="post">
      
      
      <div class="mb-3 " >
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" >
        <span id="emailError" class="error-message"></span>
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" >
        <span id="passwordError" class="error-message"></span>
      </div>
      <div class="register-button">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
  
  <script>
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
    //   e.preventDefault();

      // Retrieve form values
     
      var email = document.getElementById('email').value.trim();
      var password = document.getElementById('password').value;
   

      //Clear previous error messages
     

      document.getElementById('emailError').textContent = '';
      document.getElementById('passwordError').textContent = '';

      // Perform validation
      var isValid = true;

      if (email === '') {
        document.getElementById('emailError').textContent = 'Please enter your email.';
        isValid = false;
      }

      if (password === '') {
        document.getElementById('passwordError').textContent = 'Please enter a password.';
        isValid = false;
      }

    //   if (isValid) {
    //     // Submit the form
    //     // You can perform additional actions here, such as AJAX requests to handle form submission

    //     document.getElementById('successMessage').textContent = 'Form submitted successfully!';
                // header("Location: another-page.php");
                // exit;
    //   }

    });
  </script>
</body>
</html>