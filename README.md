# ProjectSECURITY
Project SECURITY is a powerful website security app that will protect your website from hackers, attacks and other threats. It could protect your website from SQLi Attacks (SQL Injections), XSS Vulnerabilities, Proxy Visitors, Spammers and many other types of threats.
# Description
Project SECURITY is a powerful website security app that will protect your website from hackers, attacks and other threats. It could protect your website from SQLi Attacks (SQL Injections), XSS Vulnerabilities, Proxy Visitors, Spammers and many other types of threats.

It uses an intelligent algorithms (similar to the ones used by major industry companies) to detect all known hacker attacks as well as new unknown threats using code recognition and patterns, and automatically takes action.

Project SECURITY comes with powerful admin panel from which you can view all logs and it is also integrated with Ban System from which can be viewed and banned users and countries. The Admin Panel has many features and settings. Through it can be easily managed the security of your website.
# Features
SQLi Protection
Protection from SQL Injections (SQLi) and XSS Vulnerabilities (Cross-Site Scripting).
Proxy Protection
Protection from Proxy, VPN and TOR Visitors or so-called people hiding behind proxies.
Spam Protection
Protection from Spammers and Spam Bots that aim to spam your website.
Input Sanitization
Protection Module that automatically sanitize all incoming and outgoing requests and responses.
Bad Words Filtering
Protection module that filters profanity, bad words, bad links, bad sentences and other bad content in real-time.
DNSBL Integration
Integration with some of the best Spam Databases (DNSBL) to protect your website from Bad Visitors.
AdBlocker Detection
Detects and block visitors that use the AdBlockers to hide the ads on the website.
Intelligent Pattern Recognition
Detects Unknown and Zero-Day Attacks and Exploits.
Industrial-Strength Algorithms
Detects Known Hacker Attacks.
Ban System
Helps you to block and redirect Visitors / Users (IP Addresses), Countries, IP Ranges, Operating Systems, Browsers, Internet Service Providers (ISP) and Referrers.
Bad Bots and Crawlers Protection
Blocks many Bad Bots and Crawlers that will waste your website bandwidth.
Fake Bots Protection
Verifying search engine bots that visit your website whether they are real or fake bots.
Headers Check
Every visitor's response headers will be checked and if there are suspicious objects their access to the website will be denied.
Real-Time Scanning of All Requests
GET, POST and other types of data.
Auto Ban
Function that will automatically block attackers and threats such as Bad Bots, Crawlers and other.
Threat Logs
Each threat and attack is logged into the database, so you can view them later. (No duplicates)
Detailed Logs
The logs contain many information about the Threat / Attack like Browser, Operating System, Country, State, City, User Agent, Location on the Map and other useful information.
IP Lookup
You can investigate IP Address and check if it is present in the script's database
E-Mail Notifications
You will receive an E-Mail Notifications when attack or threat is detected.
Dashboard with Stats
On the Dashboard you can check the Stats for the protection of your website.
Useful Tools
Collection of Tools such as .htaccess Editor, Hash Generator and other.
Errors Monitoring
Useful tool that shows all logged errors from your website.
.htaccess Editor
Edit your .htaccess file directly from the Admin Panel, no need to open it in any external editor.
IP & File Whitelist
A list of IP Addresses and Files that will be ignored by the app and will not be blocked.
Live Traffic
Observe your visitors in real time as they interact with your website.
Visit Analytics
Track and analyze how people use your website.
PHP Configuration Checker
Check current PHP Configuration for potential security flaws.
Site Information
Page with a huge amount of Information and Statistics about your website.
Very Optimized
The script is very lightweight and won't slow down your website loading time.
Fully Responsive
Looks good on many devices and screen resolutions.
Easy to setup
The script is integrated with Installation Wizard that will help you to install the app.
Easy for use
Include two lines of code in any main .php file to protect the whole website.
and many more...
# Requirements
PHP
MySQL
# Installation & Integration
Create a subfolder on your host via FTP or File Manager (You can name it "security" for example)
Upload the files from the "Source" folder of the script into the newly created subfolder on your host
Create a MySQL database (Your hosting provider can assist)
Visit your website where you uploaded the files (For example: yourwebsite.com/security)
The Installation Wizard will open automatically, just follow the steps
Copy the Integration Code that you will see at the end of the Installation Wizard
Put the copied Integration Code in a main .php file of your website
(Examples: database config (connection) .php file; functions .php file; header .php file; core .php file that is included by all other .php files)
# Example integration code:
include_once "projectsecurity_folder/config.php";
include_once "projectsecurity_folder/project-security.php";\
(Change "projectsecurity_folder" with the path on which you installed the product)
# Note: If you are updating the script replace all its files with the updated. If problems arise do a clean installation: Delete the config.php file of Project SECURITY and follow the Installation Steps. To backup your data export all Project SECURITY related database table
# Sources and Credits
Font Awesome Icons - FontAwesome.com
Bootstrap Framework - GetBootstrap.com
DataTables - DataTables.net
jQuery - jQuery.com
AdminLTE - github.com/almasaeed2010/AdminLTE
Select2 - select2.github.io
OpenLayers - github.com/openlayers/openlayers
Chart.js - Chartjs.org
Flag Sprites - Flag-Sprites.com
FuckAdBlock - github.com/sitexw/FuckAdBlock
IP Geolocation API - ipgeolocationapi.com
eXTReMe-IP-Lookup.com - extreme-ip-lookup.com
IPHub - iphub.info
proxycheck.io - proxycheck.io
IPHunter - iphunter.info
BlackBox - blackbox.ipinfo.app
Switchery - abpetkov.github.io/switchery
Popper.JS - popper.js.org
OverlayScrollbars - github.com/KingSora/OverlayScrollbars
