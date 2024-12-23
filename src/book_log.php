<?php
echo "書籍名は？" . PHP_EOL;
$title = trim(fgets(STDIN));
echo "著者名は？" . PHP_EOL;
$author = trim(fgets(STDIN));
echo "読書状況は？" . PHP_EOL;
$condition = trim(fgets(STDIN));
echo "評価は？" . PHP_EOL;
$reputation = trim(fgets(STDIN));
echo "感想は？" . PHP_EOL;
$imp = trim(fgets(STDIN));
echo '書籍名：'.$title . PHP_EOL;
echo '著者名：'.$author . PHP_EOL;
echo '読書状況：'.$condition . PHP_EOL;
echo '評価：'.$reputation . PHP_EOL;
echo '感想：'.$imp . PHP_EOL;
