<?php

namespace gitDeployment;

class Tools
{
    public static function logToFile($string)
    {
        $filename = Config::get('log_filename');

        if (!file_exists($filename)) {
            file_put_contents($filename, '');

            chmod($filename, 0666);
        }

        $date = date("Y-m-d H:i:s");
        $output = $date . ' --- ' . $string . "\n";

        file_put_contents($filename, $output, FILE_APPEND);
    }

    public static function filterPayload($payload)
    {
        return json_decode(stripslashes($payload), true);
    }

    private static function verifyPayload($payload)
    {
        
    }
}
