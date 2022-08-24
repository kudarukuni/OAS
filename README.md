# OAS
<h3><b>The Orphanage Attendance System</b></h3>

<font color = "#42b3f5"><b>Arduino IDE Dependencies</b></font> <br>
Install Boards Manager > ESP8266 via https://arduino.esp8266.com/stable/package_esp8266com_index.json
Download and add MFRC522 library via Sketch > Include Library > Add .zip
Install SoftwareSerial library via Sketch > Include Library > Manage Libraries
Install SPI library via Sketch > Include Library > Manage Libraries

<font color = "#ffeb74"><b>Python IDLE Dependencies</b></font> <br>
pip install serial
pip install pymysql

<font color = "#fb7a24"><b>XAMPP Design</b></font> <br>
Create database oas_db & import oas_db.sql

<font color = "black"><b>Hardware Design</b></font> <br>
Connect: RFID to Arduino <br>  
<ol>
  <li>SDA to D10</li>
  <li>SCK to D13,</li> 
  <li>MOSI to D11,</li> 
  <li>MISO to D12,</li> 
  <li>GND to GND,</li> 
  <li>RST pin to D9,</li> 
  <li>supply 3.3V power using 3.3V Pins,</li> 
  <ul>
    <li>IRQ is not connected.</li>
  </ul>
</ol>

<font color = "royalgrey"><b>Similarly connect</b></font> <br>
Arduino TX, RX pins to ESP8266 D1, D2 Pins.
Also, supply Power to Node MCU by connecting its VCC and GND Pins.

username: <i><u>oasdata123@gmail.com<u></i> <br>
password: <i>oasdata$$321</i>
