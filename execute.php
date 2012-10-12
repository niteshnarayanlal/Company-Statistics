<?php

$uname="root";
$passwd="";

$conn=mysqli_connect("sql107.byethost8.com", "b8_11523229", "niteshis", "b8_11523229_statsdb");

$query="select location, count(location) as cntloc from companies group by location";

$res=mysqli_query($conn, $query);

$count = 0;

$rd=0;
$rn=0;
$rc=0;
$rb=0;

while($row=mysqli_fetch_assoc($res)) {
	extract($row);
	if($location=="chennai")
		$rc=$cntloc;
	if($location=="bangalore")
		$rb=$cntloc;
	if($location=="noida")
		$rn=$cntloc;
	if($location=="delhi")
		$rd=$cntloc;
}

echo "

    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\">
      google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Location', 'Number of Companies'],
          ['Noida',     $rn],
          ['Delhi',      $rd],
          ['Bangalore',  $rb],
          ['Chennai', $rc],
        ]);

        var options = {
          title: 'Locations of Companies'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	
	<div id=\"chart_div\" style=\"width: 900px; height: 500px;\"></div>

";

?>
