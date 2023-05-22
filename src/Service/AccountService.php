<?php

namespace Siven76\OandaLibrary\Service;

use Siven76\OandaLibrary\Exception\OandaException;

class AccountService
{
    const ACCOUNT_BASE_ENDPOINT = 'accounts/';

    private $oandaService;

    public function __construct(OandaService $oandaService)
    {
        $this->oandaService = $oandaService;
    }

    public function getAccountInformation(string $accountId)
    {
        return $this->oandaService->makeRequest('GET', self::ACCOUNT_BASE_ENDPOINT . $accountId);
    }

    public function getAccountSummary(string $accountId)
    {
        return $this->oandaService->makeRequest('GET', self::ACCOUNT_BASE_ENDPOINT . $accountId . '/summary');
    }

    public function getAccountInstruments(string $accountId)
    {
        return $this->oandaService->makeRequest('GET', self::ACCOUNT_BASE_ENDPOINT . $accountId . '/instruments');
    }

    // Add more methods for other Account API endpoints...
}
