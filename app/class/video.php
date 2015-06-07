<?php
namespace App;

/**
 * Vidéo
 * La classe vidéo et l'élément principal de ce package,
 * elle permet de récupérer toute les informations
 * sur une video dont l'id seras passé en paramètre.
 *
 * @package    App
 * @author     Louis-Etienne Leuilliot <louis-etienne@leuilliot.fr>
 */
class Video
{
	/**
	 * Id unique de la vidéo
	 *
	 * @var string $id
	 */
	private $id;

	/**
	 * Clef Api youtube
	 *
	 * La clef permettra l'accès aux données de la vidéo.
	 *
	 * @var string $apiKey
	 */
	private $apiKey;

	/**
	 * Url de la vidéo
	 *
	 * @var string $urlVideo
	 */
	private $urlVideo;

	/**
	 * Provider de la video
	 *
	 * @var string $provider
	 */
	private $provider;

	/**
	 * Object Json information vidéo
	 *
	 * @var object $jsonObject
	 */
	private $jsonObject;

	/**
	 * Array contenant les thumbnails de la vidéo
	 *
	 * @var array() $thumbnails
	 */
	private $thumbnails;

	/**
	* Nom de la vidéo
	*
	* @var string $name
	*/
	private $name;

	/**
	 * Auteur de la vidéo
	 *
	 * @var string $author
	 */
	private $author;

	/**
	 * Description de la vidéo
	 *
	 * @var string $description
	 */
	private $description;

	/**
	 * Nombre de vues de la vidéo 
	 * 
	 * @var int $nbVues
	 */
	private $nbVues;

	/**
	 * Nombre de Like sur la vidéo
	 * 
	 * @var int $nbLikes
	 */
	private $nbLike;

	/**
	 * Nombre de Dislike sur la vidéo
	 * 
	 * @var int $nbDisLikes
	 */
	private $nbDisLike;

	/**
	 * Nombre de commentaire sur la vidéo
	 * 
	 * @var int $nbComment
	 */
	private $nbComment;

	/**
	 * Durée de la vidéoau format iso-8601
	 * 
	 * @var string $duree
	 */
	private $duree;

	/**
	 * Permet d'ajouter une valeur à l'attribut $duree
	 * 
	 * @param string $value valeur de la durée
	 */
	private function setDuree($value)
	{
		$this->duree = $value;
	}

	/**
	 * Permet de récupérer la valeur de l'attribut $duree
	 * 
	 * @return string $duree valeur de la durée
	 */
	public function getDuree(){
		return $this->duree;
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut $nbComment
	 * 
	 * @param int $value valeur du nombre de commentaire
	 */
	private function setNbComment($value){
		$this->nbComment = $value;
	}

	/**
	 * Permet de récupérer la valeur de $nbComment
	 * 
	 * @return int $nbComment valeur du nombre des commentaires
	 */
	public function getNbComment(){
		return $this->nbComment;
	}

	private setNbLike($value){
		$this->nbLike = $value;
	}

	public function getNbLike(){
		return $this->nbLike;
	}

	private function setNbDislike($value){
		$this->nbDisLike = $value;
	}

	public function getNbDislike(){
		return $this->nbDisLike; 
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut id
	 *
	 * @param string $value valeur de id
	 */
	private function setId($value){
		$this->id = $value;
	}

	/**
	 * Permet de récupérer la valeur de l'attribut id
	 *
	 * @return string $id valeur de id
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut apiKey
	 *
	 * @param string $value valeur de apiKey
	 */
	private function setApiKey($value){
		$this->apiKey = $value;
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut urlVIdeo
	 *
	 * @param string $value valeur de l'url video
	 */
	private function setUrlVideo($value){
		$this->urlVideo = $value;
	}

	/**
	 * Permet de récupérer la valeur de l'attribut urlVideo
	 *
	 * @return string $urlVideo valeur de l'url video
	 */
	public function getUrlVideo(){
		return $this->urlVideo;
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut provider
	 *
	 * @param string $value valeur du provider
	 */
	private function setProvider($value){
		$this->provider = $value;
	}

	/**
	 * Permet de récupérer la valeur de l'attribut provider
	 *
	 * @return string $provider
	 */
	public function getProvider(){
		return $this->provider;
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut name
	 *
	 * @param string $value valeur de name
	 */
	private function setName($value){
		$this->name = $value;
	}

	/**
	 * Permet de récupérer la valeur de l'attribut name
	 *
	 *@return string $name valeur de name
	 */
	public function getName(){
		return $this->name;
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut author
	 *
	 * @param string $value valeur de author
	 */
	private function setAuthor($value){
		$this->author = $value;
	}

	/**
	 * Permet de récupérer la valeur de l'attribut author
	 *
	 * @return string $author valeur de author
	 */
	public function getAuthor(){
		return $this->author;
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut description
	 *
	 * @param string $value valeur de description
	 */
	private function setDescription($value){
		$this->description = $value;
	}

	/**
	 * Permet de récupérer la valeur de l'attribut description
	 *
	 *@return string $description valeur de description
	 */
	public function getDescription(){
		return $this->description;
	}

	/**
	 * Constructeur de la classe Video
	 *
	 * Le constructeur vas permettre de récupérer les informations
	 * nécéssaire à l'hydratation de l'objet
	 *
	 * @param string $urlVideo 	valeur de l'url vidéo
	 * @param string $apiKey 	valeur de l'api key
	 */
	public function __construct($urlVideo, $apiKey){
		self::setUrlVideo($urlVideo);
		self::setApiKey($apiKey);

		self::parseUrl($urlVideo);

		self::setJsonObject($this->id, $this->apiKey);
		self::setName($this->jsonObject->{'items'}[0]->{'snippet'}->{'title'});
		self::setAuthor($this->jsonObject->{'items'}[0]->{'snippet'}->{'channelTitle'});
		self::setThumbnails($this->jsonObject);
	}

	/**
	 * Permet de récupérer l'id video et le provider
	 *
	 * @param string $urlVideo valeur de l'url video
	 */
	private function parseUrl($urlVideo){
		$arrUrl		= parse_url($urlVideo);
		$provider 	= str_replace('www.','',$arrUrl['host']);
		parse_str($arrUrl['query'], $dataArgsVideo);
		$id 	    = $dataArgsVideo['v'];

		$this->setId($id);
		$this->setProvider($provider);
	}

	/**
	 * Permet d'ajouter les valeurs aux différentes valeurs de l'attribut Thumbnails
	 *
	 * @param object $jsonObject objet Json regroupant les informations de la vidéo
	 */
	private function setThumbnails($jsonObject){
		$this->thumbnails['default'] = $jsonObject->{'items'}[0]->{'snippet'}->{'thumbnails'}->{'default'}->{'url'};
		$this->thumbnails['medium'] = $jsonObject->{'items'}[0]->{'snippet'}->{'thumbnails'}->{'medium'}->{'url'};
		$this->thumbnails['high'] = $jsonObject->{'items'}[0]->{'snippet'}->{'thumbnails'}->{'high'}->{'url'};
	}

	/**
	 * Permet de récupérer la valeur de $thumbnails
	 *
	 * Cette méthode peut prendre en compte 3 nom différent, "default", "medium", "high"
	 * Correspondant au différentes taille du thumbnails
	 *
	 * @param 	string $value
	 *
	 * @return 	string $thumnails Url de l'image demandé
	 */
	public function getThumbnails($value){
		if($value != "default" && $value != "medium" && $value != "high"){
			return NULL;
		}
		else{
			return $this->thumbnails[$value];
		}
	}

	/**
	 * Permet d'ajouter une valeur à l'attribut $jsonObject
	 *
	 * @param string $id 		valeur de l'id video
	 * @param string $apiKey 	valeur de la clef API
	 */
	private function setJsonObject($id, $apiKey){
		$jsonVideo = @file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=id%2C+snippet&id='.$id.'&key='.$apiKey);
		$this->jsonObject = json_decode($jsonVideo);
	}
}