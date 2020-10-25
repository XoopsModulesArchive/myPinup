<?php

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

// >>> Pin Up 01 <<< //

function a_mypinup_show($options)
{
    global $xoopsConfig, $xoopsDB, $xoopsUser;

    $block = [];

    $block['title'] = '_MI_MYPINUP_01';

    setlocale(LC_TIME, $xoopsConfig['language']);

    if ('random' == $options[2]) {
        $rand = random_int($options[0], $options[1]);

        $format = 'pi%03d';

        $image = sprintf($format, $rand);

        $text = _MI_MYPINUP_RAND;

        $url = XOOPS_URL . '/modules/myPinup/images/day/';
    } else {
        if ('day' == $options[2]) {
            $date = strftime('%A %d %B %y');

            $jour_num = date('z');

            $format = 'pi%03d';

            $image = sprintf($format, $jour_num);

            $text = '';

            $url = XOOPS_URL . '/modules/myPinup/images/day/';
        } else {
            if ('week' == $options[2]) {
                $date = strftime('%W');

                $jour_num = date('W');

                $format = 'pi%03d';

                $image = sprintf($format, $jour_num);

                $text = _MI_MYPINUP_WEEK;

                $url = XOOPS_URL . '/modules/myPinup/images/week/';
            } else {
                if ('weekdays' == $options[2]) {
                    $date = strftime('%A');

                    $jour_num = date('w');

                    $format = 'pi%03d';

                    $image = sprintf($format, $jour_num);

                    $text = '';

                    $url = XOOPS_URL . '/modules/myPinup/images/weekday/';
                }
            }
        }
    }

    if ('' != $options[3]) {
        $url = $options[3];
    }

    $lien_gif = $url . $image . '.gif';

    $lien_jpg = $url . $image . '.jpg';

    $lien_png = $url . $image . '.png';

    $lien_no = XOOPS_URL . '/modules/myPinup/images/no_image.gif';

    $image_info = getimagesize((string)$lien_gif);

    $width = $image_info[0];

    $height = $image_info[1];

    $type = $image_info[2];

    if (0 != $type) {
        $lien_image = $lien_gif;
    } else {
        $image_info = getimagesize((string)$lien_jpg);

        $width = $image_info[0];

        $height = $image_info[1];

        $type = $image_info[2];

        if (0 != $type) {
            $lien_image = $lien_jpg;
        } else {
            $image_info = getimagesize((string)$lien_png);

            $width = $image_info[0];

            $height = $image_info[1];

            $type = $image_info[2];

            if (0 != $type) {
                $lien_image = $lien_png;
            } else {
                $lien_image = $lien_no;
            }
        }
    }

    $width += 20;

    $height += 25;

    if ('/register.php' == $options[4]) {
        $link = XOOPS_URL . $options[4];
    } else {
        if ('' == $options[4]) {
            $link = 'self';
        } else {
            $link = $options[4];
        }
    }

    $block['content'] = (string)$lien_image;

    $block['texte'] = (string)$text;

    $block['date'] = (string)$date;

    $block['width'] = (string)$width;

    $block['height'] = (string)$height;

    $block['link'] = (string)$link;

    return $block;
}

function a_mypinup_edit($options)
{
    $form = _MB_MYPINUP_RANDFILES
            . '&nbsp;'
            . _MB_MYPINUP_FROM
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[0]
            . '">&nbsp;'
            . _MB_MYPINUP_TO
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[1]
            . '">&nbsp;'
            . _MB_MYPINUP_FILES
            . '<br><br>';

    $form .= _MB_MYPINUP_ORDER . '&nbsp;<select name="options[]">';

    $form .= '<option value="random"';

    if ('random' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_RANDOM . '</option>';

    $form .= '<option value="day"';

    if ('day' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_DATE . '</option>';

    $form .= '<option value="week"';

    if ('week' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEK . '</option>';

    $form .= '<option value="weekdays"';

    if ('weekdays' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEKDAYS . '</option>';

    $form .= '</select><br><br>';

    $form .= _MB_MYPINUP_FILEDIRECTORY . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[3] . '"><br><br>';

    $form .= _MB_MYPINUP_LINK . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[4] . '">';

    return $form;
}

// >>> Pin Up 02 <<< //

function b_mypinup_show($options)
{
    global $xoopsConfig, $xoopsDB, $xoopsUser;

    $block = [];

    $block['title'] = '_MI_MYPINUP_02';

    setlocale(LC_TIME, $xoopsConfig['language']);

    if ('random' == $options[2]) {
        $rand = random_int($options[0], $options[1]);

        $format = 'pi%03d';

        $image = sprintf($format, $rand);

        $text = _MI_MYPINUP_RAND;

        $url = XOOPS_URL . '/modules/myPinup/images/day/';
    } else {
        if ('day' == $options[2]) {
            $date = strftime('%A %d %B %y');

            $jour_num = date('z');

            $format = 'pi%03d';

            $image = sprintf($format, $jour_num);

            $text = '';

            $url = XOOPS_URL . '/modules/myPinup/images/day/';
        } else {
            if ('week' == $options[2]) {
                $date = strftime('%W');

                $jour_num = date('W');

                $format = 'pi%03d';

                $image = sprintf($format, $jour_num);

                $text = _MI_MYPINUP_WEEK;

                $url = XOOPS_URL . '/modules/myPinup/images/week/';
            } else {
                if ('weekdays' == $options[2]) {
                    $date = strftime('%A');

                    $jour_num = date('w');

                    $format = 'pi%03d';

                    $image = sprintf($format, $jour_num);

                    $text = '';

                    $url = XOOPS_URL . '/modules/myPinup/images/weekday/';
                }
            }
        }
    }

    if ('' != $options[3]) {
        $url = $options[3];
    }

    $lien_gif = $url . $image . '.gif';

    $lien_jpg = $url . $image . '.jpg';

    $lien_png = $url . $image . '.png';

    $lien_no = XOOPS_URL . '/modules/myPinup/images/no_image.gif';

    $image_info = getimagesize((string)$lien_gif);

    $width = $image_info[0];

    $height = $image_info[1];

    $type = $image_info[2];

    if (0 != $type) {
        $lien_image = $lien_gif;
    } else {
        $image_info = getimagesize((string)$lien_jpg);

        $width = $image_info[0];

        $height = $image_info[1];

        $type = $image_info[2];

        if (0 != $type) {
            $lien_image = $lien_jpg;
        } else {
            $image_info = getimagesize((string)$lien_png);

            $width = $image_info[0];

            $height = $image_info[1];

            $type = $image_info[2];

            if (0 != $type) {
                $lien_image = $lien_png;
            } else {
                $lien_image = $lien_no;
            }
        }
    }

    $width += 20;

    $height += 25;

    if ('/register.php' == $options[4]) {
        $link = XOOPS_URL . $options[4];
    } else {
        if ('' == $options[4]) {
            $link = 'self';
        } else {
            $link = $options[4];
        }
    }

    $block['content'] = (string)$lien_image;

    $block['texte'] = (string)$text;

    $block['date'] = (string)$date;

    $block['width'] = (string)$width;

    $block['height'] = (string)$height;

    $block['link'] = (string)$link;

    return $block;
}

function b_mypinup_edit($options)
{
    $form = _MB_MYPINUP_RANDFILES
            . '&nbsp;'
            . _MB_MYPINUP_FROM
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[0]
            . '">&nbsp;'
            . _MB_MYPINUP_TO
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[1]
            . '">&nbsp;'
            . _MB_MYPINUP_FILES
            . '<br><br>';

    $form .= _MB_MYPINUP_ORDER . '&nbsp;<select name="options[]">';

    $form .= '<option value="random"';

    if ('random' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_RANDOM . '</option>';

    $form .= '<option value="day"';

    if ('day' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_DATE . '</option>';

    $form .= '<option value="week"';

    if ('week' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEK . '</option>';

    $form .= '<option value="weekdays"';

    if ('weekdays' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEKDAYS . '</option>';

    $form .= '</select><br><br>';

    $form .= _MB_MYPINUP_FILEDIRECTORY . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[3] . '"><br><br>';

    $form .= _MB_MYPINUP_LINK . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[4] . '">';

    return $form;
}

// >>> Pin Up 03 <<< //

function c_mypinup_show($options)
{
    global $xoopsConfig, $xoopsDB, $xoopsUser;

    $block = [];

    $block['title'] = '_MI_MYPINUP_03';

    setlocale(LC_TIME, $xoopsConfig['language']);

    if ('random' == $options[2]) {
        $rand = random_int($options[0], $options[1]);

        $format = 'pi%03d';

        $image = sprintf($format, $rand);

        $text = _MI_MYPINUP_RAND;

        $url = XOOPS_URL . '/modules/myPinup/images/day/';
    } else {
        if ('day' == $options[2]) {
            $date = strftime('%A %d %B %y');

            $jour_num = date('z');

            $format = 'pi%03d';

            $image = sprintf($format, $jour_num);

            $text = '';

            $url = XOOPS_URL . '/modules/myPinup/images/day/';
        } else {
            if ('week' == $options[2]) {
                $date = strftime('%W');

                $jour_num = date('W');

                $format = 'pi%03d';

                $image = sprintf($format, $jour_num);

                $text = _MI_MYPINUP_WEEK;

                $url = XOOPS_URL . '/modules/myPinup/images/week/';
            } else {
                if ('weekdays' == $options[2]) {
                    $date = strftime('%A');

                    $jour_num = date('w');

                    $format = 'pi%03d';

                    $image = sprintf($format, $jour_num);

                    $text = '';

                    $url = XOOPS_URL . '/modules/myPinup/images/weekday/';
                }
            }
        }
    }

    if ('' != $options[3]) {
        $url = $options[3];
    }

    $lien_gif = $url . $image . '.gif';

    $lien_jpg = $url . $image . '.jpg';

    $lien_png = $url . $image . '.png';

    $lien_no = XOOPS_URL . '/modules/myPinup/images/no_image.gif';

    $image_info = getimagesize((string)$lien_gif);

    $width = $image_info[0];

    $height = $image_info[1];

    $type = $image_info[2];

    if (0 != $type) {
        $lien_image = $lien_gif;
    } else {
        $image_info = getimagesize((string)$lien_jpg);

        $width = $image_info[0];

        $height = $image_info[1];

        $type = $image_info[2];

        if (0 != $type) {
            $lien_image = $lien_jpg;
        } else {
            $image_info = getimagesize((string)$lien_png);

            $width = $image_info[0];

            $height = $image_info[1];

            $type = $image_info[2];

            if (0 != $type) {
                $lien_image = $lien_png;
            } else {
                $lien_image = $lien_no;
            }
        }
    }

    $width += 20;

    $height += 25;

    if ('/register.php' == $options[4]) {
        $link = XOOPS_URL . $options[4];
    } else {
        if ('' == $options[4]) {
            $link = 'self';
        } else {
            $link = $options[4];
        }
    }

    $block['content'] = (string)$lien_image;

    $block['texte'] = (string)$text;

    $block['date'] = (string)$date;

    $block['width'] = (string)$width;

    $block['height'] = (string)$height;

    $block['link'] = (string)$link;

    return $block;
}

function c_mypinup_edit($options)
{
    $form = _MB_MYPINUP_RANDFILES
            . '&nbsp;'
            . _MB_MYPINUP_FROM
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[0]
            . '">&nbsp;'
            . _MB_MYPINUP_TO
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[1]
            . '">&nbsp;'
            . _MB_MYPINUP_FILES
            . '<br><br>';

    $form .= _MB_MYPINUP_ORDER . '&nbsp;<select name="options[]">';

    $form .= '<option value="random"';

    if ('random' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_RANDOM . '</option>';

    $form .= '<option value="day"';

    if ('day' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_DATE . '</option>';

    $form .= '<option value="week"';

    if ('week' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEK . '</option>';

    $form .= '<option value="weekdays"';

    if ('weekdays' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEKDAYS . '</option>';

    $form .= '</select><br><br>';

    $form .= _MB_MYPINUP_FILEDIRECTORY . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[3] . '"><br><br>';

    $form .= _MB_MYPINUP_LINK . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[4] . '">';

    return $form;
}

// >>> Pin Up 04 <<< //

function d_mypinup_show($options)
{
    global $xoopsConfig, $xoopsDB, $xoopsUser;

    $block = [];

    $block['title'] = '_MI_MYPINUP_04';

    setlocale(LC_TIME, $xoopsConfig['language']);

    if ('random' == $options[2]) {
        $rand = random_int($options[0], $options[1]);

        $format = 'pi%03d';

        $image = sprintf($format, $rand);

        $text = _MI_MYPINUP_RAND;

        $url = XOOPS_URL . '/modules/myPinup/images/day/';
    } else {
        if ('day' == $options[2]) {
            $date = strftime('%A %d %B %y');

            $jour_num = date('z');

            $format = 'pi%03d';

            $image = sprintf($format, $jour_num);

            $text = '';

            $url = XOOPS_URL . '/modules/myPinup/images/day/';
        } else {
            if ('week' == $options[2]) {
                $date = strftime('%W');

                $jour_num = date('W');

                $format = 'pi%03d';

                $image = sprintf($format, $jour_num);

                $text = _MI_MYPINUP_WEEK;

                $url = XOOPS_URL . '/modules/myPinup/images/week/';
            } else {
                if ('weekdays' == $options[2]) {
                    $date = strftime('%A');

                    $jour_num = date('w');

                    $format = 'pi%03d';

                    $image = sprintf($format, $jour_num);

                    $text = '';

                    $url = XOOPS_URL . '/modules/myPinup/images/weekday/';
                }
            }
        }
    }

    if ('' != $options[3]) {
        $url = $options[3];
    }

    $lien_gif = $url . $image . '.gif';

    $lien_jpg = $url . $image . '.jpg';

    $lien_png = $url . $image . '.png';

    $lien_no = XOOPS_URL . '/modules/myPinup/images/no_image.gif';

    $image_info = getimagesize((string)$lien_gif);

    $width = $image_info[0];

    $height = $image_info[1];

    $type = $image_info[2];

    if (0 != $type) {
        $lien_image = $lien_gif;
    } else {
        $image_info = getimagesize((string)$lien_jpg);

        $width = $image_info[0];

        $height = $image_info[1];

        $type = $image_info[2];

        if (0 != $type) {
            $lien_image = $lien_jpg;
        } else {
            $image_info = getimagesize((string)$lien_png);

            $width = $image_info[0];

            $height = $image_info[1];

            $type = $image_info[2];

            if (0 != $type) {
                $lien_image = $lien_png;
            } else {
                $lien_image = $lien_no;
            }
        }
    }

    $width += 20;

    $height += 25;

    if ('/register.php' == $options[4]) {
        $link = XOOPS_URL . $options[4];
    } else {
        if ('' == $options[4]) {
            $link = 'self';
        } else {
            $link = $options[4];
        }
    }

    $block['content'] = (string)$lien_image;

    $block['texte'] = (string)$text;

    $block['date'] = (string)$date;

    $block['width'] = (string)$width;

    $block['height'] = (string)$height;

    $block['link'] = (string)$link;

    return $block;
}

function d_mypinup_edit($options)
{
    $form = _MB_MYPINUP_RANDFILES
            . '&nbsp;'
            . _MB_MYPINUP_FROM
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[0]
            . '">&nbsp;'
            . _MB_MYPINUP_TO
            . '&nbsp;<input type="text" size="3" name="options[]" value="'
            . $options[1]
            . '">&nbsp;'
            . _MB_MYPINUP_FILES
            . '<br><br>';

    $form .= _MB_MYPINUP_ORDER . '&nbsp;<select name="options[]">';

    $form .= '<option value="random"';

    if ('random' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_RANDOM . '</option>';

    $form .= '<option value="day"';

    if ('day' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_DATE . '</option>';

    $form .= '<option value="week"';

    if ('week' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEK . '</option>';

    $form .= '<option value="weekdays"';

    if ('weekdays' == $options[2]) {
        $form .= ' selected="selected"';
    }

    $form .= '>' . _MB_MYPINUP_WEEKDAYS . '</option>';

    $form .= '</select><br><br>';

    $form .= _MB_MYPINUP_FILEDIRECTORY . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[3] . '"><br><br>';

    $form .= _MB_MYPINUP_LINK . '&nbsp;<input type="text" size="64" name="options[]" value="' . $options[4] . '">';

    return $form;
}
