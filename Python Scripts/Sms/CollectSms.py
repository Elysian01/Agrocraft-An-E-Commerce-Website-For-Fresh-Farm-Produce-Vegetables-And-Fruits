import mysql.connector
from firebase import firebase

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="agrocraft"
)

mycursor = mydb.cursor()

firebase = firebase.FirebaseApplication("https://farmer-order.firebaseio.com/",None)



results = firebase.get('/','')

for key,value in results.items():
    attributes = value
    print(key)
    phone = key
    password = attributes.get('password','Not_Found')
    print(password)
    prod_title = attributes.get('product title', 'Not_Found')

    prod_cat = attributes.get('product category','Not_Found')
    prod_type = attributes.get('product type','Not_Found')
    print(prod_type)
    stock = attributes.get('Stock', 'Not_Found')
    price = attributes.get('price', 'Not_Found')
    prod_key = attributes.get('product key', 'Not_Found')
    delivery = attributes.get('Delivery', 'Not_Found')

    Security_check = 'select farmer_id from farmerregistration where farmer_password = "{}" and farmer_phone = {}'.format(password,phone)

    rows = mycursor.execute(Security_check)

    myresult = mycursor.fetchall()
    # print(myresult)
    count = 0
    for x in myresult:
        count += 1
        for a in x:
          farmer_fk = a
    print(count)

    if mycursor.rowcount == 1 :
        query = 'insert into products (farmer_fk,product_title,product_cat,product_type,product_stock,product_price,product_keywords,product_delivery)' \
                    ' values ({},"{}","{}","{}",{},{},"{}","{}")'.format(farmer_fk,prod_title, prod_cat,prod_type, stock, price, prod_key, delivery)
    
        mycursor.execute(query)
        mydb.commit()
    
        firebase.delete('/', key)
    else :
        pass

