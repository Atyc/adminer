<?php

/**
 * Enables auto-detection and inclusion of adminer.js, like adminer.css
 *
 * @author Roy Orbitson, https://github.com/Roy-Orbison
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerDotJs {
	const FILENAME = "adminer.js";

	function head($dark = null) {
		if (file_exists(self::FILENAME)) {
			echo Adminer\script_src(self::FILENAME . "?v=" . crc32(file_get_contents(self::FILENAME))), "\n";
		}
	}
}
