/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sueldon;
import javax.swing.JOptionPane;
/**
 *
 * @author Katherine Urquilla
 */
public class SueldoN {

    /**
     * @param args the command line arguments
     */
    @SuppressWarnings("empty-statement")
    public static void main(String[] args) {
        // TODO code application logic here
        boolean repetir=true;
        double nuSueldo = 0,nomina=0,nomAum=0;     
        while(repetir){
        String codigo = JOptionPane.showInputDialog("Ingrese el codigo del empleado");
        String nombre = JOptionPane.showInputDialog("Ingrese el nombre del empleado");
        String Sue = JOptionPane.showInputDialog("Ingrese el sueldo del empleado");
        double Sueldo=Double.parseDouble(Sue);
        if(Sueldo<650){
       nuSueldo=Sueldo+(Sueldo*0.15);
       nomina=nomina+Sueldo;
       nomAum=nomAum+nuSueldo;
       System.out.println("Codigo de trabajador:"+codigo+"\nNombre del trabajador:"+nombre+"\nSueldo del trabajador:$"
       +nuSueldo );   
      int confirmado=JOptionPane.showConfirmDialog(null, "Deseas ingresar otro empleado", "Continuar",0); 
if (JOptionPane.OK_OPTION == confirmado)
   repetir=true;
else 
     repetir=false;      
      }
 if(Sueldo>=650 && Sueldo<=1000){
            nuSueldo=(Sueldo*0.12)+Sueldo;
        }
        if(Sueldo>1000){
         nuSueldo=Sueldo+(Sueldo*0.09);
        }
      }    
   System.out.println("Monto total de la nomia:"+nomina+"\nNomina Total con aumentos:"+nomAum);
        }
    }
    

