/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Arquivos;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author augus
 */
public class lerArquivo {
    FileReader fileR;
    BufferedReader buff;
    public lerArquivo(){
        try {
            fileR = new FileReader("arquivo.txt");
            buff = new BufferedReader (fileR);
            while(buff.ready())
            {
                System.out.println(buff.readLine());
            }
            
            buff.close();
        }
        catch (FileNotFoundException ex) {
            System.out.println("Arquivo não encontrado: " + ex.getMessage () );
        
        }
        catch (IOException er)
        {
            
        }
    }
}
