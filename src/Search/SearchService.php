<?php

namespace Holmang\Tradera\Search;


use Holmang\Tradera\BaseService;

class SearchService extends BaseService
{
    public function __construct(array $config = [])
    {
        parent::__construct('http://api.tradera.com/v3/searchservice.asmx', $config);
    }

    /**
     * @param SearchAdvancedRequest $request
     * @return SearchAdvancedResult
     */
    public function searchAdvanced(SearchAdvancedRequest $request)
    {
        $client = new \SoapClient($this->url . "?WSDL", array(
            'location' => $this->buildLocation(),
            'trace' => 1,
            'exception' => 1
        ));

        $response = $client->SearchAdvanced(['request' => $request]);
        var_dump($response);

        if (!isset($response->SearchAdvancedResult) || !isset($response->SearchAdvancedResult->Items)) {
            throw new \RuntimeException($response);
        }

        return new SearchAdvancedResult($response);
    }
}