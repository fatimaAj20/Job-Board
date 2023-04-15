# Welcome to our job board project!

This application allows job seekers to search and apply for job postings, and for employers to post job listings and review applications. The project is built using the Laravel framework and utilizes a MySQL database for storing and retrieving data. This readme file provides information on how to install and set up the project, as well as how to use its various features. We hope you find this project useful and easy to use.

## Getting Started

To start testing the project, run the file "install.php". Once done, it will redirect you to the login page. If not redirected, enter the url : http://localhost:8000 at your browser

In the login page, you can directly login:

- As an admin using the following credentials:
  - Username: admin@gmail.com
  - Password: test
- As an employer:
  - Username: employer1@gmail.com
  - Password: test
  - (You can also register as an employer, then log in as an admin, set the employer as active, and then log in with the credentials you registered.)
- As a seeker:
  - Username: seeker1@gmail.com
  - Password: test
  - (You can also register as a seeker and then login directly after registration.)

For each user group, use the navigation bar, set of buttons, and forms to test the feature. Here's a list of features to test for each user:

- Admin:
  - Navigate to the job requests and try to enter a job request and accept it.
  - Navigate to the notifications and check users activity.
- Seeker:
  - Check the suggestions on the home page.
  - Search for a job.
  - Edit the profile.
  - Add new skills.
- Employer:
  - Add/edit/delete a job.
  - Edit the profile.
  - View job applications.
  - Approve or reject applications
  - Check the suggested seekers for the job.
