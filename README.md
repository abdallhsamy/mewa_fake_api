#  MEWA Fake API


## Prerequisites
you must have [docker-compose](https://docs.docker.com/compose/install/) to run this script

and `docker-compose` requires
- `Docker Engine`
- `Docker CLI`



## Installation

1 download the repose files
```bash
git clone git@github.com:abdallhsamy/mewa_fake_api.git
```
2 navigate to the downloaded folder
```bash
cd mewa_fake_api
```

3 download and install required dependencies
```bash
docker run --rm \
            -u "$(id -u):$(id -g)" \
            -v $(pwd):/opt \
            -w /opt \
            laravelsail/php81-composer:latest \
            composer install --ignore-platform-reqs
```

4 pull and install the docker containers

```bash
./vendor/bin/sail up
```

5 install project dependencies
```bash
./vendor/bin/sail composer install
```

6 create `.env` file
```bash
cp .env.example .env 
```

7 generate app key
```bash
./vendor/bin/sail php artisan key:generate
```

## Usage

Method : `POST`

URL : `http://localhost/animalnum/CamelApp/Data/SearchOwnerByBarcode`

Headers :
```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

Response Example: `// fake data`
```json
{
    "ID": 1,
    "NAME": "عبدالله سامي",
    "NATIONALITY": "المملكة العربية السعودية", 
    "MOBILE": "0566502430"
}
```
