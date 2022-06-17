# u06-recipe-app-backend
This is a Laravel project, it is the backend of a recipe app made with Angular. [Live version](https://recipe-app-u06.herokuapp.com/)

[Link](https://github.com/sarz2/u06-angular-recipe-frontend) to the frontend repository

## Download the project

Make sure you have composer installed on your device.

Start by cloning down the project.<br/>
Run `composer install` for installing all needed dependencies.<br/>
Run `docker build -t recipe-backend ` to build a docker container from the Dockerfile in the project<br/>
Attach a shell to the container in vs-code and cd in to the project.<br/>
Run `php artisan serve --host 0.0.0.0` in the terminal<br/>
Navigate to `https//localhost:8000`


## Routes

`/register & /login`<br/>
`/createlist`<br/>
`/showlists` = Show all lists<br/>
`/showlist:id` = Show one list<br/>
`/addtolist` = Add a recipe to a list<br/>
`/removerecipe` = Delete recipe from list<br/>
`/destroy` = Delete a list<br/>

## License
[MIT](https://choosealicense.com/licenses/mit/)
