<?php

namespace Matomo\ReportingApi\API;

/**
  The ImageGraph.get API call lets you generate beautiful static PNG Graphs for any existing Matomo report. Supported graph types are: line plot, 2D/3D pie chart and vertical bar chart.  A few notes about some of the parameters available:<br/> - $graphType defines the type of graph plotted, accepted values are: 'evolution', 'verticalBar', 'pie' and '3dPie'<br/> - $colors accepts a comma delimited list of colors that will overwrite the default Matomo colors <br/> - you can also customize the width, height, font size, metric being plotted (in case the data contains multiple columns/metrics).  See also <a href='https://developer.matomo.org/api-reference/reporting-api-metadata#static-image-graphs'>How to embed static Image Graphs?</a> for more information.   
*/
final class ImageGraph
{
        
    public function get($idSite, $period, $date, $apiModule, $apiAction, $graphType = false, $outputType = 0, $columns = false, $labels = false, $showLegend = true, $width = false, $height = false, $fontSize = 9, $legendFontSize = false, $aliasedGraph = true, $idGoal = false, $colors = false, $textColor = 222222, $backgroundColor = 'FFFFFF', $gridColor = 'CCCCCC', $idSubtable = false, $legendAppendMetric = true, $segment = false, $idDimension = false){
        //
    }
}