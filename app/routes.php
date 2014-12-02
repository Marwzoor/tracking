<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('/track', function() {
    $id = Input::get('id');

    if(!isset($id) || $id !== "UPJZBBwh6b") {
        return;
    }

    $track = new Track();
    $track->ip = Request::getClientIp(true);
    $track->save();
});

Route::get('/', function()
{
    ?>

    <script>
        function cb() {
            GT.tr("UPJZBBwh6b");
        }

        var ts = document.createElement("script");
        ts.type = "text/javascript";
        ts.src = "//tr.thegeneration.se/tr.js";
        ts.onreadystatechange = cb;
        ts.onload = cb;
        document.getElementsByTagName('head')[0].appendChild(ts);
    </script>

    <?php

    return;

    $dToExt = array(
        "address",
        "phone"
    );

    //Request::getClientIp(true);

    $data = json_decode(
        file_get_contents("http://rest.db.ripe.net/search.json?source=ripe&query-string=".$ip)
    , true);

    $objects = $data["objects"];

    $object = $objects["object"][1];

    $type = ucfirst($object["type"]);

    $attributes = $object["attributes"];

    $attribute = $attributes["attribute"];

    $extData = array();

    foreach($attribute as $attr) {
        if(in_array($attr["name"], $dToExt)) {
            $extData[] = $attr;
        }
    }

    echo "<pre>";
    var_dump($extData);
    echo "</pre>";

	return;
});
