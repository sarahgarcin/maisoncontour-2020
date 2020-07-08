<?php

Kirby::plugin('sarahgarcin/rouge', [



    'tags' => [
        'rouge' => [
            'html' => function ($tag) {
                return '<span class="rouge">'
                    . $tag->value.
                '</span>'
                ;
            }
        ]
    ]
]);

