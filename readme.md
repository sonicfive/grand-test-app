# Grand Test - Alejandro Orrantia

You can find a working version of this App here: [app](http://alexorrantia.com/)

### Seeding Database
You can run seed records by typing on the console "php artisan migrate:refresh --seed"


### Installing
This app requires a few dependencies like Guzzle to run. You can install them running "composer install"

### Testing
- Testing can be run by running "phpunit" on the console.
- There is one test that does not pass when using an SQLite database :( It works on MySql, still trying to figure that one out. 

### Part One - Local API
You can click on individual tasks (in text) to edit them. Press enter to save. 

### Part Two - Weather API
- The API Key is provided as part of the POST call.
- This HTTP code was fun to learn about :)
The HTTP 418 -I'm a teapot- client error response code indicates that the server refuses to brew coffee because it is a teapot. [mdn](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418)


### Video
If everything else fails you can watch a screen recording of the working app here: [video](https://www.dropbox.com/s/1qnalt8bfosaa7o/Grand-Test-1080p.mov?dl=1)
Note: The frontend was built as a SPA. I refresh the page to show that data is persisted on the database. 



