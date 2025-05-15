<?php

if (!function_exists('base_path')) {
    function base_path($path = '')
    {
        // __DIR__ sẽ lấy thư mục hiện tại của file helper này
        // dirname(__DIR__, n) dùng để đi ngược lên thư mục cha

        $base = dirname(__DIR__, 2); // ví dụ nếu helper ở app/Helpers, sẽ đi lên tới project root

        return $path ? $base . DIRECTORY_SEPARATOR . $path : $base;
    }
}
