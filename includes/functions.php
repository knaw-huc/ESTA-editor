<?php

$db = new db();

function getFields($table, $level) {
    global $db;

    $retArray = array();
    $fields = $db->getStruc($table);

    foreach ($fields as $field) {
        if ($field["Key"] != 'PRI') {
            echo $field["Field"] . "<br>";
            switch (stripped_field_def($field["Type"])) {
                case "int":
                    $retArray[] = intField($field, $level, $table);
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

function intField($field, $level, $table) {
    if ($table == 'subvoyage' || $table == "slaves" || $table == "cargo" ) {
        switch($field["Field"]) {
            case "sub_vessel":
                $node = component($field, $level, "vessel");
                return $node;
                break;
            case "sub_cargo1":
            case "sub_cargo2":
            case "sub_cargo3":
            $node = component($field, $level, "cargo");
            return $node;
            break;
            case "sub_slaves":
                $node = component($field, $level, "slaves");
                return $node;
            case "sub_captain":
            case "voyage_outfitter":
            case "voyage_investor":
            case "voyage_insurer":
            case "main_actor_id":
            case "actor_id2":
            case "main_cargo_actor":
            case "cargo_actor2":
                $node = component($field, $level, "actor");
                return $node;
            default:
                $node = initNode($level);
                $node["attributes"] = array(
                    "name" => $field["Field"],
                    "label" => $field["Comment"],
                    "ValueScheme" => "int",
                    "CardinalityMin" => "0",
                    "CardinalityMax" => "1"
                );
                if ($field["Null"] == "NO") {
                    $node["attributes"]["CardinalityMin"] = "1";
                }
                return $node;
                break;
        }
    } else {
        $node = initNode($level);
        $node["attributes"] = array(
            "name" => $field["Field"],
            "label" => $field["Comment"],
            "ValueScheme" => "int",
            "CardinalityMin" => "0",
            "CardinalityMax" => "1"
        );
        if ($field["Null"] == "NO") {
            $node["attributes"]["CardinalityMin"] = "1";
        }
        return $node;
    }
}

function component($field, $level, $table) {
    $node = array();
    $node["type"] = "Component";
    $node["level"] = $level;
    $node["ID"] = uniqid();
    $node["attributes"] = array(
        "name" => $field["Field"],
        "label" => $field["Comment"],
        "CardinalityMin" => "1",
        "CardinalityMax" => "1");
    $node["content"] = getFields($table, $level+1);
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
