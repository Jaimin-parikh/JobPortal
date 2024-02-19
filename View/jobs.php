<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <style>
        .nav {
            border: 1px solid black;
            height: 25;
            font-size: xx-large;
            padding-left: 20px;
            border-radius: 0.1cm;
        }

        .content {
            display: flex;
        }

        .verticalnav {
            font-size: x-large;
            border: 1px solid black;
            display: inline-block;
            height: mt_getrandmax;
            margin-top: 10px;
            padding: 10px;
            border-radius: 0.1cm;
        }

        .jobcontainer {
            display: inline-block;
            background-color: rgb(219, 216, 216);
            width: 1020px;
            height: 100%;
            margin-top: 10px;
            margin-left: 10px;
            padding-left: 20px;
            border-radius: 0.1cm;
        }

        .jobtitle {
            font-size: xx-large;
            padding-top: 15px;
            padding-left: 20px;

        }

        .company {
            font-size: x-large;
            padding-left: 20px;
            padding-top: 20px;
            font-weight: bold;

        }

        .jobpost {
            border: 1px solid white;
            margin-top: 20px;
            margin-left: 30px;
            background-color: white;
            border-radius: 0.1cm;
            width: 900px;
            height: fit-content;
        }

        .qual {
            padding-left: 30px;
            font-size: larger;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="nav">GG Careers</div>
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
                    
                    <tr><td><br><input type='submit' value='apply'> </td></tr>
                </table><br>";
            }
            ?>
            </form>
        </div>
    </div>
</body>

</html>