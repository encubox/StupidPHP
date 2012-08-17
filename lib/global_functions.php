<?php

function mysql_fetch_all($result) {
    $all = array();
    while ($record = mysql_fetch_array($result)) {
    	$all []= $record;
    }
    return $all;
}

function mysql_query_and_fetch($query) {
    return mysql_fetch_all(mysql_query($query));
}