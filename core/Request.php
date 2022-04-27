<?php

namespace PedhotDev\LibSitePE;

class Request
{

    public function getPath()
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        $position = strpos($path, "?");
        if (!$position) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        return mb_strtolower($_SERVER["REQUEST_METHOD"]);
    }

}