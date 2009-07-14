set :application, "grgivecamp"
set :user, "grgivecamp"
set :username, "grgivecamp"
set :scm, :git
set :repository, "ssh://grgivecamp@grgivecamp.org/home/grgivecamp/git/grgivecamp.org" 
set :deploy_to, "/home/grgivecamp/www/grgivecamp.org"
set :use_sudo, false
set :assets, %W(sites/default/files sites/default/settings.php)

role :web, "grgivecamp.org"
role :db, "grgivecamp.org"

namespace :deploy do
  task :set_permissions, :except => { :no_release => true } do
    # do nothing
  end
 
  task :restart do
   # do nothing 
  end
end

namespace :drupal do
  task :symlink, :except => { :no_release => true } do
    logger.info 'Symlinking assets'

    assets.each do |asset|
      run "ln -s #{shared_path}/#{asset} #{release_path}/#{asset}"
    end
  end  
end
after 'deploy:symlink', 'drupal:symlink'

namespace :db do
  namespace :production do
    desc "Pull Production Database"
    task :pull, :roles => :db do
      require "yaml"
      get "#{shared_path}/sites/default/database.yml", "/tmp/database.yml"
      db_settings = YAML.load_file("/tmp/database.yml")
      database = db_settings["production"]["database"]      
      username = db_settings["production"]["username"]
      password = db_settings["production"]["password"]
      host = db_settings["production"]["host"]
    
      filename = "#{database}-#{Time.now.strftime '%Y%m%d%H%M%S'}.dump"

      on_rollback { 
        run "rm /tmp/#{filename}"
        run "rm /tmp/#{filename}.gz"
        run "rm /tmp/database.yml"
      }
      
      run "mysqldump -u#{username} -p'#{password}' -h#{host} #{database} > /tmp/#{filename}"
      run "gzip /tmp/#{filename}"
      get "/tmp/#{filename}.gz", "/tmp/#{filename}.gz"
      run "rm /tmp/#{filename}.gz"

      system "gunzip /tmp/#{filename}.gz"
      system "mysqladmin -f -uroot drop #{application}_development"
      system "mysqladmin -f -uroot create #{application}_development"
      system "mysql -uroot #{application}_development < /tmp/#{filename}"
      system "rm /tmp/#{filename}"
      system "rm /tmp/database.yml"      
    end
  end
end