# Simple PHP Website

Simple Tech PHP Website

This project is a basic PHP website structure with separate content pages, reusable templates, and CSS styling. It is designed to help you understand the fundamental structure of a dynamic website using PHP.

Folder Structure

	•	content/
	•	404.phtml: Custom 404 error page.
	•	about-us.phtml: About Us page content.
	•	contact.phtml: Contact Us page content.
	•	home.phtml: Homepage content.
	•	learn-more.phtml: Additional information page content.
	•	includes/
	•	config.php: Configuration file for database or other settings.
	•	functions.php: A set of PHP functions to be reused across the site.
	•	template/
	•	template.php: Base template file to provide a consistent layout across the website.
	•	style.css: The main stylesheet for styling the website.
	•	index.php: The entry point of the website, typically routing requests to the appropriate content pages.
	•	readme.md: This documentation file.

Features

	•	Modular PHP Structure: Content pages are separated and included dynamically.
	•	Reusable Template: The template.php ensures a uniform structure and style across all pages.
	•	Error Handling: Custom 404 page to handle invalid routes.
	•	Styling: style.css provides basic styling to the website.

Setup Instructions

	1.	Clone this repository to your local machine.
	2.	Ensure you have PHP installed on your server or local development environment.
   
   ## Installation

    There are only two steps to run this website:

    1. Download the project to the desired directory on your computer
    2. Run  `php -S localhost:8080` on your terminal. Navigate to http://localhost:8080 to see the site.

    By defaut, the page URLs use query strings (*?page=about*). You need to have Apache installed for pretly URLs (*/about*) to work. To activate pretty urls, update config value of `pretty_uri` to `true`.

	3.	Modify the config.php file under includes/ to fit your server settings.
	4.	Use index.php as the starting point. It will dynamically load content from the content/ directory based on the user’s navigation.
	5.	To customize the look and feel, edit the style.css file.

   ## Concepts
    The project covers these programming concepts:
        * Variables
        * Arrays
        * Functions
        * Pretty links *(/about) with fallback to query string (?page=about)*
        * Basic example of separation of concerns *(functionality, template, content)*

How to Use

	•	Add new content pages inside the content/ folder.
	•	Link them through index.php by modifying the routing or navigation.
	•	Reuse functions in functions.php for repetitive tasks, and adjust configuration in config.php as needed.

License

This project is open-source and available under the MIT License.


Inspired by [@banago](https://twitter.com/banago)
