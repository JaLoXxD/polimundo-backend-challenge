# Back-End Challenge (Laravel)

This project uses laravel and sail to create a project with docker

## Steps to run it in docker

<p>If you are using Linux remember use sudo before any command</p>

- First, clone the repository.
```
git clone https://github.com/JaLoXxD/polimundo-backend-challenge
```
- After that, run docker.
- Go to the project root folder (polimundo-backend-challenge).

  ![image](https://user-images.githubusercontent.com/65001908/177014886-36c63b8b-539c-4f1a-b459-1db4726e0bf9.png)
- Exec this command: 
 ```
docker run --rm --interactive --tty -v $(pwd):/app composer install
 ```
- Then, exec this command (this will take a while):
```
./vendor/bin/sail up
```
- Open in the web browser the next url: http://localhost/.
- If you are using linux probably you will have this error:

  ![image](https://user-images.githubusercontent.com/65001908/177015044-76734f13-3f72-45cc-9057-ceb9fcc1a89b.png)

- To solve this run this commands:
```
sudo chmod o+w ./storage/ -R
sudo chmod -R 775 storage bootstrap/cache
```
- After that, make the migrations
```
./vendor/bin/sail artisan migrate
```
- Then, open again in the web browser the next url: http://localhost/.
- If you don't see any error, go to http://localhost/products and then to http://localhost/employees .
- If you see a response with a empty array please run the seeders.

   ![image](https://user-images.githubusercontent.com/65001908/177015233-0933961d-5e8f-46dd-a71d-b15ca10a8d48.png)

```
./vendor/bin/sail artisan db:seed --class=UseProducts
./vendor/bin/sail artisan db:seed --class=UseEmployee
```
-You can also try the following urls http://localhost/employees/{id} , http://localhost/employees/{id} replacing the id field with any of the ids of the data.
## Results

### Products Routes

![image](https://user-images.githubusercontent.com/65001908/177015384-be5da9e3-e4fe-49e7-bf23-3b0075409678.png)
![image](https://user-images.githubusercontent.com/65001908/177015389-1ff52099-b7aa-49e9-9a90-3e60521ff964.png)

### Employees routes

![image](https://user-images.githubusercontent.com/65001908/177015396-e33f1a41-979d-44f3-83d8-79fdadc7222f.png)
![image](https://user-images.githubusercontent.com/65001908/177015406-bd7f5777-b8d0-4844-a2c8-104a779ea74a.png)

