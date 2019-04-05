REPLACEMENT = "some value"
DATA=[{ "memoryReservation": 128, "environment": [], "name": "apache-container", "mountPoints": [], "image": "617272699181.dkr.ecr.us-east-1.amazonaws.com/apache:latest", "cpu": 0, "portMappings": [ { "protocol": "tcp", "containerPort": 80, "hostPort": 80 } ], "essential": true, "volumesFrom": []}]
jq $DATA.image=$REPLACEMENT
echo $DATA
