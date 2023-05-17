local-up:
	docker-compose -f local.yml build
	docker-compose -f local.yml up -d
local-down:
	docker-compose -f local.yml down -v
local-start:
	docker-compose -f local.yml start
local-stop-phpfpm:
	docker-compose -f local.yml stop phpfpm
local-stop:
	docker-compose -f local.yml stop
local-log:
	docker-compose -f local.yml logs -f phpfpm
local-bash:
	docker-compose -f local.yml exec phpfpm bash
local-sh:
	docker-compose -f local.yml exec phpfpm sh
local-restart:
	docker-compose -f local.yml restart
local-logs:
	docker-compose -f local.yml logs phpfpm

prod-init:
	chmod -R 777 /root/hirakana/web/public/upload /root/hirakana/web/storage /root/hirakana/web/bootstrap/cache
	docker-compose -f prod.yml build
	docker-compose -f prod.yml up -d
	docker-compose -f prod.yml exec phpfpm composer install