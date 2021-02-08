# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rmarguri <rmarguri@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/12 14:04:36 by rmarguri          #+#    #+#              #
#    Updated: 2021/02/07 17:52:30 by rmarguri         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    alpine:3.7

RUN     apk update && \
        apk add openrc dpkg

ADD     https://s3-us-west-2.amazonaws.com/grafana-releases/release/grafana-5.0.4.linux-x64.tar.gz ./

RUN     tar -C . -xzf grafana-5.0.4.linux-x64.tar.gz && \
        mv grafana-5.0.4 /usr/share/grafana

COPY    srcs/start.sh /

COPY    srcs/grafana.ini /usr/share/grafana/conf/custom.ini

COPY    srcs/datasources.yaml /usr/share/grafana/conf/provisioning/datasources/influxdb.yaml

COPY    srcs/dashboards.yaml /usr/share/grafana/conf/provisioning/dashboards/influxdb.yaml

RUN     mkdir -p /var/lib/grafana_dashboards/

COPY    srcs/dashboards/. /var/lib/grafana_dashboards/

EXPOSE  3000

CMD     ["sh", "start.sh"]