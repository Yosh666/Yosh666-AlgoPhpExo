<?php
/**
 * classe abstraite d'accés aux données de la BDD vava
 * @property static $bdd instance de pdo lorsque qu'on se connecte
 * @method static connect() connexion a la bdd
 * @method static insert()
 * @method static select()
 */

abstract class DAO{
    
    
    private static $host = 'mysql:host=localhost;port=3306';
    private static $dbname= 'vava';
    private static $dbuser='root';
    private static $dbpass= '';

    private static $bdd;

    /**
     * Cette methode permet de créer l'unique instance PDO de l'application
     * 
     */
    public static function connect(){

        self::$bdd= new \PDO( //l'anteslash est un protocole pr éviter les bugs (namespace tout ça)
            //a faire aussi sur \DateTime

            self::$host.'dbname='.self::$dbname,
            self::$dbuser,
            self::$dbpass,
            array(// il s'agit des options du PDO  les message d'erreur le langage tout ça
                //a toujours mettre en place quand on fait un PDO
                PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'",
                PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,//ecris des message d'erreur détaillés
                PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC//retourne une seule valeur par colonne
            )
        );
    }

    /**
     * cette méthode sert a préparer et faire  l'injection dans la base de données  avec message d'erreur 
     * @param $sql  voir fonction add() dans Manager
     * @return result 
     * @return echo message en cas d'erreur
     */
    public static function insert($sql){
        try{//permet de récupérer les messages en cas d'erreur
           
            $statement= self:: $bdd->prepare($sql);
            $statement->execute();

            $statement->closeCursor();
            return $result;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Cette méthode permet les requêtes de type SELECT
     * 
     * @param string $sql la chaine de caractère contenant la requête elle-même
     * @param mixed $params=null les paramètres de la requête
     * @param bool $multiple=true vrai si le résultat est composé de plusieurs enregistrements (défaut), false si un seul résultat doit être récupéré
     * 
     * @return array|null les enregistrements en FETCH_ASSOC ou null si aucun résultat
     */

    public static function select($sql, $params = null, bool $multiple = true):?array
    {
        try{
            $stmt = self::$bdd->prepare($sql);
            $stmt->execute($params);
            if($multiple){
                $results = $stmt->fetchAll();
                if(count($results) == 1){
                    $results = $results[0];
                }
            }
            else $results = $stmt->fetch();
            $stmt->closeCursor();
            return ($results == false) ? null : $results;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }






}