<?php
function revertCharacters($input) {
    return preg_replace_callback('/\b[\wА-яёЁ]+\b/u', function ($matches) {
        $word = $matches[0];
        $revertedWord = '';
        $length = mb_strlen($word);
        for ($i = 0; $i < $length; $i++) {
            $char = mb_substr($word, $i, 1);
            $revertedChar = mb_substr($word, $length - $i - 1, 1);
            $revertedWord .= mb_strtolower($char) === $char ? mb_strtolower($revertedChar) : mb_strtoupper($revertedChar);
        }
        return $revertedWord;
    }, $input);
}