/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package calendario;

import java.util.Scanner;

/**
 *
 * @author Giuliani
 */
public class Calendario {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        WSConsumer webService = new WSConsumer();
        int scelta = 657894;
        String nome="",descrizione="",tipo="",data="",ora="",id="";
        Scanner input = new Scanner(System.in);
        do{
        System.out.println("1- Aggiungi Calendario");
        System.out.println("2- Cancella Calendario");
        System.out.println("3- Modifica Calendario");
        System.out.println("4- Vedi i tuoi Calendari");
        System.out.println("0- POWER OFF");
        
        scelta = input.nextInt();
        System.out.println();
        System.out.println();
        System.out.println();
        switch(scelta){
            case 1:{
                System.out.println("Come vuoi chiamare il calendario?");
                nome = input.nextLine();
                System.out.println("Qual è la descrizione del calendario?");
                descrizione = input.nextLine();
                System.out.println("qual è la tipologia del calendario");
                tipo = input.nextLine();
                
                webService.addCalendario(nome, descrizione, tipo);
                webService.printResult();
                break;
            }
            case 2:{
                System.out.println("Scrivi l'id del calendario da eliminare");
                id = input.nextLine();
                
                webService.deleteCalendario(id);
                webService.printResult();
                break;
            }
            case 3:{
                System.out.println("Scrivi l'id dell'impegno da modificare");
                id = input.nextLine();
                System.out.println("Scrivi il nome dell'impegno");
                nome = input.nextLine();
                System.out.println("Scrivi la descrizione dell'impegno");
                descrizione = input.nextLine();
                System.out.println("Scrivi il tipo dell'impegno");
                tipo = input.nextLine();
                System.out.println("Scrivi la data dell'impegno");
                data = input.nextLine();
                System.out.println("Scrivi il ora dell'impegno");
                ora = input.nextLine();
                webService.modificaCalendario(nome, descrizione, tipo, id);
                webService.printResult();
                break;
            }
            case 4:{
                webService.getCalendari();
                    
                webService.printResult();
                break;
            }
            case 0:{
                System.out.println("FINE");
            }
            
        }
        
        }while(scelta!=0);
        
    }
    
}
    
