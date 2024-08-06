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
3. **Commit Messages**
- Use well-defined messages. For instance,
  ```bash
  git commit -m "Added home-loader"
  ```
5. **Pull Requests**
- All merging should be done to *main*

## Testing
- Test the theme's functionality locally to ensure everything works as intended.
- Verify that the site is responsive and displays correctly across various devices and screen sizes.
- Enable WordPress debug mode by setting **'define('WP_DEBUG', true)'** in **'wp-config.php'** to identify errors.

## Staging and Production Development
1. **Staging Process**
-
2. **Production Process**
-

## Team Communication and Collaboration
- **Slack:**
- **Github Projects:**
