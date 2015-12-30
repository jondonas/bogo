#Welcome to the Bogo Project!

##Background
From Wikipedia: Bogosort is a particularly ineffective sorting algorithm based on the generate and test paradigm.

##Purpose
We want to build a webapp that allows you to sign up for email/text notifications for a BogoParty. Essentially, this server will be running the bogo algorithm (using python) and will send out an alert when the sorting algorithm completes. Sorting will be optimized to finish every 45 days or so.

##Components
- MySQL database to store emails, usernames, etc.

- Flask web framework will be used to manage sending alerts, email confirmation, and serving dynamic content

- NGINX will be used as a reverse proxy and will serve static content

- uWSGI will be used as an application container to manage requests

- Supervisor will be used to start our python script and Flask framework on startup

- Python will be used for the BogoParty code

> Components will be added as development occurs. The above are also currently suggestions and not set in stone. 

##Installation
None yet.

##Project Status
Under active development.

##How to Contribute
Pull requests welcome. Currently, this project is based in Waterloo and is being built in the spare time of the South 8 BogoBoyz ;)

######The end result of this project has little practicality, but is intended to be a fun way for anyone interested to improve their Python, Linux, and Web Development skills. The journey is the destination.
