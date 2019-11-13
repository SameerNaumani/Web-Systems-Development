<?php
    $name = $_POST['name'];
    $mult = $_Post['number'];

    $output = '';
    $output .= '<!DOCTYPE html>';
    $output .= '<html lang="en">';
    $output .= '<head>';
    $output .= '<meta charset="UTF-8">';
    $output .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    $output .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
    $output .= '<meta name="author" content="Sameer Naumani">';

    $output .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">';

    $output .= '<title>Multiplication Table</title>';
    $output .= '</head>';
    $output .= '<body>';
    $output .= '<div class="container">';
    $output .= '<h3>Hello '.$name.'</h3>';
    $output .= '<h4>This is your input '.$mult.'</h4>';
    $output .= '<h5> Your table is below.</h5>';
     $output .= '<table>';
     $rows = $mult+1;
     $cols = $mult+1;
    for ($r = 1; $r < $rows; $r++)
    {
      $output .='<tr>';
      for ($c = 1; $c < $cols; $c++)
      {
        $output .= '<td>' .$c*$mult.'</td>';
      }
      $output .= '</tr>';
    }
    $output .= '</table>';
    $output .= '</div>';
    $outpt .=  '</body>';
    $output .= '</html>';
    echo $output;
  ?>