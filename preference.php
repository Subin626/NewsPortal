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
                <th>Article Content</th>
            </tr>
            <tr>
                <td>
                    
                    <select name="category" required>
                        <option value="">Select a category</option>
                        <?php
                  include './fetch_categories_for_sub_categories_page.php';
                ?>
                    </select>
                </td>
                <td><input value="1" min="1" max="1" type="number" name="priority[]" required></td>
            </tr>
            <tr>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
