<?php
/*
Plugin Name: Predict The Post ID
Plugin URI: http://www.thewebsiteaudit.com/predict-the-post-id
Description: Provides a function that displays the next-to-be used postid
Version: 1.1
Author: Peter Knight
Author URI: http://www.thewebsiteaudit.com

/*  Copyright 2009-2010  Peter Knight  (email : peter@11strategies.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function predict_postid() {
	global $wpdb;
	$last_postid = $wpdb->get_var("SELECT max(ID) as ID FROM $wpdb->posts");
	$next_postid = $last_postid + 1;
	echo $next_postid;
}
	?>