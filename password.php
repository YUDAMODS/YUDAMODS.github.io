<?php
// Mengaktifkan fungsi allow_url_fopen
ini_set('allow_url_fopen', true);

// Mendapatkan isi dari file pass.txt
$file_content = file_get_contents('https://yudamods.github.io/pass.txt');

// Mencari baris yang berisi password
$password_line = strstr($file_content, 'Password:') + 1;
$password_start = strpos($password_line, ':') + 1;
$password_end = strpos($password_line, PHP_EOL);
$password = substr($password_line, $password_start, $password_end - $password_start);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Page</title>
  <style>
    .animated-text {
      font-size: 24px;
      position: relative;
      -webkit-animation: typing 2s;
      -moz-animation: typing 2s;
      animation: typing 2s;
    }

    @-webkit-keyframes typing {
      from {
        width: 0;
      }

      to {
        width: 100%;
      }
    }

    @-moz-keyframes typing {
      from {
        width: 0;
      }

      to {
        width: 100%;
      }
    }

    @keyframes typing {
      from {
        width: 0;
      }

      to {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <center>
    <h1 id="password">Password: <span class="animated-text"><?= $password ?></span></h1>
  </center>
</body>
</html>
