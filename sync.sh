#!/bin/bash

echo "Deploying ClassicalTrax"

SOURCE_DIR="/Users/user/Documents/Coding/www/Classical-Trax/htdocs"
TARGET_DIR="/public_html"
TARGET_SERVER="class690@classicaltrax.org -p18765"

echo "Synchronising"
echo ""

# rsync to live server

rsync -e "ssh -p 18765" --progress --stats --exclude wp-config.php --exclude nbproject --archive -z --compress --delete -t /Users/user/Documents/Coding/www/Classical-Trax/htdocs/ class690@classicaltrax.org:public_html

echo ""
echo "Done, safe."

