# Laravel

## AppServiceProvider

```php
$this->app->bind('IplicitApiClient', function () {
    $options = [
        'allow_redirects' => false,
        'headers' => [
            'Domain' => config('services.iplicit.domain'),
        ],
    ];

    $apiToken = cache()->get('iplicit-api-token');

    if ($apiToken === null) {
        try {
            $response = (new Client($options))->post('https://api.iplicit.com/api/session/create/api', [
                'json' => [
                    'username' => config('services.iplicit.user'),
                    'userApiKey' => config('services.iplicit.key'),
                ],
            ]);
        } catch (ServerException $e) {
            $body = (string) $e->getResponse()->getBody();

            if ($body == '') {
                throw new \RuntimeException('Bad auth for iplicit?', $e->getCode(), $e);
            }

            throw $e;
        }

        $response = json_decode($response->getBody());

        if (! is_object($response) || ! property_exists($response, 'tokenDue') || ! property_exists($response, 'sessionToken')) {
            throw new \RuntimeException('Bad api session response from iplicit');
        }

        $expiration = Carbon::parse($response->tokenDue);

        $apiToken = cache()->remember('iplicit-api-token', $expiration->subMinute(), fn () => $response->sessionToken);
    }

    $options['headers']['Authorization'] = "Bearer {$apiToken}";

    return new Client($options);
});
```

## Usage

```php
(new SynergiTech\Iplicit\Api\ProfileApi(app('IplicitApiClient')))->getProfile()
```
