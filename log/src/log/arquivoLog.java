/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package log;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author augus
 */
public class arquivoLog {

    File arquivo;
    FileWriter fileWriter;
    BufferedWriter buffredWriter;
    FileReader fileReader;
    BufferedReader bufferedReader;

    public arquivoLog(String erros) {
        escreverLog(erros);
    }

    private void escreverLog(String erros) {

        try {

            arquivo = new File("Exceptions.log");
            fileReader = new FileReader(arquivo);
            bufferedReader = new BufferedReader(fileReader);
            Vetor texto = new Vector();
            while (bufferedReader.ready()) {
                texto.add(bufferedReader.readLine());
            }
            fileWriter = new FileWriter(arquivo);
            buffredWriter = new BufferedWriter(fileWriter);
            for(int i=0;i<texto.size();i++)
            {
                buffredWriter.write(texto.get(i).toString());
                buffredWriter.newLine();
            }
            buffredWriter.write(erros);
            bufferedReader.close();
            buffredWriter.close();
        } catch (FileNotFoundException ex) {

            try {
                arquivo.createNewFile();
                escreverLog(erros);

            } catch (IOException ex1) {
                System.exit(0);

            }
        } catch (IOException er) {
            System.exit(0);
        }
    }

}

}
