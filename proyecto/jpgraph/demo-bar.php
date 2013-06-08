<?php
include("inc/jpgraph.php");
include("inc/jpgraph_bar.php");

$ydata = array(11, 3, 8, 12, 5, 1, 9, 13, 5, 7);
$graph = new Graph(350, 250, "auto");    
$graph->SetScale("textlin");

$graph->img->SetMargin(40, 20, 20, 40);
$graph->title->Set("JpGraph Demo");
$graph->xaxis->title->Set("Altura" );
$graph->yaxis->title->Set("Total" );

$barplot =new BarPlot($ydata);
$barplot->SetColor("orange");

$graph->Add($barplot);
$graph->Stroke();
?> 