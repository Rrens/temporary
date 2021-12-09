<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="colorlib.com" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../assets/colorlib/fonts/themify-icons/themify-icons.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="../assets/colorlib/css/style.css" />
  </head>
  <body>
    <div class="main">
      <div class="container">
        <h2>REGISTER</h2>
        <form method="POST" class="signup-form" id="signup-form">
            @if ($tipe === 'murid')
                @include('auth.regis-murid')
            @elseif ($tipe === 'guru')
                @include('auth.regis-guru')
            @endif
        </form>
      </div>
    </div>
    <div class="footer"></div>

    <!-- JS -->
    <script src="../assets/colorlib/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/colorlib/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/colorlib/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="../assets/colorlib/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/colorlib/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="../assets/colorlib/js/main.js"></script>
  </body>
</html>
