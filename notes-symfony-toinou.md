 - list all routes in APP
 php bin/console debug:router
 
 composer require --dev symfony/maker-bundle
 
 - route list :
 php bin/console debug:router
 
 - more info by routes : 
  php bin/console debug:router app_lucky_number
  ou tester une route
  php bin/console router:match /lucky/number/8
  
  - php bin/console make:migration
  pour creer un fichier de migration de la BDD 
  
  - php bin/console doctrine:migrations:migrate -> pour l'appliquer (différentiel, le fichier généra ne contient que les nv ajouts par rapport à la version précédente)

 ## Twig
  {{ var }} : sert a afficher la valeur d'une var (comme angular
 # Exemple de Foreach 
  {% if users %}
    <ul>
        {% for user in users %}
            <li>{{ user.username|e }}</li>
        {% endfor %}
    </ul>
{% endif %})

#Exemple de If
{% if online == false %}
    <p>Our website is in maintenance mode. Please, come back later.</p>
{% endif %}

## Commentaires
raccourci CTRL + / ou alors {# ............. #}

## Les Filtres
{{ 'welcome' | upper }}
lower, date, date_modify
https://twig.symfony.com/doc/2.x/filters/index.html

## Routes 
# regex routes
* @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
on peut spécifier une regex dans la route

#Multi routes 
On peut avoir plusieurs routes pour un endpoint
/**
     * @Route("/hello/{name}/age/{age}", name="hello_with_name")
     * @Route("/hello/{name}/{age}", name="hello_with_name")

## Creation BDD avec CLI 
#  php bin/console doctrine:database:create (voir nom bdd dans .env)

## Entity
php bin/console make:entity

## Migration 
php bin/console make:migration -> creer le fichier de migration qu'il faura lancer (voir ligne suivante)
php bin/console doctrine:migrations:migrate -> prend tout les fichiers de migration non exécutes et fait les migrations

## Fake BDD
composer require orm-fixtures --dev

Aller dans /src/DataFixtures/AppFixtures et compléter la class AppFixtures
Pour lancer le traitement pour remplir les data faire la commande suivante 
php bin/console doctrine:fixtures:load

# doctrine
FindOneByChamp => renvoie un objet
FindByChamp => renvoie un tableau d'objet

## Faker
# composer require fzaninotto/faker
voir fichier DataFixtures\AppFixtures

## Slugify
composer require cocur/slugify

## path() with params
#{{path('ads_show',{'slug':ad.slug})}}
# route en question * @Route("/show/{slug}", name="ads_show")

# Variables twig par ex pour remplacer {{path('ads_show',{'slug':ad.slug})}}

## ParamConverter
# sert à convertir un paramètre d'une route en entité 
#public function show($slug, Adrepostirory $repo)
    {
        $repo = $adrepo->findOneBySlug($slug);
        return $this->render('ad/show.html.twig', [
            'controller_name' => 'AdController',
            'ad' => $ad,
        ]);

        équivaut à

#public function show($slug, Ad $ad)
    {
    // $repo = $adrepo->findOneBySlug($slug);
    return $this->render('ad/show.html.twig', [
        'controller_name' => 'AdController',
        'ad' => $ad,
    ]);

ou à

#public function show(Ad $ad)
    {
    return $this->render('ad/show.html.twig', [
        'controller_name' => 'AdController',
        'ad' => $ad,
    ]);

## FORMS 
#Cli php bin/console make:form
https://symfony.com/doc/4.4/reference/forms/types/submit.html

{# {{ form(form) }} #}
équivaut à 
{{ form_start(form) }}
{{ form_widget(form.title) }} 
<button type="submit" class="btn btn-primary">Créer la nouvelle annonce</button>
{{ form_end(form) }}

#Afficher un champ spécifique 
{{ form_widget(form.title) }} ou 
{{ form_row(form.title) }}
#Afficher le label d'un input du form
{{ form_label(form.title) }}

##{{form_row(form)}} =  
{{form_label(form)}}
{{form_errors(form)}}
{{form_widget(form)}}
{{form_help(form)}}

##FORM ENTRY COLLECTION
# Définit chaque entry/élément du sous formulaire ad_images (ImageType) (voir fichier new.html.twig)
{% block _ad_images_entry_widget %}
	<div class="form-group">
		<div class="row">
			<div class="col">
				{{ form_widget(form.url) }}
			</div>
			<div class="col">
				{{ form_widget(form.caption) }}
			</div>
		</div> 
	</div>
{% endblock %}


## FLASH
#$this->addFlash(
                'success',
                "L'annonce <strong>{ad.getTitle()} a bien été ajoutée"
            );

## Controle de saisie des forms
# Allez dans l'entity et rajouer les annotations suviantes
 /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=20, max=255, minMessage="Votre introduction doit faire plus de 20 caractères" )
     */
    private $introduction;
    (ne pas oublier l'import ctrl + alt +i ou clic droit import class)

#Champ unique (rajouter annotation début classe)
/**
 * @ORM\Entity(repositoryClass=AdRepository::class)
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity(
 *  fields={"title"},
 *  message="Une autre annnonce possède déjà ce titre, merci de le modifier"
 * )
 */
class Ad
