#!/bin/bash

REQUEST=/var/www/html/mga.project.steverobbins.name/request
BIN_BOX=/var/www/html/mga.project.steverobbins.name/box2/bin/box
BIN_COMPOSER=/usr/local/bin/composer
REPO_URL=https://github.com/steverobbins/magento-guest-audit.git
REPO_FOLDER=/var/www/html/mga.project.steverobbins.name/mga
PHAR_DEST=/var/www/html/mga.project.steverobbins.name/mga.phar

if [ ! -f $REQUEST ]; then
  exit 0
fi

rm -rf $REPO_FOLDER $REQUEST
git clone $REPO_URL $REPO_FOLDER
cd $REPO_FOLDER
$BIN_COMPOSER install
$BIN_BOX build -c box.json
rm -f $PHAR_DEST
mv $REPO_FOLDER/mga.phar $PHAR_DEST
