using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class RestartGame : MonoBehaviour
{
    public Button restartButton;

    void Start()
    {
        // Attachez cette fonction à l'événement "OnClick" du bouton dans l'inspecteur Unity.
        restartButton.onClick.AddListener(ReloadScene);
    }

    void ReloadScene()
    {
        // Rechargez la scène actuelle. Assurez-vous que le nom de la scène est correct.
        Scene currentScene = SceneManager.GetActiveScene();
        SceneManager.LoadScene(currentScene.name);
        Debug.Log("Restart scene");
        CardBehavior.hasBeenChosen = false;
    }
}
