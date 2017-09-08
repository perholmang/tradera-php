<?php

namespace Holmang\Tradera\Search;


use Holmang\Tradera\BaseService;

class SearchService extends BaseService
{
    public function __construct(array $config = [])
    {
        parent::__construct('http://api.tradera.com/v3/searchservice.asmx', $config);
    }

    public function searchAdvanced(SearchAdvancedRequest $request)
    {
        $client = new \SoapClient($this->url . "?WSDL", array(
            'location' => $this->buildLocation(),
            'trace' => 1,
            'exception' => 0
        ));

        $response = $client->SearchAdvanced(['request' => $request]);

        return new SearchAdvancedResult($response);
    }
}