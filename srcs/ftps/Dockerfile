# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rmarguri <rmarguri@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/12 13:57:07 by rmarguri          #+#    #+#              #
#    Updated: 2021/01/20 19:55:37 by rmarguri         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

from	alpine:3.11.7

RUN 	apk update && \
		apk add openrc 

RUN		apk add vsftpd && \
		apk add openssl

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \ 
		-subj '/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=rmarguri' \
		-keyout /etc/ssl/private/vsftpd.key \
		-out /etc/ssl/certs/vsftpd.crt

RUN		adduser -D -h /var/ftp rmarguri; echo "rmarguri:1" | chpasswd
RUN		mkdir -p /var/ftp

COPY	/srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY	/srcs/start.sh .

RUN		chmod +x start.sh

EXPOSE	20 21 44000
CMD		[ "sh", "start.sh" ]