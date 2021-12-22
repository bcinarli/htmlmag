<?php

namespace Misto;

class Env {
    protected $path;

    public function __construct(){
        $this->path = ABS_PATH . '/.env';
    }

    public function load() {
        if(!file_exists($this->path)){
            return null;
        }

        $envParams = file($this->path,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($envParams as $envParam){
            if(strpos(trim($envParam), '#') === 0){
                continue;
            }

            list($name, $value) = explode("=", $envParam, 2);

            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}