# yaf_framework
给予yaf扩展的高性能开发框架
# 配置
appache
LISTEN 9009
<VirtualHost *:9009>
DocumentRoot "F:\yaf_framework\yaframework\public"
ServerName localhost
ServerAdmin admin@mysoft.com.cn
BrowserMatch "MSIE [2-5]" \
         nokeepalive ssl-unclean-shutdown \
         downgrade-1.0 force-response-1.0
</VirtualHost>
<Directory "F:\yaf_framework\yaframework\public">
    Options Indexes FollowSymLinks
    AllowOverride None
    DirectoryIndex index.php
    Require all granted
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . index.php
</Directory>
#php.ini 配置
extension=php_yaf.dll
yaf.environ="product"

