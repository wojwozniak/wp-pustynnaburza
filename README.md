# Pustynna Burza

Wordpress theme created for Hufiec ZHP Dąbrowa Górnicza for their's flagship event great return!

After adding this template to the site setup is needed:
-> Add menu links to both availible menus
-> Set front page to front-page.php and post page to index.php
-> Add logo using wordpress wp-admin settings


File structure:

header.php and footer.php are used on every page as header and footer appropriately

functions.php enqueues scripts and styles for every page

front-page.php is front page of the website

index.php is used as main post page (every single post is loaded using template-parts/content-archive template)

404.php is used for 404 error page

page.php is left as basic page template, it should only be used as interim measure when needed and replaced with proper templates (as of release day it isn't used)

search.php is used to show search results (basically filtered index.php)

searchform.php replaces default searchbar with better-looking custom one

single.php displays single post (e.g. after clicking post on index page)

style.css is main stylesheet:
-> At the beggining there are page-wide styles
-> Then you have page-specific styles
-> Every single page-specific style starts with commented "### pagename.php ###" allowing easy search
