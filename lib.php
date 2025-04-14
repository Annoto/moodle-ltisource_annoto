<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local plugin "Annoto" - Library
 * @package    ltisource_annoto
 * @copyright  Annoto Ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
use core_course_category;

/**
 * Calling before launch LTI connection.
 *
 * @param stdClass $instance LTI instance.
 * @param string $endpoint Endpoint.
 * @param array $requestparams Request parameters.
 *
 * @return array
 */
function ltisource_annoto_before_launch($instance, $endpoint, $requestparams) {
    global $COURSE;

    $course = clone $COURSE;
    $category = core_course_category::get($course->category);

    $name = $category->name;

    $params = [];
    $params['custom_nn_sub_course_category_name'] = $name;
    return $params;
}
