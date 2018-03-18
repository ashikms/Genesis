unsigned long t,t1,t2; //time variable
int x = 0;
double power;
double tf;
void setup() {
  // put your setup code here, to run once:
Serial.begin(9600); //initalizing serial communication
pinMode(7,OUTPUT);
x = 0;
}

void loop() {
  // put your main code here, to run repeatedly:
  if(analogRead(0) >0)
  {
if(x==0)
{
  t1 = millis();
  delay(100);
  //Serial.println(t1);
  t2 = 0;
  x = 9;
  }
if(x==1)
{
t2 = millis();
delay(100);
//Serial.println(t2);
x = 3;
}
if(x==3)
{
    t = t2-t1;
    tf = t/1000;
    power = 3600/(3200*tf);
    if(power>0.1)
    digitalWrite(7,HIGH);
    Serial.println(power,6);
    x = 0;
}
if(x==9)
{
 x = 1;
  }
}
}
