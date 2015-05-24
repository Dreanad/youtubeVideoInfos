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
	 * @param string $idVideo valeur de l'id vidéo
	 * 
	 */
	public function __construct($idVideo){

		echo "string";



	}
}