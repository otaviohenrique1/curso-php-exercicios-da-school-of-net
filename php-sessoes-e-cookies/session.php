<?php
    ini_set('session.save_handler', 'sqlite');
    ini_set('session.save_path', __DIR__.'/sessions');
    // ini_set('session.save_path', __DIR__.'/sessions.db');
    session_set_cookie_params(60*60 , '/', 'localhost', false, true);
    session_start();
