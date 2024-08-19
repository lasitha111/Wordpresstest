# Use the official WordPress image from Docker Hub
FROM wordpress:latest

WORKDIR /var/www/Devops
# Copy your WordPress site code to the /var/www/html directory
COPY ./wordpress /var/www/html

# Expose port 80
EXPOSE 80

