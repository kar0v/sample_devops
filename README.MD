# About

This is a sample repository made to showcase different setup in docker environments, mainly with php:7.0.33 (latest version of php 7)

# How to use 

#### Linux/MacOS: 

`docker-compose --profile prod up -d` for the production environment with xdebug turned on <br>
`docker-compose --profile prod up -d` for the dev environment with xdebug turned off. <br>
#### Windows:

## Note:
As I am not a PHP programmer I was unable to create the proper .php files in sources/php/*.php. If you are going to use this, do create your own PHP scripts to test with mongodb & mysql and add them in the docker-compose file as a volume/directory.  <br><br>
This is why I've created **a separate python container** that runs a script, which queries both databases. You can view the logs for the container to see the successful connection:
`docker logs netea_python_1`


## TO DO:

- Write a flask app that queries the database and shows it on a webpage.
- Disable the php service. 
- Push images to registry
- Create a helmchart to deploy on k8s. 
  - Update secrets for mongodb before building the image or use the two-step building approach. 
