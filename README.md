# Chatbot
College Chatbot Using PHP

***** Demo *****

![Screenshot 2025-04-14 114016](https://github.com/user-attachments/assets/795e37c5-5eab-4121-a09e-c3d24b634d41)

![Screenshot 2025-04-14 115724](https://github.com/user-attachments/assets/15b5ea41-a2c9-453d-bbce-204a2f50323c)

![Screenshot 2025-04-14 121301](https://github.com/user-attachments/assets/b497c3cd-5d76-4b01-b9af-6da915eafd8e)

![Screenshot 2025-04-14 121401](https://github.com/user-attachments/assets/28ebdffb-2249-4730-b4a8-ed44e431c0c7)

****** Introduction ******
I have developed an interactive chatbot using PHP that provides information about College. The chatbot is capable of answering various user queries related to the college, such as an overview of the institution, available facilities, and other important details. It includes a question-answer mechanism that enables users to receive quick and accurate responses, improving accessibility and user experience.

****** How it works ******
It takes input from the user through a form, processes the text by removing unnecessary words, arranges keywords in ascending order, and matches the processed query with the database. If a match is found in the 'question' column of the database table, it returns the corresponding response from the 'answer' column. The logic for matching and responding is handled in the message.php file using if-else conditions.

                 
** how to implement it **

** index.php **
so when you start xampp the index.php file loads first
index.php file is an login page You can change it or remove it according to you
for working of it you need to create database 

** bot.php **
This page contain main html file so when user login user will redirected to bot.php file
You can change desing of this page according to you

** message.php **
This page contain main logic of the project 
To start chatbot you need to connect this page to the database
in my project my database name is "nchatbot" you can change it 
so you need to create a database called "nchatbot" in that create
a Table called question which will have 3 colums id,question,answer

In question insert the query that will added in if-else answer variable
In answer insert the answer that you have to display

eg.
elseif($sort=="hi"||$sort=="hi") {
$answer= "xyz";
}

above is your message.php file code
Now in database

question ="xyz"
answer  ="hello there how can i Help you"

like that you have to add questions and answers in database and in message.php file


** Thank You ** 





