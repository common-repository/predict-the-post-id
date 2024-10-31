=== Plugin Name ===
Contributors: Peter Knight
Donate link: http://www.thewebsiteaudit.com
Tags: postid,predict
Requires at least: 2.8
Tested up to: 2.9.1
Stable tag: 1.1

Provides a function to predict the post ID that will be used for the newest post, which in turn can be used for other functions.

== Description ==


The predict the post ID plugin does just that, it predicts the post ID wordpress will use for the next entry you submit. This gives you an easy way to access the post ID for a post that has not yet been published, i.e. is still being written (P2 theme anyone?).


== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<? php echo predict_postid(); ?>` to print the postid where you need it.

== Frequently Asked Questions ==

= What can this plugin be used for? =

While being a little exotic, there are some scenarios where this is useful. I created the plugin for dealing with two separate custom functions. To give you one scenario:

Example: you are writing a post and want to automatically append the post ID to an image you are uploading along side it. I am personally using this functionality in conjunction with an S3 uploading plugin which stores images into Amazon’s online storage. It’s useful to be able to associate random images to the actual posts that they were used for in order to maintain some form of organization.

= Where can I get support? =

For support: 
http://www.thewebsiteaudit.com/wordpress-plugin-predict-the-post-id/


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 1.1 =
* Revised the code to a simpler more elegant form 01/27/2010 22:45
= 1.0 =
* First Version of the plugin 12/15/2009 01:23

== Future Improvements ==

Future improvements:
I may include functionality to display the Nth number of published entries made for a given content type.

Example: This is the 312th post I’ve written and the 35rd post I’ve written about Wordpress Plugins.
