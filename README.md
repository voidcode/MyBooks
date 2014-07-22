Installation on a RestberryPi or Ubuntu:

##HOW TO INSTALL IT

1)
    Install MyBooks into your '/var/www/MyBooks/'-folder

        cd /var/www/ && git clone git@github.com:voidcode/MyBooks.git

2)
    Now lanuch your browser and goto 'MyBooks'
    
        firefox http://YOUR-IP/Mybooks/


Now you are done!


###MyBooks file-structer
    
RootFolder:

index.html

js/apicalls.js

api.php

.htaccess <- (To set max-upload-filesize-limit: default is 200MB)
    