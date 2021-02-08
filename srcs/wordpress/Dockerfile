# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rmarguri <rmarguri@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/12 14:04:54 by rmarguri          #+#    #+#              #
#    Updated: 2021/01/20 19:55:35 by rmarguri         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.11.7

RUN 	apk update && \
		apk add openrc 
RUN		apk add nginx supervisor \
		php7 php7-fpm php7-mysqli \ 
		php7-zlib php7-curl php7-mbstring \
		php7-json php7-session	
RUN		mkdir www
RUN 	wget https://wordpress.org/latest.zip && \
		unzip latest.zip && \
		mv wordpress /www/ && \
		rm latest.zip
		
COPY 	./srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY 	./srcs/supervisord.conf /etc/supervisord.conf
COPY 	./srcs/start.sh .
COPY	./srcs/wp-config.php /www/

RUN 	chmod +x start.sh

EXPOSE	5050

CMD		[ "sh", "start.sh" ]