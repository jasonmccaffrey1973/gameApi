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
2a. if you are using Windows and mySQL or MariaDB: 
   a. in database.php change the engine under mysql from null to 'InnoDB' 
2. run php artisan:migrate in command prompt / terminal in the root directory of the project
3a. configure apache documentroot for the vhost / host to point to the /public directory --- WebServer
3b. run php artisan:serve in the root directory of the project --- Local
