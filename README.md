# PHP-OOP course

### follow Piter Fisher

- Requirements
- Installation process

## Installation

Creating Docker machine
https://docs.docker.com/machine/install-machine/

```
  $ docker-machine create oop-php
  $ docker-machine env oop-php
  //regenerate certificates: (optional)
  $ docker-machine regenerate-certs oop-php

  $ eval $(docker-machine env oop-php)

  // check docker contatiners (optional)
  $ docker ps -a
  //check docker machine active (optional)
  $ docker-machine active

  //start and create containers
  $ docker-compose up -d --build

  //going into bash
  $ docker exec -it php-oop_web_1 bash

  //Find IP of docker machine
  $ docker-machine ip oop-php
  //have to be 192.168.99.100
  //Put IP in browser
                                    

  //Stop all running containers. 
  $ docker stop $(docker ps -aq)
  //remove containers
  $ docker-compose down -v
  //clean all images
  $ docker system prune -a

   //go inside of the container
  $  docker-compose exec web bash 
```

```


## Requirements
 - Docker 18.09.2
 - Docker Machine 0.16.1 (optional)
 - Docker Compose 1.23.2


```
