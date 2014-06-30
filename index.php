<?php

include('Config/global.php');


//Adding the routes
Router::add('/', 'CalendarController.year');
Router::add('/year/(?<year>[0-9]{4}+)', 'CalendarController.year');
Router::add('/year/(?<year>[0-9]{4}+)/month/(?<month>[0-9]{2}+)', 'CalendarController.month');


//Running the routing
Router::run();

