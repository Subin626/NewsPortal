<?php
// Sample news data with priority
$newsArticles = array(
    array("title" => "Health", "priority" => 3),
    array("title" => "Sports", "priority" => 2),
    array("title" => "Entertainment", "priority" => 5),
    array("title" => "Politics", "priority" => 1),
    array("title" => "Education", "priority" => 4)
);

// Function to perform priority scheduling
function priorityScheduling($newsArray) {
    // Sort news articles based on priority in descending order
    usort($newsArray, function($a, $b) {
        return $b['priority'] - $a['priority'];
    });
    
    return $newsArray;
}

// Perform priority scheduling
$sortedNews = priorityScheduling($newsArticles);

// Display the sorted news articles
// echo "News Articles in Priority Order:\n";
foreach ($sortedNews as $article) {
    // echo "Title: " . $article['title'] . " | Priority: " . $article['priority'] . "\n";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>News Article Input</title>
</head>
<body>
    <h2>Enter News Articles and Priorities</h2>
    <form action="process_articles.php" method="post">
        <table>
            <tr>
                <th>Category</th>
                <th>Priority</th>
            </tr>
            <tr>
                <td>
                <select id="category" name="category" required>
                <option value="">Select a category</option>
                <?php
                  include './fetch_categories_for_sub_categories_page.php';
                ?>
            </select></td>
                <td><input value="1"  min="1" max="4" type="number" name="priority[]" required></td>
            </tr>
            <tr>
                <td><select id="category" name="category" required>
                <option value="">Select a category</option>
                <?php
                include './fetch_categories_for_sub_categories_page.php';

                ?>
            </select></td>
                <td><input value="2"  min="1" max="4" type="number" name="priority[]" required></td>
            </tr>
            <tr>
                <td><select id="category" name="category" required>
                <option value="">Select a category</option>
                <?php
                include './fetch_categories_for_sub_categories_page.php';

                ?>
            </select></td>
                <td><input value="3"  min="1" max="4" type="number" name="priority[]" required></td>
            </tr>
            <tr>
                <td><select id="category" name="category" required>
                <option value="">Select a category</option>
                <?php
                include './fetch_categories_for_sub_categories_page.php';

                ?>
            </select></td>
                <td><input value="4"  min="1" max="4" type="number" name="priority[]" required></td>
            </tr>
            <!-- You can add more rows for additional news articles -->
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
