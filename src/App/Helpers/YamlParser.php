<?php

namespace App\Helpers;

use Silex\Application;
use Symfony\Component\Yaml\Yaml;

class YamlParser
{
    protected $file;
    public function __construct($file) {
        $this->file = $file;
    }
    public function yamlToArray() {
        try {
            $config = Yaml::parse(file_get_contents($this->file));
        } catch (ParseException $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }

        return $config;
    }

}