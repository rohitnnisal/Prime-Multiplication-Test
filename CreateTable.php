<?php
require_once 'CreatePrime.php';
require_once 'TableCreator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);

    if ($number !== false && $number >= 1) {
        $table = TableCreate::createTable($number);

        echo '<h2> Gen Prime Multiplication table test</h2>';
        echo '<table border="2">';
        echo '<tr><th></th>';

        foreach ($table as $row => $col) {
            echo "<th>$row</th>";
        }

        echo '</tr>';

        foreach ($table as $row => $col) {
            echo '<tr>';
            echo "<th>$row</th>";

            foreach ($col as $value) {
                echo "<td>$value</td>";
            }

            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>Entered number should be greater or equal to 1.</p>';
    }
}
