<?php

$functions[] = function (\App\Model\Article $article) {
    return '<b>' . $article->title . '</b>';
};

$functions[] = function (\App\Model\Article $article) {
    return '<i>' . $article->id . '</i>';
};

return $functions;