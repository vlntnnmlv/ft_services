# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rmarguri <rmarguri@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/12 14:04:51 by rmarguri          #+#    #+#              #
#    Updated: 2021/01/20 19:55:35 by rmarguri         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine:3.11.7

RUN		apk update && apk add openrc 

ADD		https://dl.influxdata.com/telegraf/releases/telegraf-1.15.3_linux_amd64.tar.gz /etc/

RUN		tar -xzf /etc/telegraf-1.15.3_linux_amd64.tar.gz -C /etc/ ; rm -rf /etc/telegraf-1.15.3_linux_amd64.tar.gz && \
		mv /etc/telegraf-1.15.3 /telegraf && \
		cp -r telegraf/* / && rm -rf /telegraf
RUN		wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub && \
		wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk && \
		apk add glibc-2.28-r0.apk
RUN		telegraf -sample-config telegraf.conf --input-filter cpu:mem --output-filter influxdb > telegraf.conf

COPY	telegraf.conf /etc/telegraf/

CMD		[ "telegraf" ]