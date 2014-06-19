<?php

class Tools {
    public static function logToFile($string)
    {
        $filename = 'gitlog.txt';

        if (!file_exists($filename)) {
            file_put_contents($filename, '');

            chmod($filename, 0666);
        }

        $date = date("Y-m-d H:i:s");
        $output = $date . ' --- ' . $string . "\n";

        file_put_contents('gitlog.txt', $output, FILE_APPEND);
    }
}