# Amazing php dashboard
## Configuration
### Server Configuration
1. You can run it directly from cli
    ```bash
    php -S localhost:8080
    ```
2. Apache configuration
    It's already handled by .htaccess file

3. Nginx configuration
    ```bash
    server {
        index index.php;

        location / {
            try_files $uri @php_root;
        }

        location @php_root {
            fastcgi_pass unix:/run/php-fpm/php-fpm.sock; # or fastcgi_pass 127.0.0.1:9000;
            fastcgi_index index.php;
            include fastcgi_params;

            # Redirect everything to index.php
            fastcgi_param SCRIPT_FILENAME $document_root/index.php;
            fastcgi_param HTTPS off;
        }
    }
    ```

### Project Configuration
Rename `.env.example` to `.env` and update settings to your preference.

## Developement

1. Generating tailwind classes
`npm run build`
`pnpm build`
`yarn build`
