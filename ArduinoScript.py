import serial
import pymysql
import time

connection = pymysql.connect(host="localhost", user="root", passwd="", database="oas_db")
cursor = connection.cursor()

ser = serial.Serial('COM6', 9600)
time.sleep(2)

data = []
for i in range(50):
    b = ser.readline()
    string_n = b.decode()  
    string = string_n.rstrip()
    print(string)
    data.append(string)

    sql = 'INSERT INTO inmates(inmate, date, time) VALUES(%s, now(), now())'
    
    cursor.execute(sql, b)
    connection.commit()

    time.sleep(0.1)

ser.close()

for line in data:
    print(line)
