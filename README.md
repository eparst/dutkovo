backup:
mysqldump -u username -ppassword database_name > dump.sql 

to php copy 1.5v

Joomla on OpenShift
===================

This git repository helps you get up and running quickly w/ a Joomla installation
on OpenShift.  The backend database is MySQL and the database name is the 
same as your application name (using $_ENV['OPENSHIFT_APP_NAME']).  You can name 
your application whatever you want.  However, the name of the database will always
match the application so you might have to update .openshift/action_hooks/build.


Running on OpenShift
----------------------------

Create an account at http://openshift.redhat.com/

Create a php-5.3 application (you can call your application whatever you want)

    rhc app create -a dutkovo -t php-5.3

Add MySQL support to your application

    rhc cartridge add -a dutkovo -c mysql-5.1

Add this upstream Joomla repo

git clone git://github.com/eparst/dutkovo.git
curl --user user:passw -o .openshift/action_hooks/zvenigorod.sql https://webdav.yandex.ru/backups/sql/zvenigorod.sql
curl --user user:passw -o php/zvenigorod.us.tar https://webdav.yandex.ru/backups/www/zvenigorod.us.tar
#    cd dutkovo
#    git remote add upstream -m master git://github.com/eparst/joomla-example.git
    git pull -s recursive -X theirs upstream master
    # note that the git pull above can be used later to pull updates to Joomla
    
Then push the repo upstream

    git push

That's it, you can now checkout your application at (default admin account is admin/4dm1n):

    http://dutkovo-$yournamespace.rhcloud.com
git remote add origin https://github.com/eparst/dutkovo.git
git push -u origin master


NOTES:

GIT_ROOT/.openshift/action_hooks/deploy:
    This script is executed with every 'git push'.  Feel free to modify this script
    to learn how to use it to your advantage.  By default, this script will create
    the database tables that this example uses.

    If you need to modify the schema, you could create a file 
    GIT_ROOT/.openshift/action_hooks/alter.sql and then use
    GIT_ROOT/.openshift/action_hooks/deploy to execute that script (make sure to
    back up your application + database w/ 'rhc app snapshot save' first :) )

