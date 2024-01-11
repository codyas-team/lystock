#!/bin/bash

git fetch --all
git checkout --force origin/master
composer install
chmod +x ./deploy.sh
