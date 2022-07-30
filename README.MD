# About

This is a sample repository made to showcase different setup in docker environments, mainly with php:7.0.33 (latest version of php 7)

# How to use 

#### Linux

`docker-compose --profile prod up -d` for the production environment with xdebug turned on <br>
`docker-compose --profile dev up -d` for the dev environment with xdebug turned off. <br>

Then open a browser window and type in the addressbar either localhost or 127.0.0.1

#### Windows:
Same as in Linux, under WSL, just use the Windows branch, as the network settings have been changed accordingly. Please ensure that WSL Integration has been turned on in Docker Desktop. Tested with WSL2 on Windows 11 & Ubuntu 20.04

#### Issues
For any issues with the Windows branch, please open an issue with logs from docker & steps to recreate the issue. 
