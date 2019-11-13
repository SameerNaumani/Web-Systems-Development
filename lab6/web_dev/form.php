<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags --> 
         <meta charset="utf-8"/>
        <meta name="author" content="Sameer Naumani"/>
        <meta name="viewport" content="width=device.width, initial-scale=1">
        <meta name="description" content="CPS530 Lab2">
        <!-- My CSS style sheet-->
        <link rel="stylesheet" href="style.css">
        <link href="form_styles.css" rel="stylesheet">
        <!-- Title -->
        <title>Sameer Naumani</title>
        <style>
            html, body {
                font-family: Roboto, sans-serif;
                font-size: 20px;
                text-align: center;
            }
            div.image {
            margin: 10px;
            border: 1px solid #ccc;
            float: left;
            width: 350px;
            }
            div.desc {
            padding: 10px;
            text-align: center;
        }
        </style>
    </head>

    <body>
        <h1>My Images</h1>
        <?php
            $server = "localhost";
            $username = "";
            $password = "";
            $database = "";
            $connection = mysqli_connect($server, $username, $password, $database);
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error() . "<br>");
            }

            //From lecture slides
            $sql = "CREATE TABLE MyTable (
            id INT AUTO_INCREMENT PRIMARY KEY,
            subject VARCHAR(50) NOT NULL,
            location VARCHAR(50) NOT NULL,
            date_taken VARCHAR(50) NOT NULL,
            url VARCHAR(300) NOT NULL
            )";
                    
            if (mysqli_query($connection, $sql)) {
                echo "Table created successfully.<br>";
                } 
                else {
                        echo "Error: " . mysqli_error($connection) . ".<br>";
                    }
            
            $sql = "INSERT INTO MyTable (subject, location, date_taken, url)
            
            VALUES ('Toronto Maple Leafs', 'Toronto', '2019-10-05', 'https://www.sportsnet.ca/wp-content/uploads/2019/04/matthews1_1280-1040x572.jpg'),
            ('CN Tower', 'Toronto', '2019-11-4', 'https://assets.simpleviewinc.com/simpleview/image/upload/c_fit,w_1000,h_1000/crm/toronto/Summer-2015-Skyline0_5e954389-5056-a36f-234589b46e9b25ae.jpg'),
            ('Raptors Championship', 'Toronto', '2019-04-14', 'https://www.tsn.ca/polopoly_fs/1.1320247!/fileimage/httpImage/image.jpg_gen/derivatives/landscape_620/toronto-raptors-win-nba-championship.jpg'),
            ('banff', 'Alberta', '2018-02-17', 'https://www.canadavisa.com/images/banff.jpg'),
            ('Blue Mountain', 'Ontario', '2017-05-24', 'https://r-cf.bstatic.com/images/hotel/max1024x768/701/70106432.jpg')";
            
            if (mysqli_multi_query($connection, $sql)) {
                echo "Success";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
            }
            $sql = "SELECT * FROM MyTable ORDER BY date_taken";
            $result = mysqli_query($connection, $sql);
            $rows = mysqli_num_rows($result);
            echo "<h2>Images in database sorted by date:</h2>";
            if ($rows > 0) {
                echo '<table cellpadding="6" border="0" align="center">
                <tr>
                <td><b>Date Taken</b></td>
                <td><b>Subject</b></td>
                <td><b>Location</b></td>
                </tr>';
                while($row = mysqli_fetch_assoc($result)) {
                    $imgID = $row["id"];
                $subject = $row["subject"];
                $location = $row["location"];
                $imgDate = $row["date_taken"];
                $imgUrl = $row["url"];
                echo '<tr>
                <td>'.$imgDate.'</td>
                <td>'.$subject.'</td>
                    <td>'.$location.'</td>
                </tr>';
                }
                echo '</table>';
            } else {
                echo "No results found.<br>";
            }
            $sql = "SELECT * FROM MyTable WHERE location='Toronto'";
            $result = mysqli_query($connection, $sql);
            $rows = mysqli_num_rows($result);
            echo "<br><h2>Images of Toronto:</h2>";
            if ($rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $imgUrl = $row["url"];
                    $subject = $row["subject"];
                    $location = $row["location"];
                    echo "<div class='image'>";
                    echo "<img src='$imgUrl' height='300'>";
                    echo "<div class='desc'><b>Subject:</b> $subject<br><b>Location:</b> $location</div>";
                    echo "</div>";
                }
            } else {
                echo "No results found.<br>";
            }
            $sql = "DROP TABLE MyTable";
                if (mysqli_query($connection, $sql)) {
                echo "Table dropped";
                } else {
                echo 'Error dropping database: ' . mysqli_error() . "<br>";
                }
            echo "<br>";
            mysqli_close($connection);
        ?>
    </body>
</html>