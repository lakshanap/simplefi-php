<?php
include_once 'epiphany/src/Epi.php';
include_once 'controllers/static.class.php';
include_once 'lib/constants.class.php';

Epi::setSetting('exceptions', true);
Epi::setPath('base', 'epiphany/src');
Epi::setPath('view', './views');
Epi::init('route', 'session-php', 'template');

getRoute()->get('/', array('StaticController', 'displayHome'));
getRoute()->get('/howitworks', array('StaticController', 'displayHowItWorks'));
getRoute()->get('/employee', array('StaticController', 'displayEmployee'));
getRoute()->get('/employers', array('StaticController', 'displayEmployers'));
getRoute()->get('/contactus', array('StaticController', 'displayContactUs'));
getRoute()->get('/aboutus', array('StaticController', 'displayAboutUs'));

getRoute()->run();

?>
