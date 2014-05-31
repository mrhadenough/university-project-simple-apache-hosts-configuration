#!/bin/bash
# this script has been created by Shulyak Constantine
# It is simple apache service to manage virtual hosts
# It should be run by root user to get important permissions
# Default script location is HTTP_DOC/bin
# All necessary folders it will create automatically

dir="../tmp"
hosts_add="./hosts_add"
hosts_remove="./hosts_remove"
hosts_enable="./hosts_enable"
hosts_disable="./hosts_disable"

if [ -d $dir ]; then
  cd $dir
  echo "changing directody to" $(pwd)
else
  mkdir $dir
  echo "creating directory $dir"
  cd $dir
  echo "changing directody to " $(pwd)
  echo "creating important folders"
  
  mkdir ${hosts_add:2}
  mkdir ${hosts_remove:2}
  mkdir ${hosts_enable:2}
  mkdir ${hosts_disable:2}
fi

echo "start service"

while true; do
  #add new host
  if [ "$(ls -A $hosts_add)" ]; then
    
    echo "copying files" $(ls $hosts) "to /etc/apache2/sites-available/"
    cp $hosts_add/* "/etc/apache2/sites-available/"
    
    echo "activating new sites"
    for i in $(ls -A $hosts_add/); do
      echo "Enabling: $i site"
      a2ensite $i
      echo "Remove $i file from temperary folder"
      rm $hosts_add/$i
    done
    service apache2 reload
  fi
  
  # remove host
  if [ "$(ls -A $hosts_remove)" ]; then
    for i in $(ls -A $hosts_remove); do
      echo "Remove $i"
      a2dissite $i
      rm /etc/apache2/sites-available/$i
      rm $hosts_remove/$i
    done
    service apache2 reload
  fi
  
  # enable host
  if [ "$(ls -A $hosts_enable)" ]; then
    for i in $(ls -A $hosts_enable); do
      echo "Enabling: $i"
      a2ensite $i
      rm $hosts_enable/$i
    done
    service apache2 reload
  fi
  
  # disable host
  if [ "$(ls -A $hosts_disable)" ]; then
    for i in $(ls -A $hosts_disable); do
      echo "Disabling $i"
      a2dissite $i
      rm $hosts_disable/$i
    done
    service apache2 reload
  fi
  
  sleep 10;
done
