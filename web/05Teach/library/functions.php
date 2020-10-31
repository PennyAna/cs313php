<?php

// Build the HTML for the scriptures list
function scripturesGrid($scriptures){
    $block = "<div class='grid-container'>";
    foreach ($scriptures as $scripture) {
        $block .= "<div class='scripture-card'><a href='index.php?action=view-scripture&scripture-id=$scripture[id]'>";
        $block .= "<h2 class='scrRef'>$scripture[book] $scripture[chapter]:$scripture[verseFrom]</h2>";
        $block .= '</a></div>';
    }
    $block .= '</div>';
    return $block;
}

function scriptureDetails($scriptures){
    $block = '<div>';
    foreach ($scriptures as $scripture) {
        $block .= '<p>';
        $block .= "<span class='scrRef'>$scripture[book] $scripture[chapter]:$scripture[verseFrom]</span> - ";
        $block .= "\"<span class='scrCont'>$scripture[content]</span>\"";
        $block .= '</p>';
    }
    $block .= '</div>';
    return $block;
}

?>