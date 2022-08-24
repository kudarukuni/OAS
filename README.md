# OAS
<h3><b>The Orphanage Attendance System</b></h3>

<font color = `#42b3f5`><b>Arduino IDE Dependencies</b></font> <br>
Install Boards Manager > ESP8266 via https://arduino.esp8266.com/stable/package_esp8266com_index.json<br>
Download and add MFRC522 library via Sketch > Include Library > Add .zip<br>
Install SoftwareSerial library via Sketch > Include Library > Manage Libraries<br>
Install SPI library via Sketch > Include Library > Manage Libraries<br>

<font color = `#ffeb74`><b>Python IDLE Dependencies</b></font> <br>
pip install serial<br>
pip install pymysql<br>

<font color = `#fb7a24`><b>XAMPP Design</b></font> <br>
Create database oas_db & import oas_db.sql<br>

<font color = `black`><b>Hardware Design</b></font> <br>
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

<font color = `gold`><b>Similarly connect</b></font> <br>
Arduino TX, RX pins to ESP8266 D1, D2 Pins.<br>
Also, supply Power to Node MCU by connecting its VCC and GND Pins.<br>

username: <i><u>oasdata123@gmail.com<u></i> <br>
password: <i>oasdata$$321</i><br>
