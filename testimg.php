<?php



function caroussel(array $array, $artist, $carouselId)
{
    foreach ($array as $key => $file) {
        $path = 'artist' . DIRECTORY_SEPARATOR . "$artist" . DIRECTORY_SEPARATOR . "$file";
        $active = ($key === 0) ? 'active' : '';
        echo <<<HTML
        <div class="carousel-item $active">
            <img src="$path" class="d-block w-100" alt="art" style="width:300px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>$artist</h5>
            </div>
        </div>
HTML;
    }
}

$folder = 'artist';
$tab = scandir($folder);
unset($tab[0]);
unset($tab[1]);
$tab = array_values($tab);

function artist($tab)
{
    foreach ($tab as $key => $artist) {
        $dos = 'artist' . DIRECTORY_SEPARATOR . "$artist";
        $array = scandir($dos);
        unset($array[0]);
        unset($array[1]);
        $array = array_values($array);
        $carouselId = "carousel$key"; // Unique identifier for each carousel
?>

        <div style="width: 300px; margin:20px">
            <div id="<?php echo $carouselId; ?>" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#<?php echo $carouselId; ?>" data-slide-to="0" class="active"></li>
                    <li data-target="#<?php echo $carouselId; ?>" data-slide-to="1"></li>
                    <li data-target="#<?php echo $carouselId; ?>" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <?php caroussel($array, $artist, $carouselId); ?>
                </div>

                <button class="carousel-control-prev" type="button" data-target="#<?php echo $carouselId; ?>" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#<?php echo $carouselId; ?>" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
<?php
    }
}
?>

