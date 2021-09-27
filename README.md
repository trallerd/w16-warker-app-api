# Laravel App - API

## Gas Stations
API REST using Laravel to indicate the gas level on gas_stations on cities and locations.

## What the project has
- Laravel 8
- CRUD Web
- Tests
- Seeder & fakers

### Tables:

Cities
```
|id |city   |coordinates_id|created_at|updated_at|
|int|string |int(fk)       |timestamp |timestamp |
```

Gas Stations
```
|id |city_id  |tank       |coordinates_id|created_at|updated_at|
|int|int(fk)  |int(0-30k) |int(fk)       |timestamp |timestamp |
```

Coordinates
```
|id |latitude|longitude|created_at|updated_at|
|int|decimal |decimal  |timestamp |timestamp |
```

### Endpoints
/api/city/id
```
{
    "data": {
        "id": 1,
        "city": "Lake Leila",
        "coordinates_id": {
            "id": 1,
            "latitude": "3.183211",
            "longitude": "-65.566257",
            "created_at": "2021-08-19T06:55:01.000000Z",
            "updated_at": "2021-08-19T06:55:01.000000Z"
        },
        "gas_stations_id": {
            "id": 1,
            "tank": 13007,
            "coordinates_id": 2,
            "created_at": "2021-08-19T06:55:01.000000Z",
            "updated_at": "2021-08-19T06:55:01.000000Z"
        },
        "created_at": "2021-08-19T06:55:02.000000Z",
        "updated_at": "2021-08-19T06:55:02.000000Z"
    }
}
```

/api/gas/id
```
{
    "data": {
        "id": 1,
        "tank": 13007,
        "coordinates_id": {
            "id": 2,
            "latitude": "-8.726594",
            "longitude": "-44.658463",
            "created_at": "2021-08-19T06:55:01.000000Z",
            "updated_at": "2021-08-19T06:55:01.000000Z"
        },
        "created_at": "2021-08-19T06:55:01.000000Z",
        "updated_at": "2021-08-19T06:55:01.000000Z"
    }
}
```
/api/coordinates/id
```
{
    "data": {
        "id": 1,
        "latitude": "3.183211",
        "longitude": "-65.566257",
        "created_at": "2021-08-19T06:55:01.000000Z",
        "updated_at": "2021-08-19T06:55:01.000000Z"
    }
}
```

## Instalation

To test the api:
- You need to clone this project on your pc. If you don't use linux, you should: So open your terminal and paste the command.
```
git clone https://github.com/trallerd/w16-warker-app-api.git
```
- Then go to the directory of it:

```
cd w16-warker-app-api/gas_station
```
- Run the following commands to set Laravel :

```
~ composer install && npm install
```
- Change the name of `.env.example` to `.env` and set data base variables
```
~ php artisan migrate

~ php artisan db:seed
``` 
- Then run server with:
```
~ php artisan serve
```

 - GG!
