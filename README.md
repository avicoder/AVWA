# AVWA

**Another Vulnerable Web Application**

[![made-with-python](https://img.shields.io/badge/Made%20with-PHP-1f425f.svg)](https://www.php.org/)  [![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/vjex/AVWA/graphs/commit-activity)  [![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://lbesson.mit-license.org/)  [![Open Source Love svg2](https://badges.frapsoft.com/os/v2/open-source.svg?v=103)](https://github.com/ellerbrock/open-source-badges/)




A vulnerable web application focussed on learning obscure and web 2.0 vulnerabilities

Following vulnerabilities are in scope

  -  User credential enumeration
  -  Session Puzzling
  -   Xpath injection
  -  XML injection
  -   HTTP Parameter Pollution
  -   CORS exploitation
  -  Web Message vulnerability
  -   Web Socket Vulnerability
  -  Privilege provisioning bypass


## Setup

 1.	Install `Easy PHP`.
 2.	Go to `127.0.0.1/home` and click on phpmyadmin
 3.	Create new database with the name same as sql file name for example if the name is `autoparts.sql` then the database name should be `autoparts`.
 4.	Click on newly created db.
 5.	Click on sql tab.
 6.	Open SQL file from the database folder inside the zip archive.
 7.	Copy the content and paste it in the sql query text box and click go.
 8.	Do the same for all sql file inside the database folder given.
 9.	Now copy Labs folder inside the local web directory, you can click on easyphp icon in notification bar and select explore.
 10.	Extract every thing from the `setup.zip` in `localweb` only. Do not attempt to create a folder and then extract it. It could break the hard coded url inside the application.

If you have any difficulty then look for `POC.txt` file inside each test case folder.

