<?php

/**
 * $repositories contains all repositories related to this deployment package
 *
 * Example repository:
 *
 * 'example_repository' => array(
        'branches' => array(),
        'path' => '',
        'command_prefix' => '/usr/bin/git',
        'callback' => '',
 * )
 *
 * 'branches' should contain all branches that we will listen for
 * 'path' is the root of your git repository
 * 'command_prefix' (optional) allows you to prefix all git commands. Might be necessary if the user running
 *                  the command does not have git in his path
 * 'callback' (optional) Allows you to specify a callback function that will be executed after pulling from the
 *            repository.
 */

$repositories = array(
    'supporterfrog' => array(
        'branches' => array(
            'master',
        ),
        'path' => '',
        'command_prefix' => '/usr/bin/',
        'callback' => '',
    ),
    'git-deployment' => array(
        'branches' => array(
            'master',
        ),
        'path' => '',
    ),
    'Project X' => array(
        'branches' => array(
            'master',
        ),
        'path' => '',
    ),
    'test' => 'Project X',
);

function callbackFunction($repository)
{

}
