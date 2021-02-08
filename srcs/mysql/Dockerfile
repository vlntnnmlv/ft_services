# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rmarguri <rmarguri@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/12 14:04:43 by rmarguri          #+#    #+#              #
#    Updated: 2021/01/20 19:55:16 by rmarguri         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.11.7

RUN		apk update && \
		apk add openrc 

RUN		apk add mysql mysql-client && \
		mkdir "/run/mysqld" && \
		chown -R mysql /run/mysqld

COPY	./srcs/createdb.sql ./srcs/start.sh ./srcs/base.sql ./

COPY	./srcs/my.cnf /etc/my.cnf

EXPOSE	3306

CMD		[ "sh", "start.sh" ]