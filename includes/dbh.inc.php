<?php



// $servername = "198.57.247.226";
// $dBUsername = "saturn";
// $dBPassword = "r-T%ga-YP8JQ";
// $dBName = "saturn_site";

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "saturn";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}