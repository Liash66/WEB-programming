<?php
$path = 'categories/';

function getCategories(string $path): array
{
    $dir = opendir($path);
    $categories = array();
    while ($file = readdir($dir)) {
        if (is_dir($path . $file) && $file != '.' && $file != '..')
            $categories[] = $file;
    }
    closedir($dir);
    return $categories;
}

function getTitles(string $path): array
{
    $titlesName = array();
    $files = scandir($path);
    foreach ($files as $file) {
        if ($file == '.' || $file == '..')
            continue;
        else
            $titlesName[] = substr($file, 0, strlen($file) - strlen('.txt'));
    }
    return $titlesName;
}

?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Avito</title>
    </head>
    <body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="category">Category</label>
            <select name="category" required>
                <?php
                $categories = getCategories($path);
                foreach ($categories as $category) {
                    echo "<option value='$category'>$category</option>";
                }
                ?>
            </select>

            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="title">Description</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="Save">
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
            foreach ($categories as $category) {
                $titles = getTitles($path . $category);
                foreach ($titles as $title) {
                    echo "<tr>";
                    echo "<td>" . $category . "</td>";
                    echo "<td>" . $title . "</td>";
                    echo "<td>" . file_get_contents($path . $category . '/' . $title . '.txt') . " </td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    </body>
</html>