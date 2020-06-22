import requests
import mysql.connector
from firebase import firebase

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="agrocraft"
)

mycursor = mydb.cursor()

firebase = firebase.FirebaseApplication("https://otp-sender-d3dbe.firebaseio.com/")

data = {
    'Phone':9821476621
}

result = firebase.put('/',8169193145,{'OTP':12345})


print(result)
# results = firebase.get('/','')