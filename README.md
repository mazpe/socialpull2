# SOCIALPULL2
Social Pull bring streams from multiple social media outlets under one platform


## INSTALL AND CONFIGURE DATABASE 

### Install PostgreSQL (if not installed)

#### Check if PostgreSQL is installed
Check if PostgreSQL is installed by running the following command:
```
which postgres
```
it should return the path of PostgreSQL executable
```
/usr/local/bin/postgres
```
If the proper executable path is returned as displayed above please skip to "Create database" section below
else proceed to  the nexrt section "Download and Install PostgreSQL"

#### Download and Install PostgreSQL
Please go to the following web site and follow the direct instructions on how to install PostreSQL in your environment of choice.
```
https://www.postgresql.org/download/
```

### Check if PostgreSQL PHP Extension is installed
Check if your environment has PostgreSQL PHP extension installed by running the following command:
```
php -m | grep pgsql
```
you should see the output as something like this
```
pdo_pgsql
```
If the output above is returned proceed to "Create database" section else continue to "Install PostgreSQL PHP Extension".

### Install PostgreSQL PHP Extension (if not installed)
Install the PostgreSQL PHP Extension by running the following command:

In a mac environment
```
brew install php71-pdo-pgsql
```

In a linux environment
```
yum install php-pdo_pgsql
```

Make sure that your php.ini is loading the extension (under mac os environment brew took care of this). 
Check if the following exists in your php.ini or uncomment the following lines.
```
extension="pdo_pgsql.so"
extension="pgsql.so"
```
Restart your web server (apache or nginx) and run `php -m | grep pgsql` to see if the desire output is returned.

### Create database

#### Install pgAdmin 
pgAdmin is a widely used open source administration GUI for PostgreSQL. Please visit the following and follow the 
instructions closely to download and install pgAdmin.
```
https://www.pgadmin.org/download/
```

#### Create the database
The following instructions will assist you to create a database to be utilized by SocialPull.
- Open pgAdmin and click on the 'Servers' icon on the left hand side objects 'Browser'.
- Select the active instance of PostgreSQL (if should display something like PostgreSQL 9.6).
- Enter the admin password as set in the installation
- Right click on 'Databases' then click on create and click on 'Database'
- Enter the name of the database 'socialpull'
- You can select postgres as the owner or select a defined user
- Click on save

## INSTALL SOCIALPULL

### Configure Web Server

### Get SocialPull distro
 
### Configure Laravel
 
## ACCESS SOCIALPULL

