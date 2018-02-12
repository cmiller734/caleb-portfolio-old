1.-------------------------------------DB SETUP-------------------------------

The file "db.inc" needs proper credentials in order to work (that is, the proper parameters need to be passed in to mysqli functions). 

Thus, the following lines in that file need to be changed:

// 1st line
$link = mysqli_connect('{server name}', '{server username}','{server password}', {'db name'});

// 2nd line
if (!mysqli_select_db($link, '{db name}')) {

Thanks for viewing!

2.-------------------------------------SASS SETUP (in VS Studio)------------------------------
to start sass in portfolio-site, run the following commands in a new terminal window
every time you open VS Studio:

1. cd websites\portfolio-site\public_html\styles
2. sass --watch scss:css  

*Gulp setup for automated scss upload has not been configured as of 6/28/17
