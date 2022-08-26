# Project Title

CRUD REST API for role playing game

## Getting Started

1. Clone repo 

### Prerequisites

The things you need before installing the software.

Your environment must meet the following requirements
1. PHP >= v8
2. a Database (MariaDB or MySQL reccommended)

### Installation

1. clone Repo
2. change database credentials in .env file
3. if you are using Windows and mySQL or MariaDB: 
   a. in database.php change the engine under mysql from null to 'InnoDB' 
4. run php artisan:migrate in command prompt / terminal in the root directory of the project
5. configure apache documentroot for the vhost / host to point to the /public directory --- WebServer
6. run php artisan:serve in the root directory of the project --- Local
