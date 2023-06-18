## Note Manager 
![Screencast](https://renttouch.com/webable/note_manager.PNG)

## API
|           | EndPoint               | Description            |
| --------- | ---------------------  | ---------------------- |
| List      | GET /api/notes         |  Get all the notes     |     
| Get       | GET /api/notes/[id]    |  Get one note          |
| Add       | POST /api/notes        |  Create one note       |
| Edit      | PUT /api/notes/[id]    |  Update one note       |
| Delete    | DELETE/api/notes/[id]  |  Delete one note       |

API BASE URL
```sh
https://demo1.renttouch.com/
```

## Installation
1. First, clone/download the repository and navigate to root directory.
2. Run the following command 
    ```CMD or Terminal
    composer install
    ```
3. Copy .env file to the root folder and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

4. Run the development server:
    ```bash
    php artisan key:generate
    # then
    php artisan migrate
    # then
    php artisan serve
    ```
    Open [http://localhost:8000](http://localhost:8000) with your browser to see the result or Verify the deployment by navigating to your server address. 
    ```sh
    127.0.0.1:8000
    ```
