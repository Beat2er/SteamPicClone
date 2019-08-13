<?php
    $sommi = 'https://steamcommunity.com/id/beat2er';
    $rotg  = 'https://steamcommunity.com/id/kn_ox';

    function felix_get_sommi() {
        global $sommi;
        return collect_data($sommi);
    }
    function felix_get_rotg() {
        global $rotg;
        return collect_data($rotg);
    }
?>