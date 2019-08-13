<?php
function collect_data($url) {
    //TODO
    //XML analyse somethingb
    $html = file_get_contents($url);
    $name = collect_name($html);
    $pic = collect_pic($html);

    return array($url, $url);
}
function collect_name($html) {
    $dom = new DOMDocument;
    $dom->loadHTML( $html );
    $finder = new DomXPath($dom);
    $classname="playerAvatar profile_header_size online";
    $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
    var_dump($nodes);

        //Try 2
    $classname="playerAvatarAutoSizeInner";
    $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
    var_dump($nodes);
    return;
}
function collect_pic($html) {
    $dom = new DOMDocument;
    $dom->loadHTML( $html );
    $finder = new DomXPath($dom);
    $classname="actual_persona_name";
    $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
    var_dump($nodes);
    return;
}
?>