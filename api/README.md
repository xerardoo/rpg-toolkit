# Database Schema

 Characters
 - Id
 - FirstName
 - LastName
 - Type (1=Heroe,2=Monster)
 - Level
 - RacesId
 - ClassesId
 - WeaponsId
 - PicturesId

 Stats
 - Id
 - Strength
 - Intelligence
 - Dexterity
 - CharactersId

 Races
 - Id
 - Name

 Classes
 - Id
 - Name

 Weapons
 - Id
 - Name

CharactersAbilities
- Id
- CharactersId
- AbilitiesId

Abilities
- Id
- Name

Pictures
- Id
- CharactersId
- Content


-----------------------

# API Endpoints 

- URI BASE /api/v1

- GET /heroes
- GET /heroes/:id [0=random]
- POST /heroes 
- PUT /heroes/:id
- DEL /heroes/:id

- GET /monsters
- GET /monsters/:id [0=random]
- POST /monsters 
- PUT /monsters/:id
- DEL /monsters/:id

- GET /firstnames
- GET /lastnames
- GET /races?type=[1=heroe,2=monster]
- GET /classes
- GET /weapons
- GET /powers

----------------------
# Notes

Create migrations
- php artisan make:migration create_<name>_table

Run Migrations
- php artisan migrate

Drop All
- php artisan migrate:fresh

Create Controller
- php artisan make:controller <name>Controller --resource

Create TEST
- php artisan make:test <name>Test

Run Tests
- vendor/bin/phpunit

