<!DOCTYPE html>
<html>
<head>
  <title>Employee Loyalty Test</title>
  <style>
    body {
      background: linear-gradient(to bottom, #00008b, #FFFF00);
    }

    .container {
      max-width: 700px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
      color: #ff3d5a;
    }

    .container form label {
      display: block;
      margin-bottom: 10px;
      color: #555555;
    }

    .container form input[type="text"],
    .container form input[type="email"],
    .container form input[type="hp_no"],
    .container form input[type="number"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 20px;
      border-radius: 3px;
      border: 1px solid #dddddd;
    }

    .container form input[type="submit"] {
      background-color: #ff3d5a;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
    }

    .container p em {
      font-style: italic;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Congratulations!</h1>
    <p>You are halfway there to secure the promised day-off.</p>
    <p>Please answer these questions below to claim your day-off.</p>
    <p><strong>Form ID: SNG16</strong></p>
    <p><strong>*Take note of the form ID for reference</strong></p>
    <form action="submit.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required><br><br>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required><br><br>

      <label for="phone_number">Phone Number:</label>
      <input type="integer" name="hp_no" id="hp_no" required><br><br>

      <label for="establishment-year">In which year was Store N GO established?</label>
      <input type="number" name="establishment-year" id="establishment-year" required><br><br>

      <label for="subsidiary-name">Name one of the subsidiaries of Store N GO:</label>
      <input type="text" name="subsidiary-name" id="subsidiary-name" required><br><br>

      <input type="submit" value="Claim Your Day-Off">
    </form>
    <p><em>Be quick! The free off day is limited to the first 20 people who are ever ready and lucky.</em></p>
  </div>
</body>
</html>