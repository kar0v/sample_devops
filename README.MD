# About

This is a sample repository made to showcase different setup in docker environments, mainly with php:7.0.33 (latest version of php 7)

# How to use 

#### Linux/MacOS: 

`docker-compose --profile prod up -d` for the production environment with xdebug turned on <br>
`docker-compose --profile prod up -d` for the dev environment with xdebug turned off. <br>
#### Windows:

## Note:
As I am not a PHP programmer I was unable to create the proper .php files in sources/php/*.php to show how the machine can query mongodb & mysql at the same time. <br>
This is why I've created **a separate python container** that runs a script, which queries both databases. You can view the logs for the container to see the successful connection:
`docker logs netea_python_1`
