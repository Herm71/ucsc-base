<?php
/**
 * Footer HTML markup structure
 *
 * @package Blackbird\Developers\Structure
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Genesis\Structure;

 /**
 * Customize Site Footer
 */
add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\custom_footer_creds_text');
function custom_footer_creds_text($creds) {
 $creds = '[ucsc-social]'."<br><br>".'UC Santa Cruz, 1156 High Street, Santa Cruz, CA  95064'."<br><br>".'[footer_copyright first="2017"]'.' Regents of the University of California. All Rights Reserved.'  ;
 return  $creds;
}