import mysql.connector
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="agrocraft"
)

mycursor=mydb.cursor()
