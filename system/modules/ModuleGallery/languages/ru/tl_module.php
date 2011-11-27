<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Sergey Dyagovchenko, 2011
 * @author     Sergey Dyagovchenko, http://d.sumy.ua/
 * @package    Language
 * @license    LGPL
 * @filesource
 */

$lang =& $GLOBALS['TL_LANG']['tl_module'];

/**
 * Fields
 */
$lang['useHomeDir'] = array('Использовать домашнюю директорию', 'Если пользователь сайта вошел в систему, использовать его домашнюю директорию как источник файлов.');
$lang['perRow'] = array('Миниатюр в ряду', 'Введите число миниатюр, выводимых в одном ряду.');
$lang['perPage'] = array('Статей на странице', 'Пожалуйста, введите количество статей на странице (0 = отключение нумерации страниц).');
$lang['sortBy'] = array('Сортировать по', 'Пожалуйста, выберите порядок сортировки.');
$lang['galleryTpl'] = array('Галерея шаблонов', 'Здесь вы можете выбрать в галерею шаблонов.');

/**
 * Legends
 */
$lang['image_legend'] = 'Настройки изображения';
$lang['template_legend'] = 'Настройки шаблонов';

unset($lang);

?>