<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Home",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Blog",
            "url" => "blogg",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styles",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "About",
            "url" => "om",
            "title" => "Rapport",
        ],
    ],
];
