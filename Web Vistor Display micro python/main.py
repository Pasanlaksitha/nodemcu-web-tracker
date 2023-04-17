
from machine import Pin, SoftI2C
import ssd1306
from time import sleep
import urequests
import json
import framebuf

# ESP8266 Pin assignment
i2c = SoftI2C(scl=Pin(5), sda=Pin(4))
fbuf = framebuf.FrameBuffer(bytearray(8 * 8 * 1), 8, 8, framebuf.MONO_VLSB)

oled_width = 128
oled_height = 64
oled = ssd1306.SSD1306_I2C(oled_width, oled_height, i2c)

def notification():
  oled.text('ON', 0, 0)
  oled.show()
  
response = urequests.get('http:///json/node.php') //request site
print(response.text)

ip = (response.json()['ip'])
agent =(response.json()['agent'])
request_uri = (response.json()['requestUri'])
lat = (response.json()['latitude'])
long_ = (response.json()['longitude'])
country = (response.json()['country'])
region = (response.json()['region'])
city = (response.json()['city'])

display = [ip, request_uri, country, region, city]

for real_time in display:
  oled.text(real_time, 0, 20)
  oled.show()
  time.sleep(2)
  print(real_time)
  





  
  




