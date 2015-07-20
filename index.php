<?php include 'database.php'; ?>
<?php 
    // Create Select Query
    $query = "SELECT * FROM messages";
    $result = mysqli_query($con, $query); // $con is in database.php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Nay Message Board</title>
        <link rel="stylesheet" href="css/style.css" type=""text/css"/>
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Nay Message Board</h1>
            </header>
            <div id="messages">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <li class="message"><span><?php echo $row['time_stamp']; ?>- </span> <strong><?php echo $row['user'];?></strong>: <?php echo $row['message'];?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div id="input">
                <?php if(isset($_GET['error'])) :?>
                    <div class="error"><?php echo $_GET['error']; ?> </div>
                <?php endif; ?>
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter Your Name" />
                    <input type="text" name="the_message" placeholder="Enter A Message" />
                    <br/>
                    <input type="submit" class="submit-btn" name="submit" value="Submit Message" />
                </form>
            </div>
        </div>
    </body>
</html>
