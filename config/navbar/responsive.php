<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Blogg",
            "url" => "blog",
            "title" => "Välj stylesheet.",
        ],
    ],
];
