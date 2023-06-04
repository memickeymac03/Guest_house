<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guest_house";
$sz = 0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 'Room-No' FROM `booking` WHERE `Guest-House-No` = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $sz = count($row);
    }
} else {
    echo "0 results";
}
echo "Result";
echo $sz;
$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <style>
        .rooms {
            border: 1px solid black;
            text-decoration: none;
            color: white !important;
            background-color: red;
            white-space: nowrap;
            padding: 18px;
        }

        .rooms:hover {
            padding: 22px;
            box-shadow: 0 0 10px blue;
        }

        .g-1 {
            background-color: rgba(0, 0.5, 0, 0.2);
        }
        .g-2{
            background-color: rgba(0, 0.5, 0, 0.2);
            display: none;
        }

        h1 {
            color: #00008b;
        }

        .gh {
            margin: 1vh auto;
            text-align: center;
        }

        @media screen and (max-width: 900px){
            .gh{
                display: flex;
                width: 50%;
                justify-content: center;
            }
            
            .g-2{
                display: block;
            }

            .g-1{
                display: none;
            }
        }
    </style>
</head>

<body>
    <div style="display: flex;">

        <img style="height: 18vh;" src="1200px-SAIL_Logo.svg.png" alt="">
        <h1 style="width: 100%;" class="p-5 bg-dark-subtle text-primary-emphasis text-center">SAIL GUEST HOUSE PORTAL
        </h1>
    </div>
    <div class="g-1 m-3 p-4">
        <h1 class="text-center p-4">Guest House 1</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="a4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a6">Room 6</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a7">Room 7</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a8">Room 8</button></div>
        </div>
        <div class="row gx-0">
            <div class="col-sm-1 gh"><button class="rooms" id="a9">Room 9</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a10">Room 10</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a11">Room 11</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a12">Room 12</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a14">Room 14</button></div>
        </div>
    </div>

    <div class="g-1 m-3 p-4">
        <h1 class="text-center p-4">Guest House 2</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="b1">Room 1</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b2">Room 2</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b3">Room 3</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b5">Room 5</button></div>
        </div>
        <div class="row gx-0">
            <div class="col-sm-1 gh"><button class="rooms" id="b6">Room 6</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b7">Room 7</button></div>
            <div class="col-sm-1 gh"></div>
            <div class="col-sm-1 gh"></div>
            <div class="col-sm-1 gh"></div>
        </div>
    </div>

    <div class="g-1 m-3 p-4">
        <h1 class="text-center">Guest House 3</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="c1">Room 1</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c2">Room 2</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c3">Room 3</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
        </div>
        <div class="row gx-0">
            <div class="col-sm-1 gh"><button class="rooms" id="c6">Room 6</button></div>
            <div class="col-sm-1 gh"></div>
            <div class="col-sm-1 gh"></div>
            <div class="col-sm-1 gh"></div>
            <div class="col-sm-1 gh"></div>
        </div>
    </div>

    <div class="g-1 m-3 p-4">
        <h1 class="text-center">Guest House 4</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="c1">Room 1</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c2">Room 2</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c3">Room 3</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 6</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 7</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 8</button></div>
        </div>
        <div class="row gx-0">
            <div class="col-sm-1 gh"><button class="rooms" id="c6">Room 6</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c7">Room 7</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c8">Room 8</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c9">Room 9</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 10</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 11</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 12</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 13</button></div>
        </div>
    </div>

    <div class="g-1 m-3 p-4">
        <h1 class="text-center">Guest House 5</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="c1">Room 1</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c2">Room 2</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c3">Room 3</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
        </div>
        <div class="row gx-0">
            <div class="col-sm-1 gh"><button class="rooms" id="c6">Room 6</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c7">Room 7</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c8">Room 8</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c9">Room 9</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 10</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 10</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 10</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 10</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c10">Room 10</button></div>
        </div>
    </div>


    <div class="g-2 m-3 p-4">
        <h1 class="text-center p-4">Burnpur House</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="a4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a6">Room 6</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a7">Room 7</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a8">Room 8</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a9">Room 9</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a10">Room 10</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a11">Room 11</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a12">Room 12</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="a14">Room 14</button></div>
        </div>
    </div>

    <div class="g-2 m-3 p-4">
        <h1 class="text-center p-4">Guest House 2</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="b1">Room 1</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b2">Room 2</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b3">Room 3</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b6">Room 6</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="b7">Room 7</button></div>
            <div class="col-sm-1 gh"></div>
            <div class="col-sm-1 gh"></div>
            <div class="col-sm-1 gh"></div>
        </div>
    </div>

    <div class="g-2 m-3 p-4">
        <h1 class="text-center">Guest House 3</h1>
        <div class="row gx-0 ">
            <div class="col-sm-1 gh"><button class="rooms" id="c1">Room 1</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c2">Room 2</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c3">Room 3</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c4">Room 4</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c5">Room 5</button></div>
            <div class="col-sm-1 gh"><button class="rooms" id="c6">Room 6</button></div>
        </div>
    </div>

    <button type="button"
        onclick="document.querySelectorAll('button').forEach(button => button.style.backgroundColor = 'blue')">
        Click Me!</button>

    <script>
        function f1() {

        }
    </script>


</body>

</html>