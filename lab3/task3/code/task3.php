<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Task_3 </title>
</head>
<body>
    <div id="form">
        <form method="post" action="save.php">
            <label for="email"> Email </label>
            <input type = "email" name="email" required>

            <label for = "category"> Category </label>
            <select name="category" required>
                <?php
                $directories = scandir("./categories");
                for($i = 2; $i < count($directories); $i++){
                    echo "<option value = $directories[$i]> $directories[$i] </option>";
                }
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
            $directories = scandir("./categories");
            for ($i = 2; $i < count($directories); $i++){
                $titles = scandir("./categories/$directories[$i]");
                for($j = 2; $j < count($titles); $j++){
                    $files = file("./categories/$directories[$i]/$titles[$j]");

                    echo "<tr>";
                    echo "<td>$directories[$i]</td>";
                    $newTitle = str_replace(".txt","",$titles[$j]);
                    echo "<td>$newTitle</td>";
                    echo "<td>$files[0]</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>