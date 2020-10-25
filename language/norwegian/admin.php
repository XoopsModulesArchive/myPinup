<?php

// $Id: admin.php,v 1.1 2006/03/27 17:59:33 mikhail Exp $
// Support (www.xoops.org)
// Module Info

// Admin FAQ
define('_FAQ_MYPINUP_Q01', "What's myPinup ?");
define(
    '_FAQ_MYPINUP_A01',
    "Basically, myPinup is a module that allows to show a nice creature in a block.<br>
						 Actually, this could have been calles 'A new picture in a block'<br>
						 But, I prefer to call this my Pin up, don't you ? :-D"
);

define('_FAQ_MYPINUP_Q02', 'What are the different available blocks ?');
define(
    '_FAQ_MYPINUP_A02',
    'There are 4 different blocks :<br>
						 - <i>The daily Pin up</i> (images/day/.. Directory) : shows a different lovely pin up, each day.<br>
						 - <i>The random Pin up</i> (images/day/.. Directory) : show a random pin up each time the page reload.<br>
						 - <i>The Pin up of the week</i> (images/week/.. Directory) : show a different pin up every week.<br>
						 - <i>The Pin up of weekdays</i> (images/weekday/.. Directory) : show a different pin up each day of the week. So 7 max.<br>
Each and every blocs are independently editable.'
);

define('_FAQ_MYPINUP_Q03', 'Can I add custom pictures ?');
define(
    '_FAQ_MYPINUP_A03',
    'Of course. This is basically the purpose of this module.<br>
						 Just upload the pictures you want in the correct directory.<br>
						 But you have to pay attention on how you name it. You must respect the [pixxx].yyy nomenclature.<br>
						 For instance, if you want to change the sunday picture, you have to remove the images/weekday/<b>pi001</b>.yyy, and replace it with a file with same name. But you can choose to have a .gif, .jpg or .png file. No matter of importance.'
);

define('_FAQ_MYPINUP_Q04', 'What happen if a picture is missing ?');
define('_FAQ_MYPINUP_A04', 'Nothing, the script will automatically replace it by a defaut picture, which is images/no_image.gif.');

define('_FAQ_MYPINUP_Q05', 'Where can I find other Pin up ?');
define('_FAQ_MYPINUP_A05', "You will find plenty other collections on <a href='http://www.wolfpackclan.com'>www.wolfpackclan.com</a>.");

define('_FAQ_MYPINUP_Q06', 'I have made my own collection, does it interests someone else ?');
define('_FAQ_MYPINUP_A06', "Most probably yes. Even though, you are fond of sports car, beautiful landscapes, or anything else, why not share it with the others ? You can send your collection to <A HREF='mailto:solo@wolfpackclan.com'>solo@wolfpackclan.com</a>.");

define('_CREDIT_MYPINUP_TITLE', 'My Pin up - FAQ');
define('_CREDIT_MYPINUP_MODEL', 'Mypinup : Original module');
define('_CREDIT_MYPINUP_CREDIT', 'myPinup is an original creation of ');
