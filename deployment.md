# Deployment Instruction for JCUBSB_Theme
## Development and Deployment Workflow
### Tools Used
- **Local Development:** Local By Flywheel
- **Version Control:** Github
- **Team Communication:** Slack
- **Production Hosting:** AWS Lightsail
### Pre-requisites
- **Local By Flywheel** for local Development
- **Git** for version Control
## Local Development Setup
1. **Clone the Repository:**
- From cmd or git bash, run the following command:
  ```bash
  git clone https://github.com/YourUsername/JCUBSB-group-1.git
  ```
2. **Set Up Local Environment:**
- Launch Local by Flywheel (or any other preferred) and follow the setup wizards to create a 'New Site' 
3. **Replace Default Theme:**
- Navigate to the site’s `wp-content/themes/` directory.
- Replace the default theme with the `jcubsb_theme` from the cloned repository.
4. **Start Development:**
- Use Local by Flywheel or any that you have used to start the site.
- Access the site in a web browser and begin development.

## Version Control
1. **Branching**
- **Main Branch** consists the production code
- **Staging Branch** used for testing the features of site before sending to main.
2. **Commit Messages**
- Use well-defined messages. For instance,
  ```bash
  git commit -m "Added home-loader"
  ```
3. **Pull Requests**
- All merging should be done to *main*

## Testing
- Test the theme's functionality locally to ensure everything works as intended.
- Verify that the site is responsive and displays correctly across various devices and screen sizes.
- Enable WordPress debug mode by setting **'define('WP_DEBUG', true)'** in **'wp-config.php'** to identify errors.

## Staging and Production Development
1. **Staging Process**
- Push and commit changes from the local development environment to the staging branch on GitHub.
- Review the code and conduct tests in the staging environment to ensure everything is functioning as expected.

2. **Production Process**
- Once the staging tests are successful, merge the staging branch into the `main` branch.
- Deploy the `main` branch to the production environment on AWS Lightsail.
- Monitor the deployment for any issues and ensure that the site is live and functioning correctly.

### Team Communication and Collaboration
1. **Slack**: 
- Use Slack for real-time communication, project updates, and issue tracking.
- Channels for development, testing, and deployment should be established for better coordination.

2. **GitHub Projects**: 
- Utilize GitHub Projects to track tasks, manage issues, and monitor the progress of the development cycle.
- Assign tasks to team members, set deadlines, and track milestones to ensure timely delivery of the project.
