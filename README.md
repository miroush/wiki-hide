wiki-hide
=========

Hide selected Mediawiki pages with adding your substring ("lockstring") to the name of the page. You can access it via HTTT Authentication then.

You have to configure:
* lockString
* username
* password


Configure you lockString to any reasonable substring - i.e. something what does not occur in the very page name.

For example:
$lockString = '..!'


Create page "Tools".
Anyone can access it.

Create page "Tools ..!" or "..! Tools".
Now HTTP Authentication is required.

All pages which include your lockString will be protected from public.
It is independent on the Mediawiki user account mechanism, which comes handy too.

Deployment:
Change credentials in the wiki-hide.php file.
Copy wiki-hide.php to extensions/wiki-hide/wiki-hide.php;
Edit LocalSettings.php - add line:
require_once "$IP/extensions/wiki-hide/wiki-hide.php";
