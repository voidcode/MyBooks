#MYBooks

![alt screenshut](/screenshots/MyBooksDemoShut0.png)

![alt screenshut](/screenshots/MyBooksDemoShut1.png)

Installation on a RestberryPi or Ubuntu:

##HOW TO INSTALL IT

1)
    Install MyBooks into your '/var/www/MyBooks/'-folder

        cd /var/www/ && git clone git@github.com:voidcode/MyBooks.git

2)
    Now lanuch your browser and goto 'MyBooks'
    
        firefox http://localhost/Mybooks/


Now you are done!!

###How to changes the PASSWORD?

    Go to api.php

        <?php 
            //THIS IS YOUR PASSWORD
            $PASSWORD = '1234';//<--'1234' is the default password



###.htaccess
Here you can set max-upload-filesize-limit: 

Default is 200MB
    