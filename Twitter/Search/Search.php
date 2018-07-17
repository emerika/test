<?php
/**
 * User: brad
 * Date: 7/16/18
 * Time: 2:57 PM
 */

namespace Twitter\Search;


/**
 *
 */
class Search extends \Twitter\Base
{

    public function search($value)
    {
        try{
            $url = "/search/tweets.json";
            $response = $this->callTwitter("get",$url,$value);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
}
