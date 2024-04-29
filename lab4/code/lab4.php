<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Lab4 </title>
</head>
<body>
    <div id="form">
        <form method="post" action="save.php">
            <label for="email"> Email </label>
            <input type = "email" name="email" required>

            <label for = "category"> Category </label>
            <select name="category" required>
                <?php
                require __DIR__ . "/vendor/autoload.php";
                $client = new Google_Client();
                $client->setApplicationName('Google and PHP');
                $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
                $client->setAccessType('offline');
                $client->setAuthConfig(__DIR__ . "/creditionals.json");
                $service = new Google_service_Sheets($client);
                $spreadsheetId = "1dOHfiUnAJXXBqVvkyTsfsBiYEZ8IITQxWdY23o3FGiw";


                $types = ['cars', 'people', 'phones', 'other'];


                for($i = 0; $i < sizeof($types); $i++){
                    echo "<option value = $types[$i]> $types[$i]</option>";
                }

                $range = "Лист1";
                $response = $service->spreadsheets_values->get($spreadsheetId,$range);
                $values = $response->getValues();

                ?>
            </select>

            <label for="title"> Title </label>
            <input type="text" name="title" required>

            <label for="title"> Description </label>
            <textarea rows="5" name="description"> </textarea>

            <input type = "submit" value="confirm">
        </form>
    </div>

    <div id="table">
        <table>
            <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            </thead>

            <tbody>
            <?php
            foreach ($values as $i){
                echo "<tr>";
                foreach($i as $j){
                    echo "<td>$j</td>";
                }
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>