using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class JSONReaderSymboles : MonoBehaviour
{
    public TextAsset datas;
    public Dictionary<int, List<string>> dicoDeCartes;

    [System.Serializable]
    public class variablesDuDico
    {
        public int id;
        public string nom;
        public string description;
        public List<string> maListe;
        public variablesDuDico(string nom, string description)
            {
                this.nom = nom;
                this.description = description;
                maListe = new List<string> { nom, description }; // Initialisez la liste avec les valeurs de nom et description
            }
    }

    [System.Serializable]
    public class InfoData
    {
        public variablesDuDico[] infos;
    }


    void Start()
    {
        InfoData data = JsonUtility.FromJson<InfoData>(datas.text);

        dicoDeCartes = new Dictionary<int, List<string>>();
        foreach(variablesDuDico info in data.infos)
        {
            dicoDeCartes.Add(info.id, info.maListe);
        }

        //Debug.Log(dicoDeCartes["Hear"]);
    }
}
