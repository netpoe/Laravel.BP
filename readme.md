# Latest Laravel Boilerplate

## Usage
Simply clone this repo into your preferred folder:

```
git clone git@github.com:netpoe/Laravel.BP.git bp_Laravel5
```

You can use the boileplate as it is, __however__ you may want to use the installation `bash` file located here:

[laravel-install file](https://github.com/netpoe/Bash-Installers/blob/master/laravel-install)

To take advantage of the whole boilerplate. 

## Using the laravel-install bash file

After having downloaded the `laravel-install` file, you must: 

- Place it under a folder written in your `$PATH`
- Export a variable `$p` meaning _projects_ where the boilerplate must exist inside a `Laravel/` folder 
- Have node and npm installed so the node_modules folder can be installed

By executing `laravel-install PROJECT_NAME DB_NAME`, this `bash` file will: 

- Create a new Laravel installation 5+
- Download a frontend development tool library [EBM](https://github.com/easyboxmodel/ebm) that includes: 
  - Bootstrap 4
  - Thoughtbot's Bourbon Sass library
  - The EBM Sass mixins and helpers
  - The EBM Gruntfile configuration to compile `.scss` files in the corresponding Laravel `resources` folder
- Setup files that manage email validation, such as: 
  - `app/User.php`
  - `app/Http/Controllers/RegistrationController.php`
  - `database/migrations/bp_user-migration.php` (May replace the original users migration)
  - `app/Services/AppMailer.php`
- Create a `resources/views/bp_layout.blade.php` file that can replace your global layout
- Create a `resources/views/bp_welcome.blade.php` file that can replace your welcome page using the EBM

After the `laravel-install` command is finished, just do a `grunt` command in order to start watching the `.scss` files located in the `resources/assets/EBM/` directory

No additional `php artisan key:generate` commands needed
No additional `.env.example` files to be modified

Happy coding.


