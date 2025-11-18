#!/bin/bash

echo "Cloning plugin..."
git clone https://github.com/Studio-Vi-Amsterdam/tudelft-tutorial-platform-plugin ./web.app/plugins/tudelft-tutorial-platform-plugin

docker build . \
    --secret id=composer_secret,src=auth.json \
    -t tudelft/tutorial-platform-wordpress:latest
