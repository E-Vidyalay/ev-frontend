<?php
/**
 * Routing for Opauth
 */
Router::connect('/auth/callback', array('controller' => 'users', 'action' => 'callback'));
Router::connect('/auth/*', array('plugin' => 'Opauth', 'controller' => 'Opauth', 'action' => 'index'));
