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

	private $jsonObject;

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
	 * @param string $urlVideo valeur de l'url vidéo
	 * @param string $apiKey valeur de l'api key
	 */
	public function __construct($urlVideo, $apiKey){
		self::setUrlVideo($urlVideo);
		self::setApiKey($apiKey);

		self::parseUrl($urlVideo);

		self::setJsonObject($this->id, $this->apiKey);
		self::setName($this->jsonObject->{'items'}[0]->{'snippet'}->{'title'});
		self::setAuthor($this->jsonObject->{'items'}[0]->{'snippet'}->{'channelTitle'});
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


	public function setJsonObject($id, $apiKey){

		$jsonVideo = @file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=id%2C+snippet&id='.$id.'&key='.$apiKey);


			$this->jsonObject = json_decode($jsonVideo);



	}

	public function getJsonObject(){
		return $this->jsonObject;
	}
}