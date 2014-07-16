#!/bin/bash

echo "# Ten skrypt jest smutny jesli nie jestes rootem"
echo "# Aktualny uzytkownik to:"
whoami

echo "# Instalacja GITa"
apt-get update
apt-get -y --force-yes install git

function bang()
{
	echo "# Ide do /tmp"
	cd /tmp

	echo "# Klonuje skrypty rozruchowe"
	git clone https://github.com/paweljw/debian-recovery.git
	cd debian-recovery
	chmod +x payloads/*.sh
	run-parts ./payloads/*
}