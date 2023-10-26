using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class buttonBehavior : MonoBehaviour
{
   public void OpenMiniGames(int Minigames)
   {
        string MiniGamesName = "astral";
        SceneManager.LoadScene(MiniGamesName);
   }
}
