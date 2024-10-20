#### Xdebug install Linux
```bash
sudo apt update
sudo apt install php-pear php-dev autoconf gcc make
sudo pecl install xdebug
```
#### File php.ini

[xdebug]
zend_extension=xdebug.so
xdebug.mode=develop,debug
xdebug.discover_client_host=1
xdebug.client_port = 9003
xdebug.client_host=127.0.0.1
xdebug.start_with_request=yes


#### File launch.json
```json
{
"version": "0.2.0",
    "configurations": [
        {
            "name": "Debug",
            "type": "php",
            "request": "launch",
            "hostname": "0.0.0.0",
            "port": 9003,
            
        },
        
    ]
}
```