<?php

namespace qingfeng;

use think\Config;
use think\Route;
use think\Service;

class TimeService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/time', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer'] = 'Time';
                $data['statement'] = base64_decode('5pys56uZ5L2/55So6Laj5qC85a2Q5qGG5p625pCt5bu6');

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
