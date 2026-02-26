# PHP / MySQL Full Stack Developer Technical Assessment

## Setup
- Please be advised, this setup only covers vanilla PHP so if you have your own github repository or other coding space that you prefer to use and can provide us with a link to the full source code then we can review that instead of the below
- Otherwise:
- Log in/create a Github account
- In the top right side of the page click "Use this template > Create new repository"
- Call the repository "PyeMotors"
- Visibility "Public"
- Create repository
- Go to your own Repositries and find the new one you just created
- Click Code > Codespaces > Create codespace on main (Wait for the codespace to load, this can take up to 5 minutes)
- Test the codespace works correctly by going to the Ports tab at the bottom and you should be able to hover over port 8000 and click "Open in Browser". You should then see "hello world" appear, this means the codespace is running correctly.

## Criteria
- Build a basic small session based micro site:
- Create a MySQL database by clicking on the Port 8080 in the Codespace and clicking "Open in Browser"
- Create a database
- Create a table that will hold the index page user entered content. You will be emulating the design of a Content Management System like Wordpress. The Marketing Department will be responsible for entering the page content from the backend that you create. Take the content from here: https://www.pyemotors.co.uk/about-us/
- Main website landing page, this will be the only frontend page you need to build. It will need a header/navigation bar that has 2 menu items that dropdown when hovered over. You do not need to create each page behind the dropdown menus, please only create a link back to the main page as we don't expect you to spend too much time on this. Additional pages not required.
  - The page content (not HTML or javascript, only user editable content) for the main page must be taken from the table in the database.
  - A login button or link that will take you to a login form. This will then check the entered username/password against a table in the database and login to the backend/admin section if successful otherwise an error message will be shown.
  - Once logged in to the backend/admin section the user should be able to edit the content of the pages by updating the content stored in the MySQL table
  - You can use the second port that is in the codespace to view a phpmyadmin that is set up to administer the database
- Commit your changes to your repository by clicking the tab on the left that says "Source Control" > type a commit message and press "Commit" with the green tick. If you receive a message saying: "There are no staged changes to commit.
Would you like to stage all your changes and commit them directly?" Then click "Yes".
- You should then see the green button change to "Sync Changes". Click this and if presented with a message saying "This action will pull and push commits from and to "origin/main"." then click "OK.
Once this is done your repository should have updated with your latest code changes. Once you have checked that this has occured, send reply to the email that was sent to you with a link to your repository.
