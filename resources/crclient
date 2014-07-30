#!/bin/sh

adduser $1 
chmod 755 /home/$1 
mkdir /home/$1/mail 
mkdir /home/$1/mail/$1 
mkdir /home/$1/mail/$1/Maildir 
chown vmail:vmail /home/$1/mail/$1/Maildir 
chown vmail:vmail /home/$1/mail/$1 
chown vmail:vmail /home/$1/mail 
chmod 700 /home/$1/mail/$1/Maildir 
chmod 700 /home/$1/mail/$1 
chmod 700 /home/$1/mail 