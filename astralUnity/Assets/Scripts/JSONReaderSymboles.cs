using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class JSONReaderSymboles : MonoBehaviour
{
    public TextAsset JSONfile;
    public InfoData data;
    public Dictionary<string, List<string>> dicoDeCartes;

    [System.Serializable]
    public class variablesDuDico
    {
        public string id;
        public string nom;
        public string description;

    }

    [System.Serializable]
    public class InfoData
    {
        public variablesDuDico[] datas;
    }


    void Start()
    {
        data = JsonUtility.FromJson<InfoData>(JSONfile.text); //datas c'est le fichier JASON sous foume d'un objet qui contien une liste

        dicoDeCartes = new Dictionary<string, List<string>>();
        foreach(variablesDuDico info in data.datas)
        {
            Debug.Log("coucou JASON");
            dicoDeCartes.Add(info.id, new List<string> { info.nom, info.description });
        }

        //Debug.Log(dicoDeCartes["Hear"]);
    }
}
