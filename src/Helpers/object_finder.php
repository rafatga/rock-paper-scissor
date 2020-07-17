<?php

if (!function_exists('find_object_instance_in_array')) {
    function find_object_instance_in_array(array $array, $objectInstance) {
        $objectsFound = array_map(static function($value) use ($objectInstance) {
            if( $value instanceof $objectInstance) {
                return $value;
            }
        }, $array);
        return reset($objectsFound);//Only first
    }
}
