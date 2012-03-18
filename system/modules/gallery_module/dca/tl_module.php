<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @copyright  Sergey Dyagovchenko 2011-2012
 * @author     Sergey Dyagovchenko <http://d.sumy.ua/>
 * @package    GalleryModule
 * @license    LGPL
 * @filesource
 */

/**
 * Table tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['gallery'] = '{title_legend},name,headline,type;{source_legend},multiSRC,useHomeDir;{image_legend},imgSize,perRow,perPage,sortBy,fullsize;{template_legend:hide},galleryTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$lang =& $GLOBALS['TL_LANG']['tl_module'];

array_insert($GLOBALS['TL_DCA']['tl_module']['fields'], count($GLOBALS['TL_DCA']['tl_module']['fields']), array(
		'useHomeDir' => array
		(
			'label'                   => &$lang['useHomeDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox'
		),
		'perRow' => array
		(
			'label'                   => &$lang['perRow'],
			'default'                 => 4,
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
			'eval'                    => array('tl_class'=>'w50')
		),
		'sortBy' => array
		(
			'label'                   => &$lang['sortBy'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('name_asc', 'name_desc', 'date_asc', 'date_desc', 'meta', 'random'),
			'reference'               => $lang,
			'eval'                    => array('tl_class'=>'w50')
		),
		'galleryTpl' => array
		(
			'label'                   => &$lang['galleryTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module_gallery', 'getGalleryTemplates')
		)
));

unset($lang);


/**
 * Class tl_module_gallery
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Sergey Dyagovchenko 2011-2012
 * @author     Sergey Dyagovchenko <http://d.sumy.ua/>
 * @package    GalleryModule
 */
class tl_module_gallery extends Backend
{

	/**
	 * Return all gallery templates as array
	 * @param object
	 * @return array
	 */
	public function getGalleryTemplates(DataContainer $dc)
	{
		// Return all gallery templates
		return $this->getTemplateGroup('gallery_', $dc->activeRecord->pid);
	}

}

?>
