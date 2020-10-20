<?php

Kirby::plugin('sarahgarcin/audiotag', [



    'tags' => [
        'audio' => [
            'attr' => [
                'class',
                'caption'
            ],
            'html' => function ($tag) {
                return '<div class="audio">
                    <div class="audiocaption">'. $tag->caption.'</div>   
                    <div class="audioplayer '.$tag->class.'">
                        <audio controls src="'.$tag->file($tag->value).'"></audio>
                    </div>
                </div>'
                ;
            }
        ]
    ]
]);

