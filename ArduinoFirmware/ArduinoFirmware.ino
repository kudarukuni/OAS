#include <SPI.h>
#include <MFRC522.h>
#define SS_PIN 10
#define RST_PIN 9

MFRC522 mfrc522(SS_PIN, RST_PIN);

void setup(){
  Serial.begin(9600);
  SPI.begin();
  mfrc522.PCD_Init();
}

void loop(){
  if( ! mfrc522.PICC_IsNewCardPresent() ){
    return;
  }
  if( ! mfrc522.PICC_ReadCardSerial() ){
    return;
  }
  String content= "";
  byte letter;
  for(byte i = 0; i < mfrc522.uid.size; i++){
     content.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " "));
     content.concat(String(mfrc522.uid.uidByte[i], HEX));
  }
  
  content.toUpperCase();
  
  if(content.substring(1) == "C6 00 51 2B " ){
    Serial.println("Thandolwenkosi Munenge");    
    delay(3000);
  }
  if(content.substring(1) ==  "99 7D 80 C1 " ){
    Serial.println("Elon Musk");   
    delay(3000);
  }
}
