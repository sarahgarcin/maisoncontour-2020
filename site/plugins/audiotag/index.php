<?php

Kirby::plugin('sarahgarcin/audiotag', [



    'tags' => [
        'audio' => [
            'attr' => [
                'class',
                'caption'
            ],
            'html' => function ($tag) {
                return '<figure class="'.$tag->class.'">
                <figcaption>'. $tag->caption.'</figcaption>
                    <audio controls src="'.$tag->file($tag->value).'"></audio>
                </figure>';
            }
        ]
    ]
]);

