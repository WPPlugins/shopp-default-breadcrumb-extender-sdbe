<?php
/*
Plugin Name: Shopp Default Breadcrumb Extender (sdbe)
Plugin URI: http://wordpress.org/extend/plugins/shopp-default-breadcrumb-extender-sdbe/
Donate link: http://www.shoppdeveloper.com
Description: This plugin adds hierarchical breadcrumbs to your Shopp pages.
Version: 1.1
Author: Shoppdeveloper.com
Author URI: http://www.shoppdeveloper.com
License: GPLv2


    Copyright 2011 Shoppdeveloper.com  (email : support@shoppdeveloper.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


require_once( 'sdbe-functions.php' );


add_filter( 'shopp_tag_catalog_breadcrumb', 'sdbe', 10, 3 );


 
?>