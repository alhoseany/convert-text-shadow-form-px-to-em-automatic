<?php
$input ="
rgb(255, 255, 255) 7px 0px 0px, rgb(255, 255, 255) 6.93333px 1px 0px, rgb(255, 255, 255) 6.71667px 1.96667px 0px, rgb(255, 255, 255) 6.36667px 2.91667px 0px, rgb(255, 255, 255) 5.88333px 3.78333px 0px, rgb(255, 255, 255) 5.28333px 4.58333px 0px, rgb(255, 255, 255) 4.58333px 5.3px 0px, rgb(255, 255, 255) 3.78333px 5.88333px 0px, rgb(255, 255, 255) 2.9px 6.36667px 0px, rgb(255, 255, 255) 1.96667px 6.71667px 0px, rgb(255, 255, 255) 1px 6.93333px 0px, rgb(255, 255, 255) 0px 7px 0px, rgb(255, 255, 255) -1px 6.93333px 0px, rgb(255, 255, 255) -1.98333px 6.71667px 0px, rgb(255, 255, 255) -2.91667px 6.36667px 0px, rgb(255, 255, 255) -3.78333px 5.88333px 0px, rgb(255, 255, 255) -4.58333px 5.28333px 0px, rgb(255, 255, 255) -5.3px 4.58333px 0px, rgb(255, 255, 255) -5.9px 3.78333px 0px, rgb(255, 255, 255) -6.36667px 2.9px 0px, rgb(255, 255, 255) -6.71667px 1.96667px 0px, rgb(255, 255, 255) -6.93333px 0.983333px 0px, rgb(255, 255, 255) -7px -0.0166667px 0px, rgb(255, 255, 255) -6.93333px -1px 0px, rgb(255, 255, 255) -6.71667px -1.98333px 0px, rgb(255, 255, 255) -6.36667px -2.91667px 0px, rgb(255, 255, 255) -5.88333px -3.8px 0px, rgb(255, 255, 255) -5.28333px -4.6px 0px, rgb(255, 255, 255) -4.58333px -5.3px 0px, rgb(255, 255, 255) -3.76667px -5.9px 0px, rgb(255, 255, 255) -2.9px -6.36667px 0px, rgb(255, 255, 255) -1.96667px -6.71667px 0px, rgb(255, 255, 255) -0.983333px -6.93333px 0px, rgb(255, 255, 255) 0.0166667px -7px 0px, rgb(255, 255, 255) 1.01667px -6.93333px 0px, rgb(255, 255, 255) 1.98333px -6.71667px 0px, rgb(255, 255, 255) 2.91667px -6.36667px 0px, rgb(255, 255, 255) 3.8px -5.88333px 0px, rgb(255, 255, 255) 4.6px -5.28333px 0px, rgb(255, 255, 255) 5.3px -4.56667px 0px, rgb(255, 255, 255) 5.9px -3.76667px 0px, rgb(255, 255, 255) 6.36667px -2.9px 0px, rgb(255, 255, 255) 6.71667px -1.95px 0px, rgb(255, 255, 255) 6.93333px -0.983333px 0px;
";

preg_match_all('/[+-]?(\d*\.)?\d+/', $input, $matches);
// print_r($matches);
$are = array();
$px = 387.98;
foreach ($matches[0] as $matche) {
    if ($matche != 255) {
        $i= ($matche / $px);
        $are[$i.'em'] = $matche.'px';
    }
}

echo '<h2>Input</h2>';
echo '<pre>'.$input.'</pre>' ;

echo "<pre>";
Print_r($are);
echo "</pre>";

foreach ($are as $key => $value) {
    $input  = str_replace( $value , $key  , $input);
}
echo '<br><h2>Ouput</h2>';
echo '<pre>'.$input.'</pre>' ;
?>
