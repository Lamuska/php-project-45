<?php

namespace Php\Project\Even;

use function Php\Project\Engine\play;

const MIN_INTEGER = 1;
const MAX_INTEGER = 100;

function getQuestion(): int
{
    return random_int(MIN_INTEGER, MAX_INTEGER);
}

function isEven(int $int): bool
{
    return $int % 2 === 0;
}

function getCorrectAnswer(int $int): string
{
    return isEven($int) ? 'yes' : 'no';
}

function run(): void
{
    $gameData = function (): array {
        $question = getQuestion();
        $correctAnswer = getCorrectAnswer($question);
        return [$question, $correctAnswer];
    };
    play($gameData, "Answer \"yes\" if the number is even, otherwise answer \"no\".");
}
