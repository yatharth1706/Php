## Php Practice

[Php Documentation](https://www.php.net/manual/en/index.php "Documentation of Php")

### Tasks to Do:
- [x] Basics like (Variables, echo, if else, loops etc)
- [x] Arrays and Associative Arrays
- [x] Get and Post Methods
- [x] Include and Require functions
- [x] Sessions
- [x] Cookies
- [x] Connecting MySql
- [x] CRUD operations
- [ ] File system (Read,write,open)
- [ ] File downloads
- [ ] File uploads
- [ ] Sending mails
- [x] Insert, Update, Delete and Retrieving data through forms


### Steps to set up MySql

1. Switch on mysql from Xampp control panel
2. Open localhost/phpmyadmin
3. Create Database
4. Options to communicate with database first one is SQLi , and another one is PDO
5. First make user account and give all priviliges to that account from phpmyadmin
6. In php file write
 
		$conn = mysqli_connect('localhost','<user_name>','password','<database_name>'); 

7. Check connection


		if(!$conn){
			echo "Connection Error: " . mysqli_connect_error();
		}

8. Now you can run mysqli queries to insert, delete, update , basically you can perform all crud operations
