using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;

public class IDWebSender : MonoBehaviour
{
    
    public string webServiceURL = "https://localhost/astral/Session/accueil.php?id_carte=";

    // if (_isClicked){
    private int gameID = 123 ; //BUGG :: Remplacez par l'ID de jeu que vous souhaitez envoyer peut etre un HGetcompenent de l'id de la cartebehavior dans unity

    // }


    void Start()
    {
        StartCoroutine(SendWebRequest());
    }

    IEnumerator SendWebRequest()
    {
        // Créez l'URL complète en ajoutant l'ID de jeu à la fin
        string completeURL = webServiceURL + gameID;

        // Créez une instance UnityWebRequest pour la requête GET
        using (UnityWebRequest webRequest = UnityWebRequest.Get(completeURL))
        {
            // Envoyez la requête et attendez la réponse
            yield return webRequest.SendWebRequest();

            // Vérifiez s'il y a eu une erreur dans la requête
            if (webRequest.result == UnityWebRequest.Result.ConnectionError || webRequest.result == UnityWebRequest.Result.ProtocolError)
            {
                Debug.LogError("Erreur de requête : " + webRequest.error);
            }
            else
            {
                // La requête a réussi, vous pouvez traiter la réponse ici
                string response = webRequest.downloadHandler.text;
                Debug.Log("Réponse du serveur : " + response);
            }
        }
    }
}

