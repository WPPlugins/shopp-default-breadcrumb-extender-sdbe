=== Shopp Default Breadcrumb Extender ===
Contributors: Shoppdeveloper.com
Donate link: http://www.shoppdeveloper.com/
Tags: shopp,navigate,breadcrumb,products,browse,ecommerce,webshop
Requires at least: 2.0.2
Tested up to: 4.6.1
Stable tag: 1.1

Add hierachical breadcrumb to your Shopp webshop product pages.  

== Description ==

By default the Shopp breadcrumb will display "the path you followed to get here". And frankly, that is
what breadcrumbs are meant to do. However this means when someone enters one of your product pages using
a direct link, the breadcrumb will be empty. It will just show the link back to the main Shopp page. 
With this plugin installed you can use breadcrumbs that show "where you are" in the hierarchical 
structure of categories. 

== Installation ==

Download and install the plugin through your WordPress Admin Panel, or

1. Download the plugin zip-file.
2. Unzip the zip-file.
3. Upload the folder to the `/wp-content/plugins/` directory
4. The plugin is NOT going to change or edit your Shopp files, but just to be sure, back up your files and database.
5. Activate the plugin through the 'Plugins' menu in WordPress
6. Place `<?php shopp( 'catalog','breadcrumb' ); ?>` in your Shopp template file(s), if it is not present already.
7. Supply <a href='http://www.shoppdeveloper.com/shopp-default-breadcrumb-extender-plugin/'>Feedback</a>. We'd love to hear from you!

== Frequently Asked Questions ==

= Will the plugin work without Shopp installed? =

No. Without Shopp installed, the plugin will be useless.

= Will the plugin change or edit my Shopp pages or products? =

No. You will have to add the tag mentioned in the installation instructions but that is it. 
The plugin will not store, save or edit any data anywhere.

= Can I change the separator sign? =

Sure. You can still use the options of the default Shopp breadcrumb-tag.

= Is there a translation available? =

There is no text in this plugin.

= What version of Shopp do I need? =

Use version 1.0 of our plugin when you are using a Shopp version prior to Shopp 1.3
Use version 1.1 and up of our plugin for Shopp version 1.3+ 

= Where is the uninstall file? =

There is nothing to delete beside the files/folder in 'wp-content/plugins'.



== Changelog ==
= 1.1 =
WordPress version update
Adjusted code to match Shopp 1.3.x code

= 1.0 =

Added to WordPRess SVN

= 0.1 =

First version. Ready to be tested.

== Upgrade Notice ==

= 1.0 =

Added to WordPress SVN