
creer un compte sur mailtrap et copier les infos de password et username dans .env de projet laravel


php artisan migrate:refresh  --- mise a jour des migrations--- a taper quand on modifie un file de migration


#creer un modele
php artisan make:model Client -m crée le modele et la migration


#cgi 
php artisan tinker ---- ouvrir le cgi de laravel


#get all
User::all()->pluck('name') --- renvoie tous les noms


#mail 
php artisan make:mail ContactMail --markdown="mails.contact-form 
crée un gestionnaire de mail et un template contact-form dans mes vues pour les mails


#route list
php artisan route:list ---liste toutes nos routes


#supprime les tables
php artisan migrate:fresh --- vide toutes les tables


#gerer le mail 


#middleware
php artisan make:middleware nomMiddleware 
ensuite ajouter App\Http\Middleware\TestMiddleware::class dans array routesMiddleware
ainsi on peut appeler notre middleware dans n'importe quel controleur


#event et ecouteurs d'event
php artisan make:event nomEvent

#listener ecouteur d'event
 php artisan make:listener UserRegistered
 lier les deux dans Provider/EventServiceProvider


#file d'attente
envoie de certaines actions dans une queue
php artisan queue:table  *** cree une table pour la file d'attente
php artisan migrate **** cree les tables
dans env ---queue connection=database
//met les actions longues dans une queue et execute les sans faire trop attendre l'appli
ex -- de facon asynchrone


#factories --- genere directement une instance Entreprise
php artisan make:factory EntrepriseFactory -m Entreprise
dans tinker factory(App\Entreprise)->create() 


#seeders --- php artisan make:seed Entreprise
lancer de facon automatique les factory
et appeler la seed table concerné dans databaseSeeder
php artisan db:seed --- lance les seeders


#ajout d'une colonne a une table
php artisan make:migration add_image_to_clients (tous les vars cree dans ce fichier de migration sont dans la table clients)
php artisan migrate 

# ajout de lien au dossier public(acces public) et storage(acces prive)
ex pour les images
php artisan storage:link

# comme les guards en angular
les policy qui a acces a tels routes
php artisan make:policy ClientPolicy -m Client --- cree une policy pour le Client




