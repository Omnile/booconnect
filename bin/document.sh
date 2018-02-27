#!/bin/sh
# bin/ci.sh

deploy_document(){

	echo ""
	# get sami if it does not exist.
	# [ -e sami.phar ] && echo "Sami found\r\n" || curl -O http://get.sensiolabs.org/sami.phar | php;

	# get couscous if it does not exist.
	# [ -e couscous.phar ] && echo "Couscous found\r\n" || curl -O http://couscous.io/couscous.phar | php;

	# Remove the last deployment if it exists
	rm -rf ./boodoc;

	echo "Generating Documentation\r\n";

   	# Run the sami generator
	# php sami.phar update ./sami.config.php -v;

	# Run the couscous static site generator
	# composer document;

	# Seed the database for the api documentation
	php artisan migrate:refresh --seed;

	# Run the api documentation generator
	composer document;

	# clone the current documentation and climb into the directory
	git clone http://github.com/omnile/boodoc.git;

	cd boodoc;

	# Remove all files from the
	shopt -s extglob;
	shopt -s dotglob nullglob;
	rm -rf !*.git;


	# copy the generated document folder into the empty github folder
	cp -f ../public/docs/* ./;
	cp -f ../public/img/logo.png ./images/logo.png

	# copy all files from the sami generated folder into the api folder
	# mv  -v ../build/sami/* ./api/;

	# copy all files from the coverage generated folder into the coverage folder
	# mv  -v ../build/coverage/* ./coverage/;

	# Add all and commit to github if deploy was enabled
	git add --all && git commit -m 'Update Documentation 📒' && git push origin master;
}


# Check that the commits has been made
if git diff-index --quiet HEAD --; then
    if [[ "$(git push --porcelain)" == *"Done"* ]]
	then
		echo "Local changes were pushed."

		deploy_document
	fi
else
    echo "Please commit and push your changes first."
fi
