# Generate The Library From YAML

We've cached a copy of the swagger.yaml to avoid annoying their API so you can do something like this.

```sh
docker run --rm -v "$(pwd):/local" openapitools/openapi-generator-cli generate \
    --input-spec /local/swagger-1.8.0.yaml \
    --config /local/generate/config.yaml \
    --generator-name php-nextgen \
    --git-user-id synergitech \
    --git-repo-id iplicit-php \
    --global-property apiTests=false,modelTests=false \
    --output /local
```

You will need to edit the README.md back to something which makes sense. You will also need to exclude the generate directory and find/replace `http://localhost` with `https://api.iplicit.com` and `new GuzzleHttp\Client()` with `config: $config`
