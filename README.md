# JCUBSB WordPress Theme

## Overview
The JCUBSB theme is a custom WordPress theme designed for the James Cook University Student Board. It features a clean, responsive design, optimized for accessibility and SEO.

## Features
- Custom Widgets: Recent events, student resoruces, Social Media Links, Upcoming Events
- Responsive Design: adaptable to various screens
- SEO Optimized: Includes best practices for search engine optimization
- Pages: Homepage, Events, Student Resources, Fullscreen menu, contact/feedback

## Installation
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/cbms26/JCUBSB-group-1.git
   ```
2. **Upload the Theme:**
- Zip the jcubsb_theme folder.
- Upload via Appearance > Themes > Add New in the WordPress dashboard.
3. **Activate the theme**
- Navigate to Appearance > Themes and activate the JCUBSB theme.

## File Structure
**Function.php**:
The functions.php file in our theme is used to manage various functionalities. Currently, it handles the theme logo setup, integrates Google Fonts, and manages social media links. 
Here’s an overview of what you can do with this file:

**Theme Logo:** Customize the site logo by adding or changing the code responsible for displaying and managing the logo.
**Google Fonts:** Add or modify the Google Fonts used in the theme by adjusting the enqueue functions that load these fonts.
**Social Links:** Update or add new social media links by modifying the functions that output social media icons and URLs.
Additionally, consider adding custom post types, theme support features, and custom functions. Always back up the file before editing, use descriptive names, and comment your code for clarity.

**Navigation.php:**
The navigation.js file manages the hamburger menu functionality on the website. It uses JavaScript to toggle the visibility of the menu when the hamburger icon is clicked, ensuring it shows or hides smoothly. It also ensures the menu adapts to different screen sizes, providing a responsive design, and adds animations to enhance the user experience.

**Header.php:**
The header.php file creates the top section of the website, including the <head> tags, site title, navigation menu, and any stylesheets or scripts. To enhance its functionality, you can include a custom logo, breadcrumbs for navigation, accessibility features like ARIA landmarks, a search form, social media icons, the site description or tagline, a notification bar for updates, and header widgets for additional content such as contact info or promotions.

**Footer.php**
The footer.php file handles the bottom section of the website, including closing HTML tags, footer content, and end-of-page scripts. To enhance it, consider adding footer widgets, a newsletter signup form, contact information, social media links, additional navigation, a back-to-top button, a mini site map, and legal information.

**Style.Css:**
The style.css file is used to style your WordPress theme, defining how your website looks. It controls things like colors, fonts, layouts, and the overall design. By editing this file, you can customize the appearance of different parts of your site, such as headers, menus, and content areas, to fit your design preferences. This is where you make changes to how elements are displayed, ensuring your website looks just the way you want it.
