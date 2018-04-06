#!/bin/sh

set -ex

date
sudo docker run --net=host selenium/standalone-chrome
