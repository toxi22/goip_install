# goip_install
SMS Server GoIP

# Installing_Required_Packages #
Debian/Ubuntu:

apt-get install aptitude libapache2-mod-php apache2 install mysql-server php7.0-mysql


//Старый модуль заменен на php7.0-mysql

//apt-get install php7.0-mysqlnd
 
 
phpenmod mysqlnd
 

service apache2 restart


# SMS Server Update #

sms server update step:

1.killall goipcron

2.into "goip_install", copy "goip" to "/usr/local/goip".

3.into /usr/local/goip, copy "goipcron_m4"(if use mysql 4) or "goipcron_m5"(if use mysql 5) to /usr/local/goip/goipcron.

4.in your browser, view http://your_ip/goip/update.php to update database.

5. /usr/local/goip/run_goipcron to restart goipcron. Done!
