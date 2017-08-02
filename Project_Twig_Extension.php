<?php

/**
 * Created by PhpStorm.
 * User: abhinavgirish
 * Date: 7/27/17
 * Time: 10:38 AM
 * used basic tutorial from https://twig.symfony.com/doc/2.x/advanced.html#id2
 */
class Project_Twig_Extension extends Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new Twig_Function('getLocInfo', array($this, 'getLocInfo')),
        );
    }

    public function getLocInfo() {
        $response = Unirest\Request::get("https://trailapi-trailapi.p.mashape.com/?lat=37.7&lon=-122.4&q[activities_activity_type_name_eq]=hiking&q[city_cont]=San+Francisco&q[country_cont]=United+States&q[state_cont]=California&radius=25",
            array(
                "X-Mashape-Key" => "2DKorc206ImshrwHFboBUJeyCw2qp1qrVFIjsnsbLRcwF0pNb4",
                "Accept" => "text/plain"
            )
        );
        var_dump(json_decode($response));
        return;
    }
}