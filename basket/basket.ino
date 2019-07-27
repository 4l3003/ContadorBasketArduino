#include <Ethernet.h>
#include <SPI.h>


    const int sum1=5;
  const int sum2=6;
  const int sum3=7;
  const int borrar=8;
  const int punto=0;
// Configuracion del Ethernet Shield
byte mac[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFF, 0xEE}; // Direccion MAC
byte ip[] = { 192,168,1,5 }; // Direccion IP del Arduino
byte server[] = { 192,168,1,10 }; // Direccion IP del servidor
EthernetClient client; 
void setup(void) { 
  
  Ethernet.begin(mac, ip); // Inicializamos el Ethernet Shield
  delay(1000); // Esperamos 1 segundo de cortesia
  SPI.begin(); // Init SPI bus 
  Serial.begin(9600);
  // put your setup code here, to run once:
  pinMode(sum1, INPUT);
  pinMode(sum2, INPUT);
  pinMode(sum3, INPUT);
  pinMode(borrar, INPUT);

}

void loop(void) {

  // read the state of the pushbutton value:

  // check if the pushbutton is pressed. If it is, the buttonState is HIGH:
  if (digitalRead(sum1) == HIGH) {
    Serial.println("Entro al 1");
   // Proceso de envio de muestras al servidor
  Serial.println("Connecting...");
  if (client.connect(server, 80)>0) {  // Conexion con el servidor
    client.print("GET /basket/agregar.php?punto=1"); // Enviamos los datos por GET
  
    client.println(" HTTP/1.0");
    client.println("User-Agent: Arduino 1.0");
    client.println();
    Serial.println("Conectado");
  } else {
    Serial.println("Fallo en la conexion");
  }
  if (!client.connected()) {
    Serial.println("Disconnected!");
  }
  
   
   }
  // read the state of the pushbutton value:

     if (digitalRead(sum2) == HIGH) {
   // Proceso de envio de muestras al servidor
  Serial.println("Connecting...");
  if (client.connect(server, 80)>0) {  // Conexion con el servidor
    client.print("GET /basket/agregar.php?punto=2"); // Enviamos los datos por GET
   
    client.println(" HTTP/1.0");
    client.println("User-Agent: Arduino 1.0");
    client.println();
    Serial.println("Conectado");
  } else {
    Serial.println("Fallo en la conexion");
  }
  if (!client.connected()) {
    Serial.println("Disconnected!");
  }
  
   
   }

 // read the state of the pushbutton value:

     if (digitalRead(sum3) == HIGH) {
   // Proceso de envio de muestras al servidor
  Serial.println("Connecting...");
  if (client.connect(server, 80)>0) {  // Conexion con el servidor
    client.print("GET /basket/agregar.php?punto=3"); // Enviamos los datos por GET

    client.println(" HTTP/1.0");
    client.println("User-Agent: Arduino 1.0");
    client.println();
    Serial.println("Conectado");
  } else {
    Serial.println("Fallo en la conexion");
  }
  if (!client.connected()) {
    Serial.println("Disconnected!");
  }
  
   
   }

 // read the state of the pushbutton value:

     if (digitalRead(borrar) == HIGH) {
   // Proceso de envio de muestras al servidor
  Serial.println("Connecting...");
  if (client.connect(server, 80)>0) {  // Conexion con el servidor
    client.print("GET /basket/agregar.php?punto=4"); // Enviamos los datos por GET

    client.println(" HTTP/1.0");
    client.println("User-Agent: Arduino 1.0");
    client.println();
    Serial.println("Conectado");
  } else {
    Serial.println("Fallo en la conexion");
  }
  if (!client.connected()) {
    Serial.println("Disconnected!");
  }
  
   
   }

  
}
