<!-- 
	README - Generic "members only" pages

	Original site: ga-al-anon.org
	Written By: 	Patrick B. Webmaster Area 11 Panel 53
	Date Written: 	Sept, 2013
	
	This set of files will "protect" a sub-directory behind a password. 
	This will ensure that only those knowing the password will utilize these pages.
	
FILES:
README - This file
[DOC ROOT]/members/index.php	- Sees if this was called with a password passed in a POST. 
								If so, it checks the password - if the password clears then the user is send to either the page that called it or the memberswelcome page
								If it is the inital time here, it will ask them their password in a form who will POST their answer back to this script.
[DOC ROOT]/members/memberswelcome.php 	- Is the opening page for the members area
[DOC ROOT]/members/template.php			- a template of any other pages in the "members area." If the user tries to jump to a members "inside page," it will force them to the index page but it will send them back to this page once validated.

SUGGESTIONS:
* I suggest not forget to create a [DOC ROOT]/robots.txt file. 
	Example robots.txt:
	User-agent: *
	Disallow: /members/		#Don't Index the Members area
	
-->