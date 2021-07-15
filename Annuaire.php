<?php
class Annuaire{
    private $nom;
    private $prenom;
    private $tel;
    private $email;
    private $pays;
    private $id;
    private $db ;
    
  
    public function __construct(int $id=null)
    {
       $this->db = new PDO(
            'mysql:host=localhost;dbname=annuaire',
            'root',
            ''
        );
        if ($id) {
           $this->initAnuaire($id);
        }
    }
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    private function initAnuaire($id){
        $sql ="SELECT * FROM `annuaire` WHERE id=".$id;
        $stm = $this->db->query($sql);
        $rs = $stm->fetch();
        $this->setNom($rs['nom']);
        $this->setPrenom($rs['prenom']);
        $this->setTel($rs['tel']);
        $this->setEmail($rs['email']);
        $this->setPays($rs['pays']);
        $this->setId($id);
    }
    public function update(){

        $sql ="UPDATE annuaire SET nom='".$this->getNom()."',prenom='".$this->getPrenom()."',tel=".$this->getTel().",email='".$this->getEmail()."',pays='".$this->getPays()."' WHERE id=".$this->getId();
        $this->db->exec($sql);
        var_dump($sql);
        //var_dump($this->db->errorInfo());

    }
    public function add(){
        $sql = "INSERT INTO `annuaire`(`nom`, `prenom`, `tel`, `email`, `pays`) VALUES ('".$this->getNom()."','".$this->getPrenom()."',".$this->getTel().",'".$this->getEmail()."','".$this->getPays()."')";
       return $this->db->exec($sql);

    }
    public function delete($id=null){
        if ($id) {
            # code...
        return $this->db->exec("DELETE FROM `annuaire` WHERE id=$id");

        }
       return  $this->db->exec("DELETE FROM `annuaire` WHERE id=".$this->getId());
    }
}