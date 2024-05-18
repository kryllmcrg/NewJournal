<!-- news_preview_template.php -->
<!DOCTYPE html>
<html>
<head>
    <title>News Preview</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            background-color: #f7f7f7; /* Light gray background */
            padding: 20px;
        }
        .preview-container {
            border: 1px solid #333; /* Dark border */
            padding: 20px;
            background-color: #fff; /* White background */
            max-width: 800px; /* Set a maximum width for the container */
            margin: 0 auto; /* Center the container */
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 36px;
            margin: 0;
        }
        .header p {
            font-size: 18px;
            margin: 0;
            color: #666;
        }
        .preview-title {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333; /* Dark color for title */
            text-align: center; /* Center the title */
            text-transform: uppercase;
        }
        .preview-author {
            font-style: italic;
            font-size: 16px;
            color: #666;
            margin-bottom: 5px;
            text-align: center; /* Center the author */
        }
        .preview-date {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
            text-align: center; /* Center the publication date */
        }
        .preview-content {
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
            column-count: 2;
            column-gap: 40px;
            margin-bottom: 20px;
        }
        .preview-image {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            border-top: 2px solid #333;
            padding-top: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="preview-container">
        <div class="header">
            <h1>Daily News</h1>
            <p>Your trusted source for the latest news</p>
        </div>
        <h1 class="preview-title"><?= $title ?></h1>
        <p class="preview-author">By <?= $author ?></p>
        <p class="preview-date">Publication Date: <?= $publication_date ?></p>
        <div class="preview-content"><?= $content ?></div>
        <?php foreach ($images as $image): ?>
            <img class="preview-image" src="<?= $image ?>" alt="">
        <?php endforeach; ?>
        <div class="footer">
            <p>© 2024 Daily News. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
