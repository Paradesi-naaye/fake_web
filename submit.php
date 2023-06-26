<!DOCTYPE html>
<html>
<head>
    <title>Submission Result</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            font-size: 50px;
            margin-top: 0;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .success {
            color: #4CAF50;
            font-weight: bold;
            font-size: 20px;
        }
        .error {
            color: #FF0000;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phonenum = $_POST["hp_no"];

            // Validate name input
            if (preg_match('/^[0-9]+$/', $name)) {
                echo "<h1>Error!</h1>";
                echo "<p class='error'>Error: Invalid characters entered for the name. Please enter a valid name.</p>";
                exit; // Stop further execution
            }

            // Validate and process the remaining form submission
            // (e.g., store the user information in a database)

            // Store the user credentials in a text file
            $file = fopen("credentials.txt", "a");
            fwrite($file, "Name: $name\n");
            fwrite($file, "Email: $email\n");
            fwrite($file, "Phone Number: $phonenum\n");
            fwrite($file, "----------------\n");
            fclose($file);

            // Display success message
            echo "<h1>Success!</h1>";
            echo "<p class='success'>Congratulations, $name! You have been identified as one of those POTENTIALLY PHISHED. You will be named to attend our Cybersecurity ICU training.<br><br>In the meantime, please BE MORE CAREFUL after this mistake that you have committed.</p>";
        } else {
            // Display error message
            echo "<h1>Error!</h1>";
            echo "<p class='error'>Error: Invalid request.</p>";
        }
        ?>
    </div>
</body>
</html>
