<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body class="container">

        <div>
            <br>
            <h2>Raspotify Controlpanel</h1>
        </div>
        <br>
        <h3>
        Aktuelle Lautstärke-Settings:
        </h3>
        <code>
        <?php
            $output = shell_exec('sudo amixer');
            echo "$output";
        ?>
        </code>
        <br>
        <div class="btn-group" role="group" aria-label="Grundlautstärke">
            <form action="command.php" method="post">
            <br>
            <h4>Grundlautstärke:</h4>
                <input type="submit" class="btn btn-secondary" name="lauter" value="+"></input>
                <input type="submit" class="btn btn-secondary" name="leiser" value="-"></input>
            </form>
        </div>
            
            <h3>Raspotify-Service</h3>
            <h4>Letzte 5 Status-Ausgaben:</h4><code>
            <?php
            $status = shell_exec('sudo journalctl --unit=raspotify.service -n 5 --no-pager');
            echo "$status";
            ?>
            </code><br>
            <br>
        <div class="btn-group" role="group" aria-label="Raspotify-Service">
            <form action="command.php" method="post">
            <h4>Service neustarten:</h4>
                <input type="submit" class="btn btn-secondary" name="servicerestart" value="Raspotify neustarten"></input>
            </form>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Pi neustarten</h3>
                </div>
                <p class="card-text">Gesamten RaspberryPI neu starten.</p>
                <form action="command.php" method="post">
                    <input type="submit" class="btn btn-warning" name="pi-restart" value="Neu starten..."></input>
                </form>
            </div>
        
        </div>
        <br>
    </body>
</html>
