<?php

namespace Model;

use sJo\Libraries\Http;
use sJo\Libraries\Path;

class Repository
{
    public static function init()
    {
        global $repositories;

        foreach ($repositories as $repository=>$options) {

            list($username, $reponame) = explode('/', $repository);

            $repopath = Path::create(ROOT . '/public_html/repositories/' . $username);

            if (!is_dir($repopath . '/' . $reponame)) {
                exec(
                      'cd ' . $repopath
                    . ' && git clone https://github.com/' . $repository . '.git'
                    . ' && cd ' . $reponame
                    . ' && git checkout v' . $options['version']
                );
                if(file_exists($repopath . '/' . $reponame . '/' . $options['public_html'] . '/bower.json')) {
                    exec(
                          'cd ' . $repopath . '/' . $reponame . '/' . $options['public_html']
                        . ' && bower install'
                    );
                }
                if(file_exists($repopath . '/' . $reponame . '/composer.json')) {
                    exec(
                        'cd ' . $repopath . '/' . $reponame
                        . ' && composer install'
                    );
                }
            }
        }
    }

    public static function getList()
    {
        global $repositories;

        $data = array();

        foreach ($repositories as $repository=>$options) {

            list($username, $reponame) = explode('/', $repository);

            $http = new Http();
            $http->setCache(3600);
            $http->request('https://api.github.com/repos/' . $username . '/' . $reponame);
            $github = $http->response('json');

            $data[$repository] = (object) array(
                'name' => $github->name,
                'description' => $github->description,
                'html_url' => $github->html_url,
                'version' => $options['version']
            );
        }

        return $data;
    }
}
