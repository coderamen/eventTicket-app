INSTALLATION NOTE
  Installing PHP using HOMEBREW (package manager to install stuff for mac that apple didn't)
  > Using HOMEBREW for rapid and ease installation for mac
    1. Paste this code "/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)" to install HOMEBREW
    2. Check PHP version using brew by typing on terminal "brew search php" to display a list example "homebrew/php/php70"
    3. To install just type "brew install homebrew/php/php70" in the terminal and it will run the command.
    4. Once installation complete, double check by typing "php -v" in the terminal to display the current version on your local.
  Installing Laravel (Step by step)
 	Installing Composer(Dependency Manager for PHP) from getcomposer.org
   	1. 	Click on Download and copy the first paragraph command and paste it to your terminal
   		< 
   		 php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
		 php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
		 php composer-setup.php
		 php -r "unlink('composer-setup.php');"
		>
	2. To install Globaly => Go to Get Started from getcomposer.org and click on globaly to redirect to section which call it directly to the PHP
		 intepreter by typing: 
		< 
		 move composer.phar to a directory that is in your path
		>
		(Note: Make sure to test after installing composer by typing composer and enter where a list of commands from composer will appear)
	3. After Composer is installed, go to https://laravel.com/ and click on Documentations which directs you to Installation guide to laravel.
		Scroll down to Installing Laravel section, copy "composer global require "laravel/installer" to your terminal this will install laravel into your machine.
		(Note: To install packages, just type "composer require nesbot/carbon" in your terminal, you can search and browse suitable packages via https://packagist.org)
	4. Once Laravel is installed, in order for Laravel executable in your terminal, please take note to add Laravel path in your bashrc/bash_profile as below:
		<
		Make sure to place the $HOME/.composer/vendor/bin directory (or the equivalent directory for your OS) in your $PATH so the laravel executable can be located by your system. 
			a. Type "nano ~/.bash_profile" enter and then type (export PATH="$HOME/.composer/vendor/bin:$PATH")
			b. Ctrl + C to save and exit, Ctrl + O to save only then Ctrl + X to exit nano. 
		>
	5. Restart terminal and type laravel in the terminal to test if it works(it will display a list of commands.)

	6. To test create a new app by typing "Laravel new", then type "php artisan serve" and open browser, type "localhost:8000" to check. Installation complete.
	