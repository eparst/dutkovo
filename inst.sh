#!/bin/bash
ROJECT_NAME="dutkovo"
echo "Input project name:[$PROJECT_NAME]"
read req
if [ "$req" != "" ]; then
	PROJECT_NAME=$req
fi
cd $PROJECT_NAME
#######################################
echo " "
echo "install rhc: (1), setup rhc-app: (11)"
echo "install heroku: (2), setup heroku-app: (22)"
read paas
if [ "$paas" == "1" ]; then
	sudo gem install rhc
	rhc setup
fi
if [ "$paas" == "2" ]; then
	wget -qO- https://toolbelt.heroku.com/install-ubuntu.sh | sh
	heroku login
	exit
fi
if [ "$paas" == "22" ]; then
	heroku create $PROJECT_NAME
	mkdir $PROJECT_NAME
	exit
fi
#######################################
if [ "$paas" == "1" -o "$paas" == "11" ]; then
	echo "Create app php-5.3? y/n"
	read req
	if [ "$req" == "y" ]; then
		rhc app create -a $PROJECT_NAME -t php-5.3
	fi
	if [ "$req" == "y" ]; then
		rhc app create -a $PROJECT_NAME -t php-5.3
	fi
	echo " "
	echo "add cartridge mysql-5.1? y/n"
	read req
	if [ "$req" == "y" ]; then
		rhc cartridge add -a $PROJECT_NAME -c mysql-5.1
	fi
fi
#######################################
echo " "
typ = "2"
echo "MODx:(1), Joomla:(2) ? 1/2 [default: Joomla]"
read typ

echo " "
echo "download .sql and app-dir from storage? y/n"
read req
if [ "$req" == "y" ]; then
	echo "Input login data in format [user:passw] please: "
	read login
	echo " "
	if [ "$login" != "" ]; then
#		curl --user $login -o .openshift/action_hooks/$PROJECT_NAME.sql https://webdav.yandex.ru/backups/sql/$PROJECT_NAME.sql 
#		curl --user $login -o php/$PROJECT_NAME.tar https://webdav.yandex.ru/backups/www/$PROJECT_NAME.tar
		cd php
#		tar xf $PROJECT_NAME.tar
		rm -f $PROJECT_NAME.tar
		rm -f configuration.php
		rm -f manager/includes/config.inc.php
		cd ..
	fi
fi
git remote add upstream -m master git://github.com/eparst/dutkovo.git
git pull -s recursive -X theirs upstream master

if [ "$typ" == "2" ]; then
	cd php
	mv $PROJECT_NAME"_configuration.php" configuration.php
	rm -f $PROJECT_NAME"_configuration.php"
fi	
if [ "$typ" == "1" ]; then
	cd php
	mv $PROJECT_NAME"_config.inc.php" manager/includes/config.inc.php
	rm -f $PROJECT_NAME"_config.inc.php"
fi	
cd ..
# note that the git pull above can be used later to pull updates to Joomla
#git push

./push
