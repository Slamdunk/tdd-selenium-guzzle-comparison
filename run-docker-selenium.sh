#!/bin/sh

set -ex

date
docker run --net=host selenium/standalone-chrome
