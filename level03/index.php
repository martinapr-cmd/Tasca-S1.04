<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Catalogue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <?php

    require_once 'classes/Cinema.php';
    require_once 'classes/Movie.php';

    $m1 = new Movie("The House of 1000 Corpses", 90, "Rob Zombie");
    $m2 = new Movie("Spirited Away", 125, "Hayao Miyazaki");
    $m3 = new Movie("Porco Rosso", 94, "Hayao Miyazaki");
    $m4 = new Movie("Tekkonkinkreet", 110, "Michael Arias");

    $c1 = new Cinema("Cinesa", "Barcelona");
    $c2 = new Cinema("Yelmo", "Madrid");

    $cinemas = [$c1, $c2];

    $c1->addMovie($m1);
    $c1->addMovie($m2);

    $c2->addMovie($m3);
    $c2->addMovie($m4);

    //SEARCH FUNCTION:
    function searchByDirector($cinemas, $directorName)
    {
        $results = [];

        foreach ($cinemas as $cinema) {
            foreach ($cinema->getMovies() as $movie) {
                if (strcasecmp($movie->getDirector(), $directorName) === 0) {
                    $results[$movie->getTitle()] = $movie;
                }
            }
        }
        return array_values($results);
    }

    $searchResults = searchByDirector($cinemas, "Hayao Miyazaki");

    //DISPLAY:
    foreach ($cinemas as $cinema) {
        echo "<div class='cinema'>";
        echo "<h2>" . $cinema->getName() . " (" . $cinema->getCity() . ")</h2>";
        echo "<ul>";

        foreach ($cinema->getMovies() as $movie) {
            echo "<li><strong>" . $movie->getTitle() . "</strong> - "
                . $movie->getMinutes() . " min, by "
                . $movie->getDirector() . "</li>";
        }
        echo "</ul>";

        $longest = $cinema->getLongestMovie();
        echo "<p><em>Longest Movie:</em> " . $longest->getTitle() . "</p>";
        echo "</div>";
    }


    echo "<div class='cinema'>";
    echo "<h2>Movies by Hayao Miyazaki</h2>";
    echo "<ul>";
    foreach ($searchResults as $movie) {
        echo "<li><strong>" . $movie->getTitle() . "</strong> - "
            . $movie->getMinutes() . " min</li>";
    }
    echo "</ul>";
    echo "</div>";
    ?>


</body>

</html>