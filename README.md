# Migrate Wordpress To Docker

WordPress is the most popular content management system. It’s written in PHP, stores data in a MySQL database, and usually runs behind an Apache web server. These dependencies add several packages to your system and can be tricky to maintain over time. Here’s how to quickly containerize existing WordPress website.

# Prerequisites
1. Install Nginx on the server. We will use it as a proxy server. Use following command to install nginx on your Ubuntu server.<code>apt-get install nginx -y</code> <br>

2. Zip archive of your wordpress website <br>

3. sql dump of your database

# Install Docker Engine and Docker Compose
Refer to my docker installation bash <a href="https://github.com/krishnan4368/install-docker-on-linux">script </a>

# Steps
1. Create work directory <br>
<code>mkdir /root/my_wordpress/ </code><br>

2. Download docker-compose.yml file into working directory.<br>
```
cd /root/my_wordpress/ && curl -O https://raw.githubusercontent.com/krishnan4368/migrate_to_docker/main/docker-compose.yml
````

2. Create required folders<br>
<code> mkdir -p /root/my_wordpress/src/ </code> <br> 
<code> mkdir -p /root/my_wordpress/database/{data,initdb.d} </code>

3. Extract your wordpress files into <code>/root/my_wordpress/src/</code> <br>

4. Place sql dump file into folder <code>/root/my_wordpress/database/initdb.d/</code><br>

5. Folder  <code>/root/my_wordpress/database/data/</code> will be used to store database data.<br>

6. Cange database host from <code>define('DB_HOST', 'localhost');</code> to <code>define('DB_HOST', 'mysql');</code> on  <code>wp-config.php</code> file of folder <code>/root/my_wordpress/src/</code><br>

7. Set Nginx as a reverse proxy to Docker Container. Run following command on terminal. Which will create an nginx configuration for your website.Make sure to replace <code>my-domain.com</code> with your actual doamin.
```
cat> /etc/nginx/sites-available/my_domain.com.conf << EOF1  
server {
    listen 80;
    listen [::]:80;

    server_name my-domain.com www.my-doamin.com;
    location / {
        proxy_pass http://127.0.0.1:1234;
        proxy_set_header Accept-Encoding "";
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
    }
}
EOF1
```
8. You can edit docker-compose.yml file and replace database details with your desired values. Make sure to use same database details in your wp-config.php file.
9. Start Docker Containers using docker-compose.
```
cd /root/my_wordpress/
docker-compose up -d
```
10. Open your domain on your preferd web browser.
