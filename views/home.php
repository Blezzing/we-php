<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/functions.js"></script>
</head>
<body>
    <a href="/views/xmlViewer.php">XML Demo Here!</a><br>
    <a href="/views/nameAndColorForm.php">Form Demo here!</a><br>

    <?php
        $requestParams = array(
            'CountryName' => 'Denmark'
        );

        $client = new SoapClient('http://www.webservicex.net/globalweather.asmx?WSDL');
        $response = $client->GetCitiesByCountry($requestParams);

        print_r($response);


    ?>
    <?php
        $options = array('location' => '/controllers/SOAPController.php', 'uri' => 'http://localhost/we-php/');
        //create an instante of the SOAPClient (the API will be available)
        $api = new SoapClient(NULL, $options);
        //call an API method
        echo $api->hello();
    ?>
</body>
</html>