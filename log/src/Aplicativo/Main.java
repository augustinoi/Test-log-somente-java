/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Aplicativo;

import Arquivos.escreverArquivo;
import Arquivos.lerArquivo;
import log.arquivoLog;

/**
 *
 * @author augus
 */
public class Main {
 
    public Main() {
        //escreverArquivo esc = new escreverArquivo();
       // lerArquivo leia = new lerArquivo();
       
       new arquivoLog ("...Aplicativo iniciado");
       
    }
    public static void main (String args[])
    {
        new arquivoLog ("Iniciando aplicativo");
        new Main();
    }
}
