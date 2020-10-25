<?php

// $Id: xoops_version.php,v 1.1 2006/03/27 17:59:38 mikhail Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <https://www.xoops.org>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$modversion['name'] = _MI_MYPINUP_NAME;
$modversion['version'] = 2.1;
$modversion['description'] = _MI_MYPINUP_DESC;
$modversion['author'] = 'Solo<br>( http://www.wolfpackclan.com )';
$modversion['credits'] = 'The new Wolf Pack Clan';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/myPinup_slogo.png';
$modversion['dirname'] = 'mypinup';

// Blocks
$modversion['blocks'][1]['file'] = 'myPinup.php';
$modversion['blocks'][1]['name'] = _MB_MYPINUP_01;
$modversion['blocks'][1]['description'] = 'Shows a new Pinup everyday in a bloc';
$modversion['blocks'][1]['show_func'] = 'a_mypinup_show';
$modversion['blocks'][1]['edit_func'] = 'a_mypinup_edit';
$modversion['blocks'][1]['options'] = '001|366|random|||';
$modversion['blocks'][1]['template'] = 'mypinup_block.html';

$modversion['blocks'][2]['file'] = 'myPinup.php';
$modversion['blocks'][2]['name'] = _MB_MYPINUP_02;
$modversion['blocks'][2]['description'] = 'Shows a new Pinup everyday of the week in a bloc';
$modversion['blocks'][2]['show_func'] = 'b_mypinup_show';
$modversion['blocks'][2]['edit_func'] = 'b_mypinup_edit';
$modversion['blocks'][2]['options'] = '001|366|day|||';
$modversion['blocks'][2]['template'] = 'mypinup_block.html';

$modversion['blocks'][3]['file'] = 'myPinup.php';
$modversion['blocks'][3]['name'] = _MB_MYPINUP_03;
$modversion['blocks'][3]['description'] = 'Shows a new Pinup everyweek in a bloc';
$modversion['blocks'][3]['show_func'] = 'c_mypinup_show';
$modversion['blocks'][3]['edit_func'] = 'c_mypinup_edit';
$modversion['blocks'][3]['options'] = '001|052|week||/register.php|';
$modversion['blocks'][3]['template'] = 'mypinup_block.html';

$modversion['blocks'][4]['file'] = 'myPinup.php';
$modversion['blocks'][4]['name'] = _MB_MYPINUP_04;
$modversion['blocks'][4]['description'] = 'Shows a new Pinup everyweek in a bloc';
$modversion['blocks'][4]['show_func'] = 'd_mypinup_show';
$modversion['blocks'][4]['edit_func'] = 'd_mypinup_edit';
$modversion['blocks'][4]['options'] = '001|007|weekdays||/register.php|';
$modversion['blocks'][4]['template'] = 'mypinup_block.html';

// Menu
$modversion['hasMain'] = 0;

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
