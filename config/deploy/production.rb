set :application, 'application_url'
set :deploy_to, "/var/www/vhosts/#{fetch(:application)}"
server 'nunb.nclud.com', roles: %w{web app}
set :branch, "master"
