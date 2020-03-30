<?php
require "../config/db.config.inc.php";
require "../classes/db.class.php";
require "../config/common.inc.php";
require "../includes/functions.php";

$db = new db();

$struc = $db->getStruc("subvoyage");
$level = 1;
$json = array("id" => "ESTA_testID", "content" => array());
$json["content"] = array(
        "type" => "Component",
    "level" => 1,
    "ID" => uniqid(),
    "attributes" => array(
        "name" => "voyage",
        "label" => "Voyage",
        "CardinalityMin" => "1",
        "CardinalityMax" => "1",
        "initialOrder" => 1
    ),
    "content" => array(
        "type" => "Component",
        "level" => 2,
        "ID" => uniqid(),
        "attributes" => array(
            "name" => "subvoyage",
            "label" => "Sub voyage",
            "CardinalityMin" => "1",
            "duplicate" => "yes",
            "initialOrder" => 1
        ),
        "content" => getFields('subvoyage', 3)
    )
);




file_put_contents(APP_ROOT . 'json/editor.json', json_encode($json));
echo "JSON file written...";