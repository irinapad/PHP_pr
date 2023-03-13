<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2032a86d6b0c5a9e33270f7b52b4ff2d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit2032a86d6b0c5a9e33270f7b52b4ff2d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2032a86d6b0c5a9e33270f7b52b4ff2d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2032a86d6b0c5a9e33270f7b52b4ff2d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
