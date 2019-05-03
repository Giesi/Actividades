/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package nnumeros;

import javax.swing.JOptionPane;

/**
 *
 * @author Katherine Urquilla
 * 
 */
public class Nnumeros {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        double suma=0,promedio,negativo=0,n=0,prom1=0,acum=0,numero;
        int dato;
        dato=Integer.parseInt( JOptionPane.showInputDialog("Ingrese el numero de datos a ingresar"));
        for(int i=1;i<=dato;i++)
        {
            numero=Double.parseDouble(JOptionPane.showInputDialog("Digite una numero"));
           n=n+numero;
            if(numero<0)
            {
               negativo=negativo+numero;
            }
            if(numero>0)
            {
               acum++;
                suma=suma+numero;
            }
        }
        promedio=suma/acum;
        prom1=n/dato;
        JOptionPane.showMessageDialog(null, "El total de la suma de numero positivo es:"+suma+"\n"+"total de numero negativo es:"+negativo+"\n"+"El promedio de los numeros positivos es"+promedio+"\n"+"promedio total de los numero ingresados es:"+prom1+"\n"+"Total de numeros positivos :"+acum);

    }
    
}
