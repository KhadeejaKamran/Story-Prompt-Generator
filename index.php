<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <title>Prompt Generator</title>
</head>
<body>
 <div class="main-page">
    <div class="title">Random Prompt Generator</div>
    <nav class="genre-nav">
       <button onclick="generatePrompt('fantasy')">Fantasy</button>
       <button onclick="generatePrompt('sci-fi')">Sci-Fi</button>
       <button onclick="generatePrompt('mystery')">Mystery</button>
       <button onclick="generatePrompt('romance')">Romance</button>
       <button onclick="generatePrompt('thriller')">Thriller</button>
       <button onclick="generatePrompt('non-fiction')">Non-fiction</button>
    </nav>
    <div class="prompt-section">
        <h2>Your Creative Writing Prompt</h2>
        <div class="prompt-display"></div>
        </div>
    </div>
    
</body>
</html>

