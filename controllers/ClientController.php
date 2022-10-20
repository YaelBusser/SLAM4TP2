<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use models\ProduitsModele;
use utils\Template;

class ClientController extends WebController
{
    private ClientsModele $clients;
    public function __construct(){
        $this->clients = new ClientsModele();
        $this->produits = new ProduitsModele();
    }
    public function liste($idpage, $search=""){
        if($idpage <= 0){
            $idpage = 0;
        }
        if(empty($_GET["search"])){
            $lesClients = $this->clients->liste(10, $idpage);
        }else{
            $lesClients = $this->clients->recherche($search, 10, $idpage);
        }
        return Template::render("views/clients/liste.php", array("lesClients" => $lesClients, "idpage" => $idpage, "search" => $search));
    }
    public function info(int $clientId){
        $info = $this->clients->getByClientId($clientId);
        $produits = $this->produits->lesProduitsClient($clientId);
        return Template::render("views/clients/info.php", array("infosClient" => $info, "produitsClient" => $produits));
    }
}