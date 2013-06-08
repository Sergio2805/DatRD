<?php
include("inc/jpgraph.php");
include("inc/jpgraph_line.php");

$ydata1 = array(11, 3, 8, 12, 5, 1, 9, 13, 5, 7);
$ydata2 = array(1, 19, 15, 7, 22, 14, 5, 9, 21, 13);

$graph = new Graph(350, 250, "auto");    
$graph->SetScale( "textlin");
$graph->img->SetMargin(40, 20, 20, 40);
$graph->title->Set("JpGraph Demo");
$graph->xaxis->title->Set("Altura");
$graph->yaxis->title->Set("Total");

$lineplot1 = new LinePlot($ydata1);
$lineplot1->SetColor("blue");
$lineplot2 = new LinePlot($ydata2);
$lineplot2->SetColor("orange");

$graph->Add($lineplot1);
$graph->Add($lineplot2);
$graph->Stroke();
?> 