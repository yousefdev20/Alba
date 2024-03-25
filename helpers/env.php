<?php

function env(string $name, ?string $default = null): ?string
{
    $envDirectory = __DIR__."./../.env";
    if (file_exists($envDirectory)) {
        $env = file_get_contents($envDirectory);
        $lines = explode("\n", $env);

        foreach ($lines as $line) {
            preg_match("/([^#]+)\=(.*)/", $line, $matches);
            if (isset($matches[2])) {
                putenv(trim($line));
            }
        }

        return getenv($name) ?: $default;
    }

    return null;
}