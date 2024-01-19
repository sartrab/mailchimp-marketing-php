<?php

/**
 * Mailchimp Marketing API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.80
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpMarketing;

use MailchimpMarketing\Api\AccountExportApi;
use MailchimpMarketing\Api\AccountExportsApi;
use MailchimpMarketing\Api\ActivityFeedApi;
use MailchimpMarketing\Api\AuthorizedAppsApi;
use MailchimpMarketing\Api\AutomationsApi;
use MailchimpMarketing\Api\BatchWebhooksApi;
use MailchimpMarketing\Api\BatchesApi;
use MailchimpMarketing\Api\CampaignFoldersApi;
use MailchimpMarketing\Api\CampaignsApi;
use MailchimpMarketing\Api\ConnectedSitesApi;
use MailchimpMarketing\Api\ConversationsApi;
use MailchimpMarketing\Api\CustomerJourneysApi;
use MailchimpMarketing\Api\EcommerceApi;
use MailchimpMarketing\Api\FacebookAdsApi;
use MailchimpMarketing\Api\FileManagerApi;
use MailchimpMarketing\Api\LandingPagesApi;
use MailchimpMarketing\Api\ListsApi;
use MailchimpMarketing\Api\PingApi;
use MailchimpMarketing\Api\ReportingApi;
use MailchimpMarketing\Api\ReportsApi;
use MailchimpMarketing\Api\RootApi;
use MailchimpMarketing\Api\SearchCampaignsApi;
use MailchimpMarketing\Api\SearchMembersApi;
use MailchimpMarketing\Api\SurveysApi;
use MailchimpMarketing\Api\TemplateFoldersApi;
use MailchimpMarketing\Api\TemplatesApi;
use MailchimpMarketing\Api\VerifiedDomainsApi;

class Configuration
{
    private static $defaultConfiguration;

    protected $apiKeys = [];
    protected $apiKeyPrefixes = [];
    protected $accessToken = '';
    protected $username = '';
    protected $password = '';
    protected $host = 'https://server.api.mailchimp.com/3.0';
    protected $userAgent = 'Swagger-Codegen/3.0.80/php';
    protected $debug = false;
    protected $debugFile = 'php://output';
    protected $tempFolderPath;
    protected $timeout = 120;

    public AccountExportApi $accountExport;
    public AccountExportsApi $accountExports;
    public ActivityFeedApi $activityFeed;
    public AuthorizedAppsApi $authorizedApps;
    public AutomationsApi $automations;
    public BatchWebhooksApi $batchWebhooks;
    public BatchesApi $batches;
    public CampaignFoldersApi $campaignFolders;
    public CampaignsApi $campaigns;
    public ConnectedSitesApi $connectedSites;
    public ConversationsApi $conversations;
    public CustomerJourneysApi $customerJourneys;
    public EcommerceApi $ecommerce;
    public FacebookAdsApi $facebookAds;
    public FileManagerApi $fileManager;
    public LandingPagesApi $landingPages;
    public ListsApi $lists;
    public PingApi $ping;
    public ReportingApi $reporting;
    public ReportsApi $reports;
    public RootApi $root;
    public SearchCampaignsApi $searchCampaigns;
    public SearchMembersApi $searchMembers;
    public SurveysApi $Surveys;
    public TemplateFoldersApi $templateFolders;
    public TemplatesApi $templates;
    public VerifiedDomainsApi $verifiedDomains;

    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();

        $this->accountExport = new AccountExportApi($this);
        $this->accountExports = new AccountExportsApi($this);
        $this->activityFeed = new ActivityFeedApi($this);
        $this->authorizedApps = new AuthorizedAppsApi($this);
        $this->automations = new AutomationsApi($this);
        $this->batchWebhooks = new BatchWebhooksApi($this);
        $this->batches = new BatchesApi($this);
        $this->campaignFolders = new CampaignFoldersApi($this);
        $this->campaigns = new CampaignsApi($this);
        $this->connectedSites = new ConnectedSitesApi($this);
        $this->conversations = new ConversationsApi($this);
        $this->customerJourneys = new CustomerJourneysApi($this);
        $this->ecommerce = new EcommerceApi($this);
        $this->facebookAds = new FacebookAdsApi($this);
        $this->fileManager = new FileManagerApi($this);
        $this->landingPages = new LandingPagesApi($this);
        $this->lists = new ListsApi($this);
        $this->ping = new PingApi($this);
        $this->reporting = new ReportingApi($this);
        $this->reports = new ReportsApi($this);
        $this->root = new RootApi($this);
        $this->searchCampaigns = new SearchCampaignsApi($this);
        $this->searchMembers = new SearchMembersApi($this);
        $this->Surveys = new SurveysApi($this);
        $this->templateFolders = new TemplateFoldersApi($this);
        $this->templates = new TemplatesApi($this);
        $this->verifiedDomains = new VerifiedDomainsApi($this);
    }

    public function setConfig($config = [])
    {
        $apiKey = $config['apiKey'] ?? '';
        $accessToken = $config['accessToken'] ?? '';
        $server = $config['server'] ?? 'invalid-server';
        $host = str_replace('server', $server, (string) $this->getHost());

        // Basic Authentication
        if (!empty($apiKey)) {
            $this->setUsername('user');
            $this->setPassword($apiKey);
        }

        // OAuth Authentication
        elseif (!empty($accessToken)) {
            $this->accessToken = $accessToken;
        }

        $this->setHost($host);

        if (isset($config['timeout'])) {
            $this->timeout = $config['timeout'];
        }

        return $this;
    }

    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    public function getApiKey($apiKeyIdentifier)
    {
        return $this->apiKeys[$apiKeyIdentifier] ?? null;
    }

    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return $this->apiKeyPrefixes[$apiKeyIdentifier] ?? null;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    public function getUserAgent()
    {
        return $this->userAgent;
    }

    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    public function getDebugFile()
    {
        return $this->debugFile;
    }

    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    public static function toDebugReport()
    {
        $report  = 'PHP SDK (MailchimpMarketing) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 3.0.80' . PHP_EOL;
        $report .= '    SDK Package Version: 3.0.80' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}
