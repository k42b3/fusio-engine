<?php
/*
 * Fusio
 * A web-application to create dynamically RESTful APIs
 *
 * Copyright (C) 2015-2020 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fusio\Engine\Form;

/**
 * ElementFactory
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    https://www.fusio-project.org
 */
interface ElementFactoryInterface
{
    /**
     * Creates a select which contains all available actions
     *
     * @param string $name
     * @param string $title
     * @param string $help
     * @param array $allowedClasses
     * @return \PSX\Record\RecordInterface
     */
    public function newAction($name, $title, $help = null, array $allowedClasses = null);

    /**
     * Creates a select which contains all available connections
     *
     * @param string $name
     * @param string $title
     * @param string $help
     * @param array $allowedClasses
     * @return \PSX\Record\RecordInterface
     */
    public function newConnection($name, $title, $help = null, array $allowedClasses = null);

    /**
     * Creates a new input field. The type must be a valid html input type
     *
     * @see http://www.w3.org/TR/html5/forms.html#attr-input-type
     * @param string $name
     * @param string $title
     * @param string $type
     * @param string $help
     * @return \PSX\Record\RecordInterface
     */
    public function newInput($name, $title, $type = 'text', $help = null);

    /**
     * Creates a new select
     *
     * @param string $name
     * @param string $title
     * @param array $options
     * @param string $help
     * @return \PSX\Record\RecordInterface
     */
    public function newSelect($name, $title, array $options = array(), $help = null);

    /**
     * Creates a new textarea. The mode indicates the syntax highlighting
     *
     * @param string $name
     * @param string $title
     * @param string $mode
     * @param string $help
     * @return \PSX\Record\RecordInterface
     */
    public function newTextArea($name, $title, $mode, $help = null);

    /**
     * Creates a new tag input
     *
     * @param string $name
     * @param string $title
     * @param string $help
     * @return \PSX\Record\RecordInterface
     */
    public function newTag($name, $title, $help = null);
}
