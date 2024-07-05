<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $url = $_POST['url'];
    $headline = $_POST['headline'];
    $image = $_POST['image'];
    $author = $_POST['author'];
    $authorUrl = $_POST['authorUrl'];
    $publisher = $_POST['publisher'];
    $publisherLogo = $_POST['publisherLogo'];
    $publishDate = $_POST['publishDate'];
    $modifiedDate = $_POST['modifiedDate'];

    $schema = [
        "@context" => "https://schema.org",
        "@type" => $type,
        "url" => $url,
        "headline" => $headline,
        "image" => $image,
        "author" => [
            "@type" => "Person",
            "name" => $author,
            "url" => $authorUrl
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => $publisher,
            "logo" => $publisherLogo
        ],
        "datePublished" => $publishDate,
        "dateModified" => $modifiedDate
    ];

    echo '<pre>' . json_encode($schema, JSON_PRETTY_PRINT) . '</pre>';
}
?>
