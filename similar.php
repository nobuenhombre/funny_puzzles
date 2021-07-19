<?php

function getBestMatchedKey(array $haystack, string $needle, bool $isHayStackSorted = false): int
{
    $max      = 0;
    $foundKey = 0;

    foreach ($haystack as $key => $value) {
        if ($value === $needle) {
            return $key;
        }

        $similarity = similar_text($value, $needle);
        if ($similarity > $max) {
            $max      = $similarity;
            $foundKey = $key;
        }

        if (($similarity < $max) && ($isHayStackSorted)) {
            return $foundKey;
        }
    }

    return $foundKey;
}

function testA1()
{
    $haystack = [
        "qwe",
        "mama",
        "lenta",
        "moscow",
        "123",
        "asset",
    ];

    $needle = "lento";

    $key = getBestMatchedKey($haystack, $needle);

    if ($key !== 2) {
        echo "Test A1 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A1 Success \r\n";
}

function testA2()
{
    $haystack = [
        "", // <- 0
        "abc",
        "bcde",
        "efghi",
        "fghijk",
        "xxxyyyzzz",
    ];

    $needle = "";

    $key = getBestMatchedKey($haystack, $needle);

    if ($key !== 0) {
        echo "Test A2 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A2 Success \r\n";
}

function testA3()
{
    $haystack = [
        "",
        "abc",
        "bcde",
        "efghi",
        "fghijk", // <- 4
        "xxxyyyzzz",
    ];

    $needle = "fgHijk";

    $key = getBestMatchedKey($haystack, $needle);

    if ($key !== 4) {
        echo "Test A3 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A3 Success \r\n";
}

function testA4()
{
    $haystack = [
        "aaa",
        "aaA",
        "aAa", // <- 2
        "aAA",
        "Aaa",
        "AaA",
        "AAa",
        "AAA",
    ];

    $needle = "aAa";

    $key = getBestMatchedKey($haystack, $needle);

    if ($key !== 2) {
        echo "Test A4 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A4 Success \r\n";
}

function testA5()
{
    $haystack = [
        "aaa",
        "aaA",
        "aAa", // <- 2
        "aAA",
        "Aaa",
        "AaA",
        "AAa",
        "AAA",
    ];

    $needle = "aAa";

    $key = getBestMatchedKey($haystack, $needle, true);

    if ($key !== 2) {
        echo "Test A5 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A5 Success \r\n";
}


function testA6()
{
    $haystack = [
        "AAA",
        "AAa",
        "AaA",
        "Aaa",
        "aAA",
        "aAa", // <- 5
        "aaA",
        "aaa",
    ];

    $needle = "aAa";

    $key = getBestMatchedKey($haystack, $needle);

    if ($key !== 5) {
        echo "Test A6 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A6 Success \r\n";
}

function testA7()
{
    $haystack = [
        "AAA",
        "AAa",
        "AaA",
        "Aaa",
        "aAA",
        "aAa", // <- 5
        "aaA",
        "aaa",
    ];

    $needle = "aAa";

    $key = getBestMatchedKey($haystack, $needle, true);

    if ($key !== 5) {
        echo "Test A7 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A7 Success \r\n";
}

function testA8()
{
    $haystack = [
        "aaa",
        "aaA",
        "aAa", // <- 2
        "aAA",
        "Aaa",
        "AaA",
        "AAa",
        "AAA",
    ];

    $needle = "aAai";

    $key = getBestMatchedKey($haystack, $needle);

    if ($key !== 2) {
        echo "Test A8 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A8 Success \r\n";
}

function testA9()
{
    $haystack = [
        "aaa",
        "aaA",
        "aAa", // <- 2
        "aAA",
        "Aaa",
        "AaA",
        "AAa",
        "AAA",
    ];

    $needle = "aAai";

    $key = getBestMatchedKey($haystack, $needle, true);

    if ($key !== 2) {
        echo "Test A9 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A9 Success \r\n";
}


function testA10()
{
    $haystack = [
        "AAA",
        "AAa",
        "AaA",
        "Aaa",
        "aAA",
        "aAa", // <- 5
        "aaA",
        "aaa",
    ];

    $needle = "aAai";

    $key = getBestMatchedKey($haystack, $needle);

    if ($key !== 5) {
        echo "Test A10 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A10 Success \r\n";
}

function testA11()
{
    $haystack = [
        "AAA",
        "AAa",
        "AaA",
        "Aaa",
        "aAA",
        "aAa", // <- 5
        "aaA",
        "aaa",
    ];

    $needle = "aAai";

    $key = getBestMatchedKey($haystack, $needle, true);

    if ($key !== 5) {
        echo "Test A11 Failed [key = $key][value = $haystack[$key]] \r\n";

        return;
    }

    echo "Test A11 Success \r\n";
}

testA1();
testA2();
testA3();
testA4();
testA5();
testA6();
testA7();
testA8();
testA9();
testA10();
testA11();