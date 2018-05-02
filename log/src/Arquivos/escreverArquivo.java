/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Arquivos;

import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author augus
 */
public class escreverArquivo {

    FileWriter fileR;
    BufferedWriter buff;

    public escreverArquivo() {

        try {
            fileR = new FileWriter("arquivo.txt");
            buff = new BufferedWriter(fileR);
            buff.write("Fun35.");
            buff.newLine();
            buff.write("... funcionou");
            buff.close();
        } catch (IOException ex) {
            Logger.getLogger(escreverArquivo.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}
