<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Jobs</title>
    <link rel='stylesheet' href='../View/jobs.css'>
</head>

<body>
    <div class='nav'>GG Careers <button class= 'details'><a href='addDetails.php' style='text-decoration: none;color:black'>Add details</a></button><button style='margin-left:5px'><a href='../Controller/logout.php' style='text-decoration: none;color:black;'>Logout</a></button>
    </div>
    <div class='content'>
        <div class='verticalnav'>This is a vertical bar</div>
        <div class='jobcontainer'>
            <?php
            require_once('../Model/post.php');
            $post = new Jobs();
            $results = $post->display();
            // print_r($results);
            function modify(string $a){
                $a[0] = strtoupper($a[0]);
                $a = str_replace('-',' ',$a);
                return $a;
            }   

            foreach($results as $key=>$value) {
                echo "<table class='jobpost'>
                    <tr>
                        <th class='jobtitle'>{$value['title']}</th>
                    </tr>
                    <tr><td class='company'>&nbsp&nbsp🏢 {$value['company']}</td></tr>
                    <tr><td class='qual'> Remote: ".modify($value['remote'])."</td></tr>
                    <tr><td class='qual'> Employement type: ".modify($value['type'])."</td></tr>
                    <tr><td class='qual'> ". str_replace("-","<br>-",$value['description'])."</td></tr>
                    
                    <tr><td><br><input type='submit' value='One-Tap Appy'> </td></tr>
                </table><br>";
            }
            ?>
            </form>
        </div>
    </div>
</body>

</html>