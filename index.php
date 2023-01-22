<?php
require_once "./classes/Movie.php";

$firstmovie = new Movie("The Prestige","Christopher Nolan","Christian Bale, Hugh Jackman, Scarlett Johansson,Michael Caine , Piper Perabo","2006","Drama/Mistery/Sci-Fi");
$secondmovie = new Movie("Interstellar","Matthew McConaughey","Anne Hathaway , Jessica Chapstain, Mackenzie Foy , John Lithgow ","2014","Drama/Sci-Fi");
?>

<h2>First Movie</h2>
<h3>Title: <?php
echo $firstmovie->getTitle();
?> </h3> <h3>Director: <?php
echo $firstmovie->getDirector();
?> </h3> <h3>Main Cast: <?php
echo $firstmovie->getMaincast();
?> </h3> <h3>Year: <?php
echo $firstmovie->getYear();
?> </h3> <h3>Genre: <?php
echo $firstmovie->getGenre();
?>

<h2>Second Movie</h2>
<h3>Title: <?php
echo $secondmovie->getTitle();
?> </h3> <h3>Director: <?php
echo $secondmovie->getDirector();
?> </h3> <h3>Main Cast: <?php
echo $secondmovie->getMaincast();
?> </h3> <h3>Year: <?php
echo $secondmovie->getYear();
?> </h3> <h3>Genre: <?php
echo $secondmovie->getGenre();

?>