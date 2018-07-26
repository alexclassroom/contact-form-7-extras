# Contact Form 7 Controls

[![Build Status](https://travis-ci.org/kasparsd/contact-form-7-extras.svg?branch=master)](https://travis-ci.org/kasparsd/contact-form-7-extras)

Source of the [Contact Form 7 Controls plugin](https://wordpress.org/plugins/contact-form-7-extras/) for WordPress.

Install the plugin by searching for "Contact Form 7 Controls" under "Plugins → Add New" in your WordPress dashboard.


## Start Contributing

We use [Composer](https://getcomposer.org) for managing PHP related dependencies and linting tools while [Node.js](https://nodejs.org) is used for the triggering the `pre-commit` hook, building the plugin release and deploying to WP.org

1. Clone the plugin repository:

	   git clone https://github.com/kasparsd/contact-form-7-extras.git
	   cd widget-context-wporg

2. Setup the development environment and tools:

	   composer install

3. Prepare a release in the `dist` directory:

	   composer build


## Screenshot

![Contact Form 7 Controls](screenshot-1.png)
