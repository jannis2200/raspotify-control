<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body class="container">
        <br>
        <?php

            if(isset($_POST['lauter'])){
                $output = shell_exec('sudo amixer sset PCM 500+');
                echo "Lautstärke erhöht!";
                echo "<strong>Neue aMixer-Settings:</strong><br><code>";
                echo "$output</code>";
            }

            if(isset($_POST['leiser'])){
                $output = shell_exec('sudo amixer sset PCM 500-');
                echo "Lautstärke gesenkt!";
                echo "<strong>Neue aMixer-Settings:</strong><br><code>";
                echo "$output</code>";
            }

            if(isset($_POST['servicerestart'])){
                $restart = shell_exec('sudo systemctl restart raspotify');
                echo "<h2>Service neugestartet.</h2>";
                echo "<strong>Ausgabe:</strong><br><code>";
                echo "$restart</code>";
            }

            
        ?>
        <br>
        <a href="index.php"><button type="button" class="btn btn-secondary">Zurück</button></a>
    </body>
</html>