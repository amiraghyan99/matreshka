#!/usr/bin/env bash

set -e

git add .

echo "Enter Commit Name:"
read commit

if [ -z $commit ]; then
  echo "Empty commit try again:"
  exit
fi

echo $commit

git commit -m "$commit"

git push origin main