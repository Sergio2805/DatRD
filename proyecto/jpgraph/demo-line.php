<?php
include ("inc/jpgraph.php");
include ("inc/jpgraph_line.php");

$ydata = array(11, 3, 8, 12, 5, 1, 9, 13, 5, 7);
$graph = new Graph(350, 250, "auto");    
$graph->SetScale( "textlin");

$graph->img->SetMargin(40, 20, 20, 40);
$graph->title->Set("JpGraph Demo");
$graph->xaxis->title->Set("Altura" );
$graph->yaxis->title->Set("Total" );

$lineplot =new LinePlot($ydata);
$lineplot ->SetColor("blue");

$graph->Add( $lineplot);
$graph->Stroke();
?> 