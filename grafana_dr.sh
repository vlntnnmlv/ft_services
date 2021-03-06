# kubectl delete svc grafana
kubectl delete deploy grafana
docker build -t grafana ./srcs/grafana
kubectl apply -f ./srcs/grafana/grafana-deployment.yaml
# kubectl apply -f ./srcs/grafana/grafana-service.yaml