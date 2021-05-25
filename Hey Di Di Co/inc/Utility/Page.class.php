<?php

class Page {
    public static $title = "Hey Di Di Co";

    static function header() { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>

        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title><?php echo self::$title;?></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile Specific Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">

        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="icon" type="image/png" href="images/favicon.png">

        </head>
        <body>

        <!-- Primary Page Layout
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="container">
            <div class="row">
            <div class="one-half column" style="margin-top: 25%">
                <h4><?php echo self::$title;?></h4>
    <?php }

    static function footer() { ?>

            </div>
            </div>
        </div>

        <!-- End Document
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        </body>
        </html>
    <?php }

    static function listProducts($productData) {
        echo '<table class="u-full-width">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Weight Measurements</th>
                    <th>Length</th>
                    <th>Length Measurements</th>
                    <th>Width</th>
                    <th>Width Measurements</th>
                    <th>Height</th>
                    <th>Height Measurements</th>
                    </tr>
                </thead>
                <tbody>';

                foreach ($productData as $product) {
                    echo '<tr>
                    <td>'. $product->getName().'</td>
                    <td>'. $product->getWeight().'</td>
                    <td>'. $product->getWeightMeasure().'</td>
                    <td>'. $product->getLength().'</td>
                    <td>'. $product->getLengthMeasure().'</td>
                    <td>'. $product->getWidth().'</td>
                    <td>'. $product->getWidthMeasure().'</td>
                    <td>'. $product->getHeight().'</td>
                    <td>'. $product->getHeightMeasure().'</td>
                    </tr>';
                }
        echo '<A HREF="'.$_SERVER["PHP_SELF"].'?action=addProduct"><button>Add Product</button></A>';
    }

    static function showAddForm() {?>
        <form method = "POST" ACTION ="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="row">
          <div class="six columns">
            <label for="Name">Name</label>
            <input class="u-full-width" type="text" placeholder="Product Name" id="name" name="name">
            <label for="Weight">Weight</label>
            <input class="u-full-width" type="text" placeholder="Product Weight" id="weight" name="weight">
            <select id="weightMeasure" name="weightMeasure">
                <option value="kg">kg</option>
                <option value="g">g</option>
            </select>
            <label for="Length">Length</label>
            <input class="u-full-width" type="text" placeholder="Product Length" id="length" name="length">
            <select id="lengthMeasure" name="lengthMeasure">
                <option value="cm">cm</option>
                <option value="xm">xm</option>
            </select>
            <label for="Width">Width</label>
            <input class="u-full-width" type="text" placeholder="Product Width" id="width" name="width">
            <select id="widthMeasure" name="widthMeasure">
                <option value="cm">cm</option>
                <option value="xm">xm</option>
            </select>
            <label for="Height">Height</label>
            <input class="u-full-width" type="text" placeholder="Product Height" id="height" name="height">
            <select id="heightMeasure" name="heightMeasure">
                <option value="cm">cm</option>
                <option value="xm">xm</option>
            </select>
            
          </div>
          
          </div>
        </div>
        
        <input class="button-primary" type="submit" value="Submit">
      </form>
    <?php }
}

?>