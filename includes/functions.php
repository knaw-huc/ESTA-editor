<?php

$db = new db();

function getFields($table, $level) {
    global $db;

    $retArray = array();
    $fields = $db->getStruc($table);

    foreach ($fields as $field) {
        if ($field["Key"] != 'PRI') {
            switch (stripped_field_def($field["Type"])) {
                //echo stripped_field_def($field["Type"]) . "<br>";
                case "int":
                    $retArray[] = intField($field, $level);
                    break;
                case "varchar":
                    $retArray[] = varcharField($field, $level);
                    break;
                case "enum":
                    $retArray[] = enumField($field, $level);
                    break;
                case "text":
                    $retArray[] = textField($field, $level);
                    break;
            }
        }
    }
    return $retArray;
    //die();
}

function enumField($field, $level) {
    $node = initNode($level);
    $values = str_replace("enum(", "", $field["Type"]);
    $values = str_replace(")", "", $values);
    $values = str_replace("'", "", $values);
    $values = explode(",", $values);
    $tmpArr = array();
    foreach ($values as $value) {
        $tmpArr[] = array("value" => $value);
    }
    $node["attributes"] = array(
        "name" => $field["Field"],
        "label" => $field["Comment"],
        "ValueScheme" => array($tmpArr),
        "CardinalityMin" => 0,
        "CardinalityMax" => 1,
        "width" => "100",
        "height" => "10",
        "inputField" => "multiple"
    );
    return $node;
}

function textField($field, $level) {
    $node = initNode($level);
    $node["attributes"] = array(
        "name" => $field["Field"],
        "label" => $field["Comment"],
        "ValueScheme" => "string",
        "CardinalityMin" => 0,
        "CardinalityMax" => 1,
        "width" => "100",
        "height" => "10",
        "inputField" => "multiple"
    );
    if ($field["Null"] == "NO") {
        $node["attributes"]["CardinalityMin"] = 1;
    }
    return $node;
}

function varcharField($field, $level) {
    $node = initNode($level);
    $node["attributes"] = array(
        "name" => $field["Field"],
        "label" => $field["Comment"],
        "ValueScheme" => "string",
        "CardinalityMin" => 0,
        "CardinalityMax" => 1,
        "width" => getTextWidth($field)
    );
    if ($field["Null"] == "NO") {
        $node["attributes"]["CardinalityMin"] = 1;
    }
    return $node;
}

function intField($field, $level) {
    $node = initNode($level);
    $node["attributes"] = array(
        "name" => $field["Field"],
        "label" => $field["Comment"],
        "ValueScheme" => "int",
        "CardinalityMin" => 0,
        "CardinalityMax" => 1
    );
    if ($field["Null"] == "NO") {
        $node["attributes"]["CardinalityMin"] = 1;
    }
    return $node;
}

function getTextWidth($field) {
    $str = str_replace("varchar(", "", $field["Type"]);
    $str = str_replace(")", "", $str);
    if (is_numeric($str)) {
        $aantal = $str + 0;
        if ($aantal > 100) {
            return "100";
        } else {
            return $aantal;
        }
    } else {
        return "60";
    }
}

function initNode($level) {
    $node = array();
    $node["type"] = "Element";
    $node["level"] = $level;
    $node["ID"] = uniqid();
    return $node;
}

function stripped_field_def($type) {
    $pos = strpos($type, '(');
    if ($pos === false) {
        return $type;
    } else {
        return substr($type, 0, $pos);
    }
}
