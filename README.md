In order to run this application please pull this project down from the <Main> branch.
RUN CMD "docker-compose up -d --build site";
If error occur on build, it's likely due to port conflicts, so you might need to change the ports for mysql, php and site in the follow files:
-docker-compose.root.yml
-docker-compose.yml

within src/public/index.php are all the files.
There's an example of how cat class could be created, as well as a mass create function there as well that could apply to other classes.

There isn't a need for mysql, since I have not gotten the chance to implement the ability to store the information into the DB, since I have not found a way to make the installation simple.
