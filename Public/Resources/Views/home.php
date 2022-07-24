<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentinela - Home Page</title>
</head>
<body>
    
    <main>

        <form method="POST">
            <input type="text"name="summonersName" placeholder="Summoner's name">
            <input type="hidden" name="action" value="ok">
            <button>Search</button>
        </form>

        <?php
            use App\Models\SummonerModel;

            if(isset($_POST['action'])) {
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);


                $summonersName = $_POST['summonersName'];
                $result = SummonerModel::find($summonersName);
                $result = json_decode($result);
                foreach($result as $key => $value) {
                    echo "<ul><li>".$key." : ".$value."</li></ul>"; 
                };
            }
        ?>

    </main>

</body>
</html>