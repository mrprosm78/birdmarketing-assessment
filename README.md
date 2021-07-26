# birdmarketing-assessment

Assessment Document

Task
We have created dummy company called "Assessment Accounting"
Visit http://assessment.birdmarketing.co.uk
Please create a custom HTML/JavaScript popup
The popup should advertise one of the services on the website and have a form
Use the existing design styles of the website
For bonus points add a PHP endpoint that sends an email on submission of the form
For additional bonus points add the form submission information to a database
Once complete please push the code to a public GitHub and send us the repo link
Please complete this task within 7 days


Hello,

I have completed the assessment as per the above guidelines. The assessment website is build on wordpress and  recommended way of adding popup to a wordpress website is via plugin as that can be easily integrated into the website with all the styles.

However I have not developed the plugin as the assessment only says to use the html and javascript and styles from the website. May be I can develop the plugin during my trial period once I am selected for the role.

Here is the assessment details

Link to repo
https://github.com/sirajmomin/birdmarketing-assessment

Please create a database and create table. 
Here is the sql query to create table

CREATE TABLE `popup_table` (
  `id` int(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
     `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

in the index.php please add
<?php require 'popup/poupu.php' ?>

and added db details database.php file which is under popup folder

for the mail to work please configure php.ini so that it can send emails


