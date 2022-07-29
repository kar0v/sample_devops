# About

This is a sample repository made to showcase different setup in docker environments, mainly with php:7.0.33 (latest version of php 7)

# How to use 

#### Linux/MacOS: 

`docker-compose --profile prod up -d` for the production environment with xdebug turned on <br>
`docker-compose --profile dev up -d` for the dev environment with xdebug turned off. <br>

#### Windows:

## Note:
As I did not have much experience with PHP, I created the containers at first, but could not create the proper functions and connections.  <br><br>
This is why I've created a separate python container that runs a script, which queries both databases. The logs of the container can be viewed with `docker logs sample_devops_python_1`. This is not required at the moment, as I have invested more time into this and the webpage is now working. Also this has been moved to the python branch. 


## TO DO:

- Push images to registry
- Create a helmchart to deploy on k8s. 
  - Update secrets for mongodb before building the image or use the two-step building approach. 
