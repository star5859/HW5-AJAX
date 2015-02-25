# HW5 - AJAX
##SEIS752 – Advanced Web Application Development   [Spring 2014]
###Professor 	Lloyd Cledwyn
###HW #5:	AJAX & Version Control

##Summary
ADD Ajax to your solution and add it to a version control system.

##Purpose:
To understand the core XMLHTTPRequest Object that powers AJAX and familiarize oneself with Version Control

##How to turn in:
1. Either 
 - create a bange on your HW4 project, name it #5 and go from there
 - or start a new folder in your private repo that I created for you under the *752* account
2. Inlcude all php files to run your site, Including {Search, SearchAjax1 and SearchAjax2}
3. Create a GitHub Version of you site, and send me a link

##Remember:
Keep track of your time.  If you find yourself still working on it after 8 hours stop.  Write a (short) summary of where you think you are in the scope of this assignment.  What were the issues that took most of your time.  If you were to start over again, what might you do differently, if you were getting paid to do this and your boss assigned the next two work days, how would you plan to use your time to move this towards completion.

##Assignment:
Populate your user table with the following dataset users.sql
Create a version control repository, copy your files from HW3 into it and commit to the version control. 
If you are keen on subversion, I can create a svn repo for you.  Or you can create a public version here: https://code.google.com/hosting/.  Don’t forget http://tortoisesvn.net/.
If you are keen on GIT, I reccomend http://github.com They have a nice GUI tool for Windows and Mac if you don’t love love the command line.
Implement a search page within your application.  
Search - A standard form with a search field and button that will post the form values to SearchResults.php and search for an existing user in the application and return matching results to the screen.
Commit to version control
SearchAjax - Using the XMLHttpRequest object create a page that loads the reusults from SearchResults.php on the page without a full page reload.
Commit to version control
SearchAjax2 - Same as above, but use a preexisting javascript library.  I reccomend jQuery if you have no strong feelings one way or the other.
Commit to version control
