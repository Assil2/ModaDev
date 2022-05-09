<?PHP
	class Utilisateur{
		private  $id = null;
		private  $username = null;
		private  $email = null;
		private  $numero = null;
		private $adresse = null;
		private  $password = null;
		function __construct(string $username, string $email,string $adresse ,int $numero ,string $password){
			
			$this->username=$username;
			$this->email=$email;
			$this->adresse=$adresse;
			$this->numero=$numero;
			$this->password=$password;

		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->username;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}
		function getAdresse(): string{
			return $this->adresse;
		}
		function getNumero(): int{
			return $this->numero;
		}
		function setNom(string $username): void{
			$this->username=$username;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
		function setAdresse(string $adresse): void{
			$this->adresse=$adresse;
		}
		function setNumero(int $numero): void{
			$this->numero=$numero;
		}
	}
?>