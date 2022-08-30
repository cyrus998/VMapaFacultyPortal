HOW TO RUN (For my Groupmates)

(Assuming that you have composer and xampp installed:)

First, Clone my repository 

git clone https://github.com/cyrus998/VMapaFacultyPortal.git

then

composer update

create database name: "capstone"

php artisan migrate:fresh

php artisan storage:link  // for profile picture to work

php artisan db:seed

php artisan serve

==== TO CHECK FOR GITHUB UPDATES =====

To get latest updates:      git pull

To commit do the following:

git status          // to check your changes

git add .

git commit -m "any message update"

git push

if there are any questions message me on facebook.com/cyrus998

