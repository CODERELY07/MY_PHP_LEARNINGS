<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Start PHP session to save changes -->
<?php
    // Start the session
    session_start();

    // Check if $_SESSION['p'] is not set, initialize it with a default value
    if (!isset($_SESSION['p'])) {
        $_SESSION['p'] = "<h1>Hi, I am name and I am age years old</h1>";
    }

    // Process form submission
    if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['submit'])) {
        // Create pattern to search for the word to change
        $pattern = '/' . $_GET['change'] . '/i';
        // Get the word to exchange it with
        $exchange = htmlspecialchars($_GET['exchange']);

        // Check if the word to change exists in $_SESSION['p']
        if (preg_match_all($pattern, $_SESSION['p'])) {
            // Replace the word in $_SESSION['p'] with the new word
            $_SESSION['p'] = preg_replace($pattern, $exchange, $_SESSION['p']);
        } else {
            echo "Word not found"; // Inform the user that the word was not found
        }
    }

    // Display the content of $_SESSION['p']
    echo $_SESSION['p'] . '<br>';
?>

<!-- Form to input the word to change and its replacement -->
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <p>Enter the word you want to change</p>
    <input type="text" name="change">
    <p>Enter the word you want to exchange</p>
    <input type="text" name="exchange">
    <input type="submit" name="submit">
</form>

</body>
</html>
