import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="ezekiel",
  password="3VpNd2BEnhkVrHd5DYh",
  database="classicmodels"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM orders LIMIT 10")

myresult = mycursor.fetchall()
print("Showing the orders from the RDBMS\n")

for x in myresult:
  print(x)



import pymongo

myclient = pymongo.MongoClient("mongodb://kairos:T8AuMw1ak4LBp9enDUZK@localhost:27017/")
mydb = myclient["mongo"]
mycol = mydb["samples_pokemon"]

print("Exporting pokemon from NoSQL\n")

x = mycol.find({"id": {"$gt": 130}}, {"name":1,"height":1,"weight":1})
for i in x:
  print(i)