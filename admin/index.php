<?php

// $Id: index.php,v 1.1 2006/03/27 17:59:25 mikhail Exp $
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

include '../../../include/cp_header.php';

xoops_cp_header();
OpenTable();

echo "<a href='http://www.wolfpackclan.com' target='_blank'>
			<img src=../images/admin_icon.gif align=\"right\"></a></br>
			<center><h1>" . _CREDIT_MYPINUP_TITLE . "</h1></center>
			[<font color ='#CC0000'><i>" . _CREDIT_MYPINUP_MODEL . '</i></font>]</p>';

echo ' <b>' . _FAQ_MYPINUP_Q01 . '</b></br> ';
echo ' ' . _FAQ_MYPINUP_A01 . '</p> ';
echo ' <HR>';
echo ' <b>' . _FAQ_MYPINUP_Q02 . '</b></br> ';
echo ' ' . _FAQ_MYPINUP_A02 . '</p> ';
echo ' <HR>';
echo ' <b>' . _FAQ_MYPINUP_Q03 . '</b></br> ';
echo ' ' . _FAQ_MYPINUP_A03 . '</p> ';
echo ' <HR>';
echo ' <b>' . _FAQ_MYPINUP_Q04 . '</b></br> ';
echo ' ' . _FAQ_MYPINUP_A04 . '</p> ';
echo ' <HR>';
echo ' <b>' . _FAQ_MYPINUP_Q05 . '</b></br> ';
echo ' ' . _FAQ_MYPINUP_A05 . '</p> ';
echo ' <HR>';
echo ' <b>' . _FAQ_MYPINUP_Q06 . '</b></br> ';
echo ' ' . _FAQ_MYPINUP_A06 . '</p> ';
echo ' </p>';
echo ' <p align=right><i>' . _CREDIT_MYPINUP_CREDIT . " Solo [<a href='http://www.wolfpackclan.com' target='_blank'>www.wolfpackclan.com</a>]</i></p> ";

CloseTable();
xoops_cp_footer();
