# Error Pages
Error pages is a script that I use to generate http error pages for my websites. 
![image](https://user-images.githubusercontent.com/12321712/37196200-efc85968-239b-11e8-9d86-b38d871f60bd.png)

## Generate or build
### Step #1
Clone the repository and navigate to it
```bash
$ git clone https://github.com/muhammadmuzzammil1998/error_pages.git
$ cd error_pages
$ sudo apt install php-xml
```
`sudo apt install php-xml` if you dont have php-xml installed.
### Step #2
To generate your own pages, just create, update or append the `error_list.xml`.
#### Structure of error_list.xml
```xml
<errors>
	...
	<error>
		...
	</error>
	<error>
		<code>ERROR CODE HERE</code>
		<desc>ERROR DESCRIPTION HERE</desc>
		<href>LINK TO SOLUTION OR HOMEPAGE</href>
		<data>INFO FOR LINK</data>
		<text>SOMETHING TO SAY TO USER</text>
		<color>e67e22</color>
	</error>
	<error>
		...
	</error>
	...
</errors>
```  
### Step #3
After creating, updating or appending the file, run the `error_pages.php` script.
```bash
$ php error_pages.php
```
### Step #4
Configure your server and, you are good to go. 
## Prerequisite
* php
* php-xml
* git

## Troubleshooting
#### ERROR: Unable to load error_list.xml
#### Reason: Script can't load error_list.xml. 
#### Solution:
1. Make sure you make it before running the script.
2. Clone this repository again. 
---
#### Error not listed? Google it.
#### If you don't have php, just use already generated pages as templates and modify them :)
