<?php
/**
 * Debian overrides for the MediaWiki installer.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

$overrides['LocalSettingsGenerator'] = 'DebianLocalSettingsGenerator';
$overrides['WebInstaller'] = 'DebianWebInstaller';

class DebianLocalSettingsGenerator extends LocalSettingsGenerator {
	function getText() {
		$ls = parent::getText();
		// Installer sets $wgResourceBasePath = $wgScriptPath
		$resourceBasePath = $this->values['wgScriptPath'];
		$ls .= <<<CONF
# Debian specific generated settings
# Use system mimetypes
\$wgMimeTypeFile = '/etc/mime.types';
# Load legacy extensions
if ( is_file( "/etc/mediawiki-extensions/extensions.php" ) ) {
	include "/etc/mediawiki-extensions/extensions.php";
}
# Add a "powered by Debian" footer icon
\$wgFooterIcons['poweredby']['debian'] = [
	"src" => "$resourceBasePath/resources/assets/debian/poweredby_debian_1x.png",
	"url" => "https://www.debian.org/",
	"alt" => "Powered by Debian",
	"srcset" =>
		"$resourceBasePath/resources/assets/debian/poweredby_debian_1_5x.png 1.5x, " .
		"$resourceBasePath/resources/assets/debian/poweredby_debian_2x.png 2x",
];
# End Debian specific generated settings
# Add more configuration options below.\n\n
CONF;
		return $ls;
	}
}


class DebianWebInstaller extends WebInstaller {
	public function getLocalSettingsLocation() {
		return '/etc/mediawiki/LocalSettings.php';
	}
}
