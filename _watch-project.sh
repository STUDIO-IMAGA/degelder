#!/bin/bash

echo "Watching project files for changes";

tput bold; echo "Running: gulp"
tput sgr0
gulp

tput bold; echo "Running: gulp watch"
tput sgr0
gulp watch

read;
