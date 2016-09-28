<?php

class XMLController {     
    public static function getNationDoc(){
        return simplexml_load_file("http://www.cs.washington.edu/research/xmldatasets/data/tpc-h/nation.xml");
    }
} 

?>