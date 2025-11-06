## Preview 

| **Home at start** |**Add task**|
| :---: | :---: |
|<img width="1911" height="1013" alt="Screenshot 2025-11-06 200728" src="https://github.com/user-attachments/assets/fe4561ce-cef6-4714-961e-8fa6bc8e5ef5" />|<img width="1906" height="996" alt="Screenshot 2025-11-06 200748" src="https://github.com/user-attachments/assets/3e510568-6cd9-4e97-b00f-b8b1633fb07f" />|

| **Edit task** |**Add Multiple tasks**|
| :---: | :---: |
|<img width="1915" height="1007" alt="Screenshot 2025-11-06 200835" src="https://github.com/user-attachments/assets/3d851b01-93e3-4a10-8b73-26cf01541815" />|<img width="1903" height="951" alt="Screenshot 2025-11-06 200952" src="https://github.com/user-attachments/assets/fec69d56-69dd-4df4-b18b-a2f758ba5ed3" />|

## Installation
-> Here i use xampp.

**For Windows**

1. Install xampp on your machine.
2. Download files of folder Todo list  and extract.
3. Place this folder in `Drive:\xampp\htdocs\`
4. Open xampp control panel and start services apache and mysql.
5. Through xampp control panel open phpmyadmin using admin button of mysql.
6. Now, create a database `college` .
7. In this database create a table named `tasks` structure:
8. ```
    -name of columns-    -tyeps , size and constraint-
   
    sr.                  int auto increment primary
    title                varchar(70)
    discription          varchar(500)
    timestamp            datetime [default value = current date and time]
   ```
9. open browser and search on web address `localhost/Todo list`.
10. Remember that the services must be run.
