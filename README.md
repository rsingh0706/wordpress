#  WordPress Installation on Ubuntu with Nginx

#  Project Overview

WordPress is a free, open-source content management system (CMS) that allows users to build and host websites

# Prerequisites

Ubuntu Server (22.04 or later recommended)
- SSH access to the server
- A domain name pointing to your server's IP


## How to Set Up and Run the Wordpress Application

* Clone the repository  
```bash
git clone https://github.com/rsingh0706/wordpress.git
```
## Linux Essentials

### 1. Update and Upgrade System Packages

```bash
sudo apt update && sudo apt upgrade -y
```
### 2. Install Required Packages

* Install Nginx, MySQL, PHP, and other required dependencies:

```bash
sudo apt install nginx mysql-server php-fpm php-mysql php-curl php-xml php-mbstring php-zip unzip curl -y
```
### 3. Secure MySQL Installation
Run the MySQL secure installation script:
```bash
sudo mysql_secure_installation
```
Follow the prompts to set a root password and secure your installation.

### 4. Create a MySQL Database and User for WordPress
Log in to MySQL:

```bash
sudo mysql
```
Create a database and user:

```sql
CREATE DATABASE wordpress;
CREATE USER 'wordpressuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpressuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```
Replace `password` with a strong password.

### 5. Download WordPress
Navigate to the web root directory:
```bash
cd /var/www
```
Download the latest WordPress package:
```bash
wget https://wordpress.org/latest.zip
```
Unzip the package:
```bash
unzip latest.zip
```
Set appropriate permissions:
```bash
sudo chown -R www-data:www-data /var/www/wordpress
sudo chmod -R 755 /var/www/wordpress
```
### 6. Configure Nginx
Create a new server block configuration:
```bash
sudo nano /etc/nginx/sites-available/wordpress
```
Add the following content, replacing `example.com` with your domain:

```nginx

server {
    listen 80;
    server_name example.com www.example.com

root /var/www/html;

        # Add index.php to the list if you are using PHP
        index index.html index.htm index.nginx-debian.html index.php;

        server_name _;

        location / {
                # First attempt to serve request as file, then
                # as directory, then fall back to displaying a 404.
                try_files $uri $uri/ =404;
        }

        # pass PHP scripts to FastCGI server
        #
        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
        #
        #       # With php-fpm (or other unix sockets):
                fastcgi_pass unix:/run/php/php8.1-fpm.sock;
        #       # With php-cgi (or other tcp sockets):
        #       fastcgi_pass 127.0.0.1:9000;
        }

        # deny access to .htaccess files, if Apache's document root
        # concurs with nginx's one
        #
        #location ~ /\.ht {
        #       deny all;
        #}
```

Test and reload Nginx:
```bash
sudo nginx -t
sudo systemctl reload nginx
```
### 7. Complete WordPress Setup
Visit your domain (`http://example.com`) in a browser and follow the WordPress setup wizard:
- Select your language.
- Enter the database details:
  - Database Name: `wordpress`
  - Username: `wordpressuser`
  - Password: `password`
    
### 8. Troubleshooting
Check logs if issues arise:
- Nginx: `/var/log/nginx/error.log`

### 9. Maintenance
To update WordPress, plugins, or themes, use the WordPress admin dashboard. Regularly back up your site and database.

---

Your WordPress site is now live and running on Nginx! 🎉








