# Setup Guide

This quick start guide assumes that you are already reasonably familiar with WeeWX and that it is already installed on your computer along with a webserver, php and curl. For a light-touch webserver, Lighttpd is a good choice. A good guide for installing PHP 7.0 and Lighttpd on a RaspberryPi can be found at https://pimylifeup.com/raspberry-pi-lighttpd/

If you are carrying out a fresh install of WeeWX, you are strongly recommended to use the setup.py method (http://www.weewx.com/docs/setup.htm)

IMPORTANT. After installing PHP please make sure you install all the PHP modules appropriate for your version of PHP. Failure to due so may mean that forecasts and current conditions fail to update. This is an example for PHP7.3 modules on a Debian based distribution: -

	apt-get install php7.3-pear php7.3-curl php7.3-dev php7.3-gd php7.3-mbstring php7.3-zip php7.3-mysql php7.3-xml

To enable weeWX to communicate with the weather34 dashboard template, you must install the CRT plugin, (stands for Cumulus Real Time). Please follow the detailed instructions at https://github.com/weewx/weewx/wiki/crt. After installation edit the weewx-conf file. Go to the  [CumulusRealTime] which will likely be near the end of the script. Change this section to reflect the following: -

		[CumulusRealTime]
    			filename = /var/www/html/realtime.txt
    			unit_system = METRIC

If your path to your web root is different, please amend the path in front of '/realtime.txt' accordingly

Download the current version of WX-HWS-master zip file at https://github.com/steepleian/WX-HWS

Important. Depending on the configuration of your server, you may have to change your file permissions for the root directory (normally /var/www/html/ ). Open the terminal, enter the following commands:

	sudo su
	chmod 777 -R /var/www/html

Close the terminal

This new version will require a clean install. Extract the .zip file into the root of your webserver.

Now restore permission settings to the root and set correct ownership for the files in the webserver root folder. Open terminal and enter the following commands:

	sudo su
	chown your_user_name:www-data -R /var/www/html/
	chmod 0775 -R /var/www/html/
	
You can now test that the template is working by opening it up in your browser. Initially you will see random demo data. Click on the menu button at the top-left corner and select settings. This will open up a web form in which you apply your own settings. Pay particular attention to the location of the realtime.txt file being generated on a loop cycle by weeWX. The suggested default location is “/var/www/html/realtime.txt”

If you intend to use your own weeWX data archive to generate the pop-up charts (wxcharts setting), please refer to the 'CHARTS_STATISTICS_GUIDE.md' document for further setup instructions.

For an in depth guide on configuring a remote server please refer to 'taylormia_remote_server_setup.pdf'

Finally refresh your browser and you should see your own live weather station data. If things go wrong, check your settings carefully ensuring that the realtime.txt file and API keys and tokens have been correctly entered. 

If you have any issues please raise directly with steepleian@gmail.com.
