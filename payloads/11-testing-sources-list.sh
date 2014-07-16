cd /etc/apt
cp sources.list sources.list.bak
cp /tmp/debian-recovery/resources/sources.list .
apt-get update
apt-get -y --force-yes dist-upgrade