# Site Management for JCUBSB Theme

## Overview
This document provides instructions for managing the JCUBSB website. It includes details on adding content, managing plugins, customizing the theme, and performing regular site maintenance.

## Table of Contents
1. [Adding New Content](#adding-new-content)
    - [Pages](#pages)
    - [Posts](#posts)
    - [Events](#events)
    - [Media](#media)
2. [Managing Plugins](#managing-plugins)
    - [Installed Plugins](#installed-plugins)
    - [Adding New Plugins](#adding-new-plugins)
    - [Plugin Management](#plugin-management)
3. [Theme Customization](#theme-customization)
4. [Managing Menus](#managing-menus)
5. [Widgets](#widgets)
6. [Backup and Updates](#backup-and-updates)
    - [Regular Backups](#regular-backups)
    - [Updates](#updates)
7. [User Management](#user-management)
8. [Security](#security)

## Adding New Content

### Pages
1. Navigate to `Pages > Add New` in the WordPress dashboard.
2. Enter a title and content for the page using the Block Editor.
3. Configure page attributes such as parent page, template, and order if necessary.
4. Preview the page to ensure it looks correct.
5. Click `Publish` to make the page live.

### Posts
1. Navigate to `Posts > Add New`.
2. Enter a title and content for the post.
3. Assign the post to one or more categories to help organize the content.
4. Add tags if necessary to improve searchability.
5. Set a featured image to represent the post visually.
6. Preview the post and click `Publish` to make it live.

### Events (Using Events Calender plugin)
## Events (Using The Events Calendar Plugin)
The Events Calendar plugin is used to manage events on the site. Follow these steps to add and manage events:

### Adding a New Event
**Step 1:** Navigate to `Events > Add New`.

**Step 2:** Enter the event title and description.

**Step 3:** Set the event date and time:
- **Event Start/End Date & Time**: Choose the start and end date and time.
- **All Day Event**: Check this box if the event lasts all day.

**Step 4:** Set the event location:
- **Location Name**: Enter the name of the location.
- **Address**: Enter the address details, including city, state, and zip code.
- **Show Map Link**: Check this box to display a map link on the event page.

**Step 5:** Set the event organizer:
- **Organizer Name**: Enter the name of the organizer.
- **Phone, Email, Website**: Provide the organizer's contact details.

**Step 6:** Add event categories:
- **Event Categories**: Select one or more categories that apply to the event.
- **Add New Event Category**: If needed, create a new category by entering a name and clicking `Add New Event Category`.

**Step 7:** Set additional event options:
- **Event URL**: Provide a URL for more information about the event.
- **Event Cost**: Enter the cost of the event, if applicable.

**Step 8:** Set a featured image to visually represent the event.

**Step 9:** Preview the event and click `Publish` to make it live.

### Managing Existing Events
**Step 1:** Navigate to `Events > Events`.

**Step 2:** To edit an event, click on the event title.

**Step 3:** To delete an event, hover over the event title and click `Trash`.

### Displaying Upcoming Events
After creating an event, add it to the Upcoming Events page using the Pattern Block3 layout:

**Step 1:** Navigate to `Pages > All Pages`.

**Step 2:** Find and edit the "Upcoming Events" page.

**Step 3:** Add the Pattern Block3 layout:
- Click on the `+` icon to add a block.
- Search for "Pattern Block3" and select it.

**Step 4:** Update the event details in the Pattern Block3 layout:
- Replace the placeholder image with the event's featured image.
- Update the event title and description.
- Change the event date and time.
- Insert the link to the event page created by The Events Calendar plugin.

**Step 5:** Preview the page to ensure the event details are correct.

**Step 6:** Click `Update` to save the changes.

### Moving Past Events to the Past Events Page
Once an event has passed, move it to the Past Events page:

**Step 1:** Navigate to `Pages > All Pages`.

**Step 2:** Find and edit the "Upcoming Events" page.

**Step 3:** Locate the event in the Pattern Block3 layout and remove it.

**Step 4:** Navigate to the "Past Events" page and edit it.

**Step 5:** Add the event details to the Past Events page:
- Click on the `+` icon to add a block.
- Search for "Pattern Block3" and select it.
- Replace the placeholder image with the event's featured image.
- Update the event title and description.
- Change the event date and time.
- Insert the link to the event page created by The Events Calendar plugin.

**Step 6:** Preview the page to ensure the past event details are correct.

**Step 7:** Click `Update` to save the changes.

### Adding Past Event Images to the Gallery
Upload images from past events to the NextGEN Gallery plugin:

**Step 1:** Navigate to `Gallery > Add Gallery/Images`.

**Step 2:** Select "Upload Images" and choose the files from your computer.

**Step 3:** Add the images to the existing gallery or create a new gallery for the past event.

**Step 4:** Navigate to `Pages > All Pages` and edit the "Past Events" page.

**Step 5:** Insert the gallery block:
- Click on the `+` icon to add a block.
- Search for "NextGEN Gallery" and select it.
- Choose the gallery you just uploaded the images to.

**Step 6:** Preview the page to ensure the gallery is displaying correctly.

**Step 7:** Click `Update` to save the changes.

### Media
**Step 1:** Navigate to `Media > Add New`.

**Step 2:** Upload images, videos, and other media files.

**Step 3:** Add appropriate alt text to images for accessibility.

**Step 4:** Use media files in pages and posts by selecting them from the media library.
### Media
1. Navigate to `Media > Add New`.
2. Upload images, videos, and other media files.
3. Add appropriate alt text to images for accessibility.
4. Use media files in pages and posts by selecting them from the media library.

## Managing Plugins

### Installed Plugins
1. **WPForms** insert contact form,feedback form,join us form.
2. **The Events calendar** Manage and display events and event calendars

### Adding New Plugins
1. Navigate to `Plugins > Add New`.
2. Search for the desired plugin using the search bar.
3. Click `Install Now` next to the plugin you wish to add.
4. After installation, click `Activate` to enable the plugin.

### Plugin Management
 **WPForms**

1. Navigate to: WPForms > Add New.
2. Choose a Template: Select from pre-built templates or start with a blank form.
3. Build the Form: Drag and drop fields to customize your form.
4. Settings: Configure general settings, notifications, and confirmations.
5. Save & Embed: Click "Save". To add the form to a page or post, copy the shortcode provided and paste it into the desired location.

   
 **Smart Slider:**
**Steps to Use Smart Slider Plugin**
**Installation:**
**WordPress:**
1. Log in to your WordPress dashboard
2. Navigate to Plugins > Add New
3. In the search bar, type "Smart Slider"
4. Click Install Now on the Smart Slider plugin and then Activate
    
**Creating a New Slider:**
1. Go to the Smart Slider dashboard in your admin panel.
2. Click on New Project or New Slider.
3. Choose a template or start from scratch.
4. Use the drag-and-drop interface to add layers (text, images, buttons, etc.) to your slides.
5. Customize the appearance and animations of each layer as needed.
    
**Configuring Slider Settings:**
1. Configure settings such as slider size, autoplay options, navigation controls, and more.
2. Ensure the slider is responsive by adjusting settings for different screen sizes.
    
**Publishing the Slider:**
Save your slider and copy the provided shortcode or module code.

**WordPress:**
Paste the shortcode into the page, post, or widget where you want the slider to appear.

**Managing Sliders:**

Return to the Smart Slider dashboard to edit existing sliders or create new ones.
Use the plugin's options to duplicate, delete, or rearrange sliders as needed.

**Optimizing Performance:**

Ensure your sliders are optimized for speed by using properly sized images and minimal animations.
Check the plugin settings for performance optimization options.

## Theme Customization

1. Navigate to `Appearance > Customize` to open the WordPress Customizer.
2. **Site Identity:** Update the site title, tagline, and logo.
3. **Colors:** Adjust the color scheme to match the university’s branding guidelines.
4. **Header and Footer:** Customize the header and footer layouts.
5. **Menus:** Manage menu locations and add/remove menu items.
6. **Widgets:** Add and configure widgets in widgetized areas.
7. **Homepage Settings:** Choose whether to display the latest posts or a static page on the homepage.
8. **Additional CSS:** Add custom CSS to further style the site.

## Managing Menus

1. Navigate to `Appearance > Menus`.
2. Select an existing menu to edit or create a new menu.
3. Add items to the menu by selecting pages, posts, custom links, or categories.
4. Arrange the menu items by dragging and dropping them into the desired order.
5. Assign the menu to a specific location (e.g., primary, footer).
6. Save the menu to apply the changes.

## Widgets

1. Navigate to `Appearance > Widgets`.
2. Choose a widget area (e.g., sidebar, footer) to add widgets to.
3. Drag and drop widgets from the available widgets section to the desired widget area.
4. Configure widget settings as needed.
5. Save the changes to update the widget area.

## Backup and Updates

### Regular Backups
- Use the UpdraftPlus plugin to schedule regular backups of the site.
- Store backups in a remote location (e.g., Google Drive, Dropbox) for safety.

### Updates
1. Navigate to `Dashboard > Updates`.
2. Update WordPress core, themes, and plugins regularly to ensure security and performance.
3. Review update details and backup the site before performing major updates.

## User Management

1. Navigate to `Users > All Users` to view all registered users.
2. Add new users by clicking `Add New` and filling out the user details.
3. Assign appropriate roles (e.g., Administrator, Editor, Author) based on the user’s responsibilities.
4. Edit user profiles to update information or change roles.
5. Delete users who no longer need access to the site.

## Security

1. **Strong Passwords:** Ensure all users have strong, unique passwords.
2. **Two-Factor Authentication:** Enable two-factor authentication for an added layer of security.
3. **Regular Scans:** Use security plugins like Wordfence to scan the site for vulnerabilities.
4. **Limit Login Attempts:** Configure the site to limit login attempts to prevent brute force attacks.
5. **SSL Certificate:** Ensure the site uses an SSL certificate to encrypt data transmission.


