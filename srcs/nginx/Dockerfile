# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rmarguri <rmarguri@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/12 14:04:46 by rmarguri          #+#    #+#              #
#    Updated: 2021/03/02 18:51:59 by rmarguri         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.11.7

RUN 	apk update && \
		apk add openrc 
RUN		apk add nginx && \
		apk add supervisor
RUN		apk add openssl && \
		apk add openssh
RUN		adduser -D 'rmarguri'; echo "rmarguri:1" | chpasswd;
RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj '/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=rmarguri' \
		-keyout /etc/ssl/localhost.key \
		-out /etc/ssl/localhost.crt
RUN		mkdir www

COPY	./srcs/index.html /www/
COPY 	./srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY 	./srcs/supervisord.conf /etc/supervisord.conf
COPY 	./srcs/start.sh start.sh

RUN 	chmod +x start.sh

EXPOSE	80 443 22

CMD		[ "sh", "start.sh" ]