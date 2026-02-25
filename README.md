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
- Build a small session based micro site:
- - Main website landing page. You can use www.pyemotors.co.uk for inspiration. It will need a header/navigation bar that has several menu items that dropdown when hovered over. You do not need to create each page behind the dropdown menus, please only create a link to one other page as to not spend too much time on this. (e.g if you have several hover items in the navigation menu, make them all point to the same page on the microsite.
  - The content for the main page and other link from the navigation menu must be taken from the table in the database.
  - A login button or link that will take you to a login form. This will then check the entered username/password against a table in the database and login to the backend/admin section if successful otherwise an error message will be shown.
  - Once logged in to the backend/admin section the user should be able to edit the content of the pages by updating the content stored in the MySQL table
  - You can use the second port that is in the codespace to view a phpmyadmin that is set up to administer the database
- Commit your changes to your repository by clicking the tab on the left that says "Source Control" > type a commit message and press "Commit" with the green tick. Once this is done your repository should have updated with your latest code changes. Once you have checkd that this has occured, send reply to the email that was sent to you with a link to your repository.
