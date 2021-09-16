
#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>

const char* wifiName = "ISL-PC 5440";
const char* wifiPass = "ISL123456";

//Web Server address to read/write from 
const char *host = "http://ceylonleaks.ml/json.php";

void setup() {
  
  Serial.begin(115200);
  delay(10);
  Serial.println();
  
  Serial.print("Connecting to ");
  Serial.println(wifiName);

  WiFi.begin(wifiName, wifiPass);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());   //You can get IP address assigned to ESP
}

void loop() {
  
}
  const size_t capacity = JSON_OBJECT_SIZE(8) + 230;
DynamicJsonBuffer jsonBuffer(capacity);

const char* json = "{\"ip\":\"54.203.73.198\",\"agent\":\"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:82.0) Gecko/20100101 Firefox/82.0\",\"requestUri\":\"/\",\"latitude\":\"45.8491\",\"longitude\":\"-119.7143\",\"country\":\"United States\",\"region\":\"Oregon\",\"city\":\"Boardman\"}";

JsonObject& root = jsonBuffer.parseObject(json);

const char* ip = root["ip"]; // "54.203.73.198"
const char* agent = root["agent"]; // "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:82.0) Gecko/20100101 Firefox/82.0"
const char* requestUri = root["requestUri"]; // "/"
const char* latitude = root["latitude"]; // "45.8491"
const char* longitude = root["longitude"]; // "-119.7143"
const char* country = root["country"]; // "United States"
const char* region = root["region"]; // "Oregon"
const char* city = root["city"]; // "Boardman"
