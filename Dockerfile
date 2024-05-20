FROM php:8.1-fpm
#WORKDIR /home/nastya/docker_tasks
WORKDIR /nastya/home/docker_task
COPY . .
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]