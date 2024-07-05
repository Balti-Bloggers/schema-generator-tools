<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $name = $_POST['name'] ?? 'N/A';
    $jobTitle = $_POST['jobTitle'] ?? 'N/A';
    $telephone = $_POST['telephone'] ?? 'N/A';
    $email = $_POST['email'] ?? 'N/A';
    $url = $_POST['url'] ?? 'N/A';

    $personSchema = [
        "@context" => "http://schema.org",
        "@type" => "Person",
        "name" => $name,
        "jobTitle" => $jobTitle,
        "telephone" => $telephone,
        "email" => $email,
        "url" => $url
    ];

    // Set header to output as JSON-LD
    header("Content-Type: application/ld+json");
    echo json_encode($personSchema, JSON_PRETTY_PRINT);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person Schema Generator</title>
</head>
<body>
    <h1>Person Schema Generator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="jobTitle">Job Title:</label>
        <input type="text" id="jobTitle" name="jobTitle"><br><br>

        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="url">Website URL:</label>
        <input type="url" id="url" name="url"><br><br>

        <button type="submit">Generate Schema</button>
    </form>
</body>
</html>
