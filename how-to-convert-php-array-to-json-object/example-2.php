<?php
    $lang = ['PHP', 'Java', 'JQuery', '.Net', 'Javascript'];
    $langJSONObject = json_encode($lang, JSON_FORCE_OBJECT);
    echo $langJSONObject;

/**
 * output like  
 * {"0":"PHP","1":"Java","2":"JQuery","3":".Net","4":"Javascript"}
 * because we are using JSON_FORCE_OBJECT which gives the index
 *  of the array object in the place of json key and 
 */
?>