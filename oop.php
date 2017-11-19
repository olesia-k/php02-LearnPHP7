<? require_once("head.php"); 


	// сlass ShoppingCard { // Класс наполняется свойствами и методами. 

	// }

	// $product1 = new ShoppingCard(); // создать объект (переменную, т.е. экземпляр класс) через оператор new 
	// $product2 = new ShoppingCard();
	// $product3 = new ShoppingCard();
	// var_dump($product1 instanceof ShoppingCard);
	// var_dump($product2 instanceof Card);
	// var_dump($product3);
	

	// class Shop {
	// 	Private $name;
	// 	public function naming () {
	// 		$this -> name = "Addidas";
	// 		echo $this -> name;
	// 	}
	// }
	// $product = new Shop;
	// // $product -> naming(); // Выведет Addidas
	// $product -> name = "Nike"; // Выведет ошибку, т.к. переменная name не существует за пределами класса. 



	// class User {
	// 	public $name = "Имя"; // Создать переменную/свойство с публичной областью видимости и значением по умолчанию Имя. 
	// 	public $pass  = "Пароль";
	// 	public $email  = "Email";
	// 	public $city  = "Город";

	// 	// public function Hello() { // Создать метод
	// 	// 	echo "Hello {$this->name  }";
	// 	// }

	// 	function getInfo() { // Область видимости public не прописывается, т.к. присваивается автоматически
	// 		return "{$this -> name}"."{$this -> surname}";
	// 	}
	// }

	// $admin = new User();
	// $admin -> name = "Алексей";	
	// $admin -> surname = "Иванов";	
	// echo "Пользователь: {$admin -> getinfo()}";





	// $admin = new User();  // Создать экземпляр класса $admin
	// $user1 = new User();
	
	// $admin -> name = "Алексей"; // Присвоить свойству name значение Алексей
	// $user1 -> name = "Андрей";

	// echo $admin -> name; // Вывести на экран свойство name админа
	// echo $admin -> name; 




// ============= Метод конструктора =============

	// class User {
	// 	public $name; // Значения по умолчанию можно прописать, но они не нужны.  
	// 	public $pass;
	// 	public $email;
	// 	public $city;

	// 	function __construct($name, $pass, $email, $city) { // Испольузется двойное подчеркивание
	// 		$this -> name = $name; // Обратиться с помощью $this к свойству name и присвоить ему значение переменной $name.
	// 		$this -> pass = $pass;
	// 		$this -> email = $email;
	// 		$this -> city = $city;
	// 	}

	// 	function getInfo() {
	// 		return "{$this -> name}"."{$this -> pass}"."{$this -> email}"."{$this -> city}";
	// 	}
	// }

	// $user1 = new User("Алексей", 12345, "alexsey@gmail.ru", "Minsk");
	// // var_dump($user1); // Вывести на экран все содержимое объекта
	// echo $user1 -> getInfo(); // Вывести на экран значения всех свойств $user1




// ============= Метод деструктора =============

	class DestrctableClass {
		function __construct () {
			print "Конструктор существует";
			$this -> name = "DestrctableClass";
		}

		function __destruct () {
			print "Конструктор уничтожен". $this -> name;			
		}

	}

	$obj = new DestrctableClass;







?>
<? require_once("footer.php"); ?>



















