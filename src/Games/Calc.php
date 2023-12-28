<?php

namespace Php\Project\Calc;

use function Php\Project\Engine\play;

const MIN_INTEGER = 2;
const MAX_INTEGER = 30;
const OPERATORS = ['+', '-', '*'];
const DESCRIPTION = "What is the result of the expression?";

function getExpressionValue(int $int1, int $int2, string $operator): array
{
    $question = "";
    $correctAnswer = 0;

    switch ($operator) {
        case '+':
            $question = "{$int1} + {$int2}";
            $correctAnswer = $int1 + $int2;
            break;
        case '-':
            $question = "{$int1} - {$int2}";
            $correctAnswer = $int1 - $int2;
            break;
        case '*':
            $question = "{$int1} * {$int2}";
            $correctAnswer = $int1 * $int2;
            break;
    }
    return [$question, (string) $correctAnswer];
}

function run(): void
{
    $gameData = function (): array {
        $int1 = random_int(MIN_INTEGER, MAX_INTEGER);
        $int2 = random_int(MIN_INTEGER, MAX_INTEGER);
        $operator = OPERATORS[array_rand(OPERATORS)];
        return getExpressionValue($int1, $int2, $operator);
    };
    play($gameData, DESCRIPTION);
}
