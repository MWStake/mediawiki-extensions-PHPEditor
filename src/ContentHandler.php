<?php
/*
 * Copyright (C) 2016  Mark A. Hershberger
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @file
 * @ingroup Extensions
 */

namespace PHPEditor;

/**
 * Content handler for PHP code
 *
 * @author Mark A. Hershberger <mah@nichework.com>
 *
 */
class ContentHandler extends \CodeContentHandler {

	public function __construct() {
		parent::__construct( CONTENT_MODEL_PHP, [ CONTENT_FORMAT_PHP ]  );
	}

	/**
	 * @return string
	 */
	protected function getContentClass() {
		return Content::class;
	}
}
