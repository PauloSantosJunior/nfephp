<?php
/**
 * 
 */

namespace library;

/**
 * 
 */
class Autoloader
{
    /**
     * 
     * @param type $className
     * @return boolean
     */
    public static function loader($className)
    {
        $filename = '' . str_replace('\\', '/', $className) . '.php';
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return true;
            }
        }
        return false;
    }
}
spl_autoload_register('Autoloader::loader');
