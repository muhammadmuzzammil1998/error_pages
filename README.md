# Error Pages
Error pages is a script that I use to generate http error pages for my websites. 

# Generate 
To generate your own pages, just create, update or append the `error_list.xml`.
## Structure of error_list.xml
```
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
	</error>
	<error>
		...
	</error>
	...
</errors>
```  

After creating, updating or appending the file, run the `error_pages.php` script.
```
$ php error_pages.php
```
And, you are good to go. 
# Prerequisite
* php

# Troubleshooting
### WARNING: main.css not found. Pages may not be able to display errors correctly.
#### Reason: Script can't find `main.css` for styling the `html` files.
#### Solution: Clone this repository again. 
---
### ERROR: Unable to load error_list.xml
#### Reason: Script can't load error_list.xml. 
#### Solution:
1. Make sure you make it before running the script.
2. Clone this repository again. 
---
### Error not listed? Google it.
### If you don't have php, just use already generated pages as templates and modify them :)