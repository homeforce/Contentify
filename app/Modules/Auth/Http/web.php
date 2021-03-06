<?php

ModuleRoute::context('Auth');

ModuleRoute::get('auth/registration/create', 'RegistrationController@getCreate');
ModuleRoute::post('auth/registration/create', 'RegistrationController@postCreate');

ModuleRoute::get('auth/steam', 'LoginController@getSteam');
ModuleRoute::get('auth/login', ['as' => 'login', 'uses' => 'LoginController@getLogin']);
ModuleRoute::post('auth/login', 'LoginController@postLogin');

ModuleRoute::get('auth/logout',  ['as' => 'logout', 'uses' => 'LogoutController@getIndex']);

ModuleRoute::get('auth/restore', 'LogoutController@getIndex');
ModuleRoute::post('auth/restore', 'LogoutController@postIndex');
ModuleRoute::post('auth/restore/new/{email}/{code}', 'LogoutController@getNew');

ModuleRoute::get('auth/username/check/{username}', 'RegistrationController@checkUsername');