<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <title>EVENTS</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" text="text/css" href="dashboard.css">
    </head>

    <body>
        <div class="navigation">
            <ul>
                <li>
                <div class="logo">
                        <img src="logo.png" alt="">
                    </div>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="event_types.php">
                        <span class="icon"><i class="fa fa-empire" aria-hidden="true"></i></i></span>
                        <span class="title">Events</span>
                    </a>
                </li>
                <li>
                    <a href="services.php">
                        <span class="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></i></span>
                        <span class="title">Services</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                        <span class="title">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
        <h1>REVIEWS</h1>
        <div class="feedback-btn">
            <button class="feedback"><a href="feedbackforms.php">Give Feedback</a></button>
        </div>
        <?php
    include 'config.php';
    $query = "SELECT * FROM feedback";
    $query_run = mysqli_query($conn, $query) or die("Query Unsuccessful."); 
    $check_events = mysqli_num_rows($query_run) > 0 ;

    if($check_events)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <div class="event_list">
                <div class="view_item" style="height:160px;">
                    <div class="left_view" style="margin-left: 20px; margin-right:10px;">
                        <h3>NAME : <?php echo $row['NAME']; ?></h3>
                        <P>EVENT CODE : <?php echo $row['EVENT_NAME']; ?></P>
                        <P>SERVICE_ID : <?php echo $row['SERVICE_ID']; ?></P>
                    </div>
                    <div class="right_view">
                        <p class="content"><?php echo $row['MESSAGE']; ?>
                        </p>
                        <p style="marging-bottom: -10px;">RATING : <?php echo $row['RATING']?>/5</p>
                    </div>
                </div>
            </div>
        <?php 
        }
    }
    else {
        echo "NO EVENTS FOUND";
    }
    mysqli_close($conn)
    ?>
    </div>
    </body>
</html>