<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <h1>Sky Sights</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">:)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only ">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="aboutus.html ">About Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="charters.html">Charters</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="staffdirectory.html">Staff Directory</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="licenses.html">License + Certification</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="erm.html ">Project Model ERM</a>
                </li>


            </ul>

        </div>
    </nav>
</head>

<body>
    <h1>Charters</h1>
    <div id="charter-search-container">
        <label class="search" for="Charter-Search">Search for Charter Information:</label>
        <input type="text" id="Charter-Search" placeholder="Enter Customer Number">
    </div>

    <div id="charter-results">
        <!-- results displayed here -->
    </div>
    <br><br><br>
    </div>
</body>
</html>

<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "final";


$con = mysqli_connect($server, $user, $pw, $db);
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit;
}
$result = mysqli_query($con,"INSERT INTO charter_trips (`CHA_NUM`, `CUS_ACC_NUM`, `PLANE_NUM`,
 `CHA_START`, `CHA_END`, `CHA_WAIT`, `CHA_DEST`, `CHA_PILOT`, `CHA_CREW_TOT`, `CHA_DISTANCE`, 
 `CHA_FUEL_CONS`, `CHA_SPECIAL`) 
 VALUES ('$_GET[cha_num]', '$_GET[cus_acc_num]', '$_GET[plane_num]', '$_GET[cha_start]', '$_GET[cha_end]',
 '$_GET[cha_wait]', '$_GET[cha_dest]', '$_GET[cha_pilot]', '$_GET[cha_crew_tot]',
 '$_GET[cha_distance]', '$_GET[cha_fuel_consumption]', '$_GET[cha_misc]')");




/*"INSERT INTO charter_trips(CHA_NUM,CHA_DEST,CHA_START,CHA_END,PLANE_NUM,CHA_PILOT,
	CHA_DISTANCE,CHA_FUEL_CONS,CHA_SPECIAL,CHA_WAIT,CHA_CREW_TOT,CUS_ACC_NUM)
	VALUES ('$_GET[cha_num]', '$_GET[cha_dest]', '$_GET[cha_start]', '$_GET[cha_end]',
	'$_GET[plane_num]', '$_GET[cha_pilot]', '$_GET[cha_distance]', '$_GET[cha_fuel_consumption]',
	'$_GET[cha_misc]', '$_GET[cha_wait]', '$_GET[cha_crew_tot]', '$_GET[cus_acc_num]')");*/
if($result)
{
echo "Success";

}
else
{
echo "Error";

}
//echo "hello world";
echo "'$_GET[cha_num]', '$_GET[cha_dest]', '$_GET[cha_start]', '$_GET[cha_end]',
	'$_GET[plane_num]', '$_GET[cha_pilot]', '$_GET[cha_distance]', '$_GET[cha_fuel_consumption]',
	'$_GET[cha_misc]', '$_GET[cha_wait]', '$_GET[cha_crew_tot]', '$_GET[cus_acc_num]')";



mysqli_close($con);

?>