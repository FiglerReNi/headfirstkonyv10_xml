<?php

define('XML', 'teszt.xml');

$xml_file = simplexml_load_file('teszt.xml');
$entries = $xml_file->entry;
$num = count($entries);
for($i=0; $i< $num; $i++){
    $entry = $entries[$i];
    echo $entry->id . '</br>';
    $media = $entry->children('media',TRUE);
    $title = $media->group->title;
    echo $title . '</br>';
    $attr = $media->children('yt', TRUE);
    $tartam = $attr->duration->attributes();
    $second = $tartam['seconds'];
    echo $second . '</br>';
}
var_dump($num);
var_dump($entries);
var_dump($xml_file);
