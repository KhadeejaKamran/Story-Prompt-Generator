<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prompt Generator</title>
</head>
<body>
    <div>
        <div class="prompt-section">
            <h2>-- Your Creative Writing Prompt --</h2>
            <?php
            $prompt = ["Write a story where a man from the 19th century time travels to 2025. Write about his reaction to the minorities now in leaderships.", 
            "Write a scene where the villain bails out the wrongly imprisoned main character.", 
            "Write a story about a book whose events are turning into reality.", 
            "Write a scene where two strangers meet at a train station and realize they share the same recurring nightmare.", 
            "Write a short story where the detectives who have been solving a murder case end up finding a clue to a mystery that had been left unsolved 10 years ago.", 
            "Write a scene where a flower narrates its own journey as it lies on a pile of garbage.", 
            "Write the starting scene of a story where the main character wakes up to find out that they're living their dream life."];

            echo "<p class='prompt'>". $prompt[array_rand($prompt)] ."</p>";
            ?>
        </div>
    </div>
    
</body>
</html>
