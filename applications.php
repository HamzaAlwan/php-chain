<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>RBK Blockchain</title>
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=K2D:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:400,700|Acme|Ubuntu|Teko|Titillium+Web" rel="stylesheet">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/resumes.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome.min.css">


</head>

<body class="container">



    <section class="applicants">
        <div class="container-fluid"> </div>

        <div id="resumes" class="row">
            <?php
                $conn = new mysqli("localhost", "root", "", "applicants");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT * FROM applications";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<ul class="text-center col-md-12 row">' .'<li class="col-md-6">' . '<span>' . "Name: " . '</span>' . $row["fullname"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "Email: " . '</span>' . $row["email"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "Phone Number: " . '</span>' . $row["phonenumber"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "Nationality: " . '</span>' . $row["nationality"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "City: " . '</span>' . $row["city"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "Coding experiance: " . '</span>' . $row["experience"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "Years of experiance: " . '</span>' . $row["yearsOfExperience"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "Currently working: " . '</span>' . $row["isWorking"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "JavaScript Level: " . '</span>' . $row["javaScript"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "OOP Level: " . '</span>' . $row["oop"] . '</li>' .
                    '<li class="col-md-6">' . '<span>' . "Github account link: " . '</span>' . $row["github"] . '</li>' .
                    '<li class="col-md-6" ' . 'onclick=' . 'getResume(' . '"' . $row["email"] . '"' . ')' . '>' . '<span>' . "Download resume: " . '</span>' . '<span class="download">' . $row["resume"] . '</span></li>' .
                    '<li id="experiance" class="col-md-12">' . '<span>' . "A brief intro about work experience: " . '</span>' . $row["about"] . '</li></ul>';
                    }
                } else {
                    echo "0 results";
                }

            ?>

        </div>
    </section>



    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <script src="js/snap.svg-min.js"></script>

    <script src="js/dm-uploader/jquery.dm-uploader.min.js"></script>

    <script src="js/resumes.js"></script>
</body>

</html>