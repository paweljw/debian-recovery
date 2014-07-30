#!/bin/bash

# http://bit.ly/1zI6Pbg

function bang()
{
	echo "# Ten skrypt jest smutny jesli nie jestes rootem"
	echo "# Aktualny uzytkownik to:"
	whoami

	echo "# Instalacja GITa"
	apt-get update
	apt-get -qq -y --force-yes install git mc
	
	echo "# Ide do /tmp"
	cd /tmp

	dpkg-reconfigure locales
	update-locale LANG="pl_PL.UTF-8" LANGUAGE="pl_PL"

	export LANGUAGE=pl_PL.UTF-8
	export LANG=pl_PL.UTF-8
	export LC_ALL=pl_PL.UTF-8

	locale-gen pl_PL
	locale-gen pl_PL.UTF-8

	echo "# Klonuje skrypty rozruchowe"
	rm -rf debian-recovery
	git clone https://github.com/paweljw/debian-recovery.git
	cd debian-recovery
	chmod +x payloads/*
	run-parts ./payloads
}

bang