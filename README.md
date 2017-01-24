# prospectlore
Work project for private PHP stuff. Not intended for public consumption.

Outline of tasks to be done:

1. New mushcode command that outputs the lore database.  The names of the lores, their IDs, and their tree structure.

2. Shell script that logs into the mush, runs the command from Step 1, and writes the data to a file on the web server (using scp/ftp/whatever).

3. PHP function that parses the file from Step 2, and generates a big honking form with all the lores.

4. New mushcode command that outputs the player's current lores in the format used by +mlset

5. PHP function to take lores from Step 4, and ouput the form from Step 3, pre-filled appropriately.

6. PHP function to take the form from Step 3, and output the values in the +mlset format

With these six steps done, here's the workflow:

1. System cron job runs the script from step 2 regularly, keeping the lores site up to date with the current lores settings from each game.

2. Player or staffer can take the current lores for a player, and paste them into the website.

3. With the lores on the website, the player or staffer can adjust the lores to taste, and get the new data.

4. A player can paste the new lores into +myjob/add.

5. A staffer can either just paste the new lores directly into +mlset, or if getting them from a job, paste them into the website to check, before putting them into +mlset.
