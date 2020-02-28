# Meu pacote
Exemplo de um curso
## Exemplo de utilização
```

use Otaviofig\CursoSON\Hello;
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('path/to/your.log', Monolog\Logger::WARNING));
$log->warning((new Hello)->say('Otavio'));

```