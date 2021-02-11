## About Laravel API Authentication 
This is a simple Laravel API authenticated by using Passport Package.You can register or login to get the accessToken that will allow you to Create, Show, Update, and Delete Products information.

## Product 
Product information include 

 - Name
 - Quantity 
 - Category


## How To Set up This Project In Your Machine

1. Clone this Repository.
2. cd into the Directory.
3. Run `composer install` .
4. Run `php artisan key:generate` .
5. Set up your `.env` file with the correct information. 
6. Run the table migrations `php artisan migrate` .
7. Run `php artisan serve` .
8. visit [http://127.0.0.1:8000/api/user/register](http://127.0.0.1:8000/api/user/register) to register and get accessToken

Now you should have the same project I have created.


## License

The Laravel API is open-sourced project licensed under the [MIT license](https://opensource.org/licenses/MIT).
