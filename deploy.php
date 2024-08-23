<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/saarugesan/random.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('192.168.2.11')
    ->set('remote_user', 'globeoss')
    ->set('deploy_path', '~/project_test');

// Hooks

after('deploy:failed', 'deploy:unlock');