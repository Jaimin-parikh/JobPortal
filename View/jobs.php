<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <link rel="stylesheet" href="../View/jobs.css">
</head>

<body>
    <div class="nav">GG Careers <button class= "details"><a href="../Controller/addDetails.php" style="text-decoration: none;color:black">Add details</a></button>
    </div>
    <div class="content">
        <div class="verticalnav">This is a vertical bar</div>
        <div class="jobcontainer">
            <?php
            require_once('../Model/post.php');
            $post = new Post();
            $result = $post->display();
            while($row = mysqli_fetch_assoc($result)){
                echo "<table class='jobpost'>
                    <tr>
                        <th class='jobtitle'>{$row['title']}</th>
                    </tr>
                    <tr><td class='company'>&nbsp&nbsp🏢 {$row['company']}</td></tr>
                    <tr><td class='qual'> {$row['remote']}</td></tr>
                    <tr><td class='qual'> {$row['type']}</td></tr>
                    <tr><td class='qual'> {$row['description']}</td></tr>
                    
                    <tr><td><br><input type='submit' value='One-Tap Appy'> </td></tr>
                </table><br>";
            }
            ?>
            </form>
        </div>
    </div>
</body>

</html>