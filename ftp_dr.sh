kubectl delete svc ftps
kubectl delete deploy ftps
docker build -t ftps ./srcs/ftps
kubectl apply -f ./srcs/ftps/ftps-deployment.yaml
kubectl apply -f ./srcs/ftps/ftps-service.yaml