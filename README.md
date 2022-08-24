# OAS
The Orphanage Attendance System

Arduino IDE Dependencies <br>
Install Boards Manager > ESP8266 via https://arduino.esp8266.com/stable/package_esp8266com_index.json
Download and add MFRC522 library via Sketch > Include Library > Add .zip
Install SoftwareSerial library via Sketch > Include Library > Manage Libraries
Install SPI library via Sketch > Include Library > Manage Libraries

Python IDLE Dependencies <br>
pip install serial
pip install pymysql

XAMPP Design <br>
Create database oas_db & import oas_db.sql

Hardware Design <br>
Connect the SDA pin of RFID to Arduino Digital pin 10. 
Similarly Connect 
SCK to D13, 
MOSI to D11, 
MISO to D12, 
GND to GND, 
RST pin to D9 
supply 3.3V power using 3.3V Pins. 
IRQ is not connected

Similarly connect 
Arduino TX, RX pins to ESP8266 D1, D2 Pins (black, red)
Also, supply Power to Node MCU by connecting its VCC and GND Pins.

username: oasdata123@gmail.com
password: oasdata$$321
