 int pulsador=0;
void setup() {
  // put your setup code here, to run once:
 
  pinMode(7, INPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  pulsador = digitalRead(7);

    if(pulsador==HIGH) {          //si el estado es pulsado
    get http:///basket/agregar.php

  }
  
}
