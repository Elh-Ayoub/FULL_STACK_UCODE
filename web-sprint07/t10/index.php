<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Make square image</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1>Make square image</h1>
    <form method="post">
        <input type="text" name="url" placeholder="Image url..."><br><br>
        <input type="submit" value="GO">
    </form>
    <?php
        function SplitRGBChannels($img){
            $width = ImagesX($img);
            $height = ImagesY($img);
            $redCh = ImageCreateTrueColor($width, $height);
            $greenCh = ImageCreateTrueColor($width, $height);
            $blueCh = ImageCreateTrueColor($width, $height);

            for($row = 0; $row < $width; $row++){
                for($col = 0; $col < $height; $col++){             
                    $pixel = ImageColorAt($img, $row, $col);
                    $colors = ImageColorsForIndex($img, $pixel);
                    $toRed = ImageColorAllocate($redCh, $colors['red'], 0, 0);
                    $toGreen = ImageColorAllocate($greenCh, 0, $colors['green'], 0);
                    $toBlue = ImageColorAllocate($blueCh, 0, 0, $colors['blue']);
                    ImageSetPixel($redCh, $row, $col, $toRed);
                    ImageSetPixel($greenCh, $row, $col, $toGreen);
                    ImageSetPixel($blueCh, $row, $col, $toBlue);
                }
            }
            imagejpeg($redCh, 'red.jpeg');
            imagejpeg($greenCh, 'green.jpeg');
            imagejpeg($blueCh, 'blue.jpeg');
            imagedestroy($redCh);
            imagedestroy($greenCh);
            imagedestroy($blueCh);
        }
        if ($_POST["url"]) {
            $url = $_POST["url"];
            $image = preg_match("/\.png$/", $url) ?imagecreatefrompng($url) : imagecreatefromjpeg($url) ;
            $image = imagescale($image, 500);
            $size = min(imagesx($image), imagesy($image));
            $image2 = imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $size, 'height' => $size]);
            if ($image2 !== FALSE) {
                imagejpeg($image2, 'cropped.jpeg');
                SplitRGBChannels($image2);
                echo("<div id=\"container\">");
                echo("<img src=\"cropped.jpeg\">");
                echo("<img src=\"red.jpeg\">");
                echo("<img src=\"green.jpeg\">");
                echo("<img src=\"blue.jpeg\">");
                echo("</div>");
                imagedestroy($image2);
            }
            imagedestroy($image);
        }
    ?>
    </body>
</html>