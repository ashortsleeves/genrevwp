<?php
namespace Deployer;

require 'recipe/common.php';;

$client_user = 'genrev';

// Project name
set('application', 'genrev');

// Project repository
set('repository', 'https://github.com/ashortsleeves/genrevwp.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
set('shared_files', ['wp-config.php']);
set('shared_dirs', ['wp-content/uploads', 'wp-content/'.$client_user.'/dist'] );

// Writable dirs by web server
// set('writable_dirs', ['wp-content/uploads']);


// Hosts

host('adamshortsleeves.com')
    ->user('ab672')
    ->port('2222')
    ->set('deploy_path', '~/public_html/{{application}}');



// Tasks

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    // 'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

task('pwd', function () {
    $result = run('pwd');
    writeln("Current dir: $result");
});

task('comp', function () {
    $result = run('(cd public_html/genrev/releases/1/wp-content/themes/genrev ; yarn run build)');
    writeln("Current dir: $result");
});

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
