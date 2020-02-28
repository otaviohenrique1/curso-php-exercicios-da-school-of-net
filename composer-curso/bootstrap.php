<?php
    require __DIR__.'/vendor/autoload.php';
    
    use Otaviofig\CursoSON\Hello;
    
    // create a log channel
    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler('path/to/your.log', Monolog\Logger::WARNING));
    
    // add records to the log
    $log->warning((new Hello)->say('Otavio'));

    /*
        use Monolog\Logger;
        use Monolog\Handler\StreamHandler;
        
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));
        
        // add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    */