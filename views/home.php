<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/functions.js"></script>
</head>
<body>
    <form action="views/formposttest.php" method="post">
        Name: <input type="text" name="name"><br>
        Favorite color: <input type="text" name="color"><br>
        <input type="submit">
    </form>
    
    <?php
        $xml = simplexml_load_file("http://www.cs.washington.edu/research/xmldatasets/data/tpc-h/nation.xml");
        foreach ($xml->T as $land) {
            echo $land->N_NAME."<br>";
        }
    ?>
    X: <input type="text" id="squareText"></br>
    <button id="btn-get-square" type="button">Get square</button>

    <br><br>
    <?php phpinfo() ?>
</body>
</html>